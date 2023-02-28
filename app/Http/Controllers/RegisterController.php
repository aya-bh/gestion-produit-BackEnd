<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Requests\RegisterRequest;
use App\Models\UserVerify;
use Illuminate\Support\Str;
use Mail;

use Illuminate\Support\Facades\Crypt;


class RegisterController extends Controller
{
    /**
     * Display register page.
     * 
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        return view('auth.register');
    }

    /**
     * Handle account registration request
     * 
     * @param RegisterRequest $request
     * 
     * @return \Illuminate\Http\Response
     */
    public function register(RegisterRequest $request)
    {

        $user = User::create($request->validated());

        $user->assignRole(['utilisateur']);
        $password = Crypt::decryptString($user->password);

        $token = Str::random(64);
        UserVerify::create([
            'user_id' => $user->id,
            'token' => $token
        ]);
        Mail::send('emails.emailVerificationEmail', ['token' => $token, 'user'=>$user, 'pass'=>$password], function ($message) use ($request) {
            $message->to("ayabenhaj4@gmail.com");
            $message->subject('E-mail de vérification');
        });
        //event(new Registered($user));

        auth()->login($user);

        return redirect('/')->with('success', "Compte enregistré avec succée.");
    }

    public function verifyAccount($token)
    {
        $verifyUser = UserVerify::where('token', $token)->first();
        $message = 'Désolé, votre email ne peut pas être identifié.';
        if (!is_null($verifyUser)) {
            $user = $verifyUser->user;
            if ($user->is_email_verified == 0) {
                $verifyUser->user->is_email_verified = 1;
                $verifyUser->user->save();
                $message = "Votre e-mail est vérifié. Vous pouvez maintenant vous connecter.";
            } else {
                $message = "Votre e-mail est déjà vérifié. Vous pouvez maintenant vous connecter.";
            }
        }
        return redirect()->route('affichage_connection')->with('message', $message);
    }
}
