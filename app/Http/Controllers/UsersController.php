<?php

namespace App\Http\Controllers;

use App\Models\User;
use Hash;

use Spatie\Permission\Models\Role;
use App\Http\Requests\StoreUserRequest;
use App\Http\Requests\UpdateUserRequest;
use Mail;
use Illuminate\Support\Facades\Crypt;

use App\Models\UserVerify;
use Illuminate\Support\Str;

class UsersController extends Controller
{
    /**
     * Display all users
     * 
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::latest()->paginate(10);

        return view('users.index', compact('users'));
    }

    /**
     * Show form for creating user
     * 
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('users.create', [
            'roles' => Role::latest()->get()

        ]);
    }

    /**
     * Store a newly created user
     * 
     * @param User $user
     * @param StoreUserRequest $request
     * 
     * @return \Illuminate\Http\Response
     */
    public function store(User $user, StoreUserRequest $request)
    {
       
        $user = $user->create($request->validated());

        $user->assignRole($request->get('role'));
        $token = Str::random(64);
        $verifyUser = UserVerify::create([
            'user_id' => $user->id,
            'token' => $token
        ]);
        $user = $verifyUser->user;
        $verifyUser->user->is_email_verified = 1;
        $verifyUser->user->save();
        // email data
        $email_data = array(
            'name' => $user->name,
            'email' => $user->email,
        );
        $password = Crypt::decryptString($user->password);
       
        Mail::send(
            "emails.usercreated",
            ['pass' => $password, 'user'=>$user],
            function ($message) use ($email_data) {
                $message->to($email_data['email'], $email_data['name'])
                    ->subject("Création d'/ utilisateur");
            }
        );

        return redirect()->route('utilisateur.accueil')
            ->withSuccess(__('Utilisateur crée avec sucée'));
    }



    /**
     * Edit user data
     * 
     * @param User $user
     * 
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        return view('users.edit', [
            'user' => $user,
            'userRole' => $user->roles->pluck('name')->toArray(),
            'roles' => Role::latest()->get()
        ]);
    }

    /**
     * Update user data
     * 
     * @param User $user
     * @param UpdateUserRequest $request
     * 
     * @return \Illuminate\Http\Response
     */
    public function update(User $user, UpdateUserRequest $request)
    {
        
        $user->update($request->validated());

        $user->syncRoles($request->get('role'));
        // email data
        $email_data = array(
            'name' => $user->name,
            'email' => $user->email,
        );
        $password = Crypt::decryptString($user->password);
        Mail::send(
            "emails.usercreated",
            ['pass' => $password, 'user'=>$user],
            function ($message) use ($email_data) {
                $message->to($email_data['email'], $email_data['name'])
                    ->subject("Modification d'/ utilisateur");
            }
        );

        return redirect()->route('utilisateur.accueil')
            ->withSuccess(__('Utilisater modifié avec succée'));
    }

    /**
     * Show user data
     * 
     * @param User $user
     * 
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        return view('users.show', [
            'user' => $user,
            'userRole' => $user->roles->pluck('name')->toArray(),
            'roles' => Role::latest()->get()
        ]);
    }

    /**
     * Delete user data
     * 
     * @param User $user
     * 
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        $user->delete();

        return redirect()->route('utilisateur.accueil')
            ->withSuccess(__('Utilisateur supprimé avec succé'));
    }

    public function delete($id)
    {
        $user = User::find($id);

        return view('users.delete', compact('user'));
    }
}
