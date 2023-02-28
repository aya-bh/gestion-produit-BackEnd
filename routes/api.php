<?php

use App\Http\Controllers\RegisterController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\ValidationException;
use App\Models\UserVerify;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Crypt;


/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/


Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


//Route::get('sanctum/verify/{token}', [RegisterController::class, 'verifyAccount'])->name('verification_utilisateur'); 


Route::post('/sanctum/token', function (Request $request) {
    $request->validate([
        'username' => 'required',
        'password' => 'required',
        'device_name' => 'required',
    ]);
 
    $user = User::where('username', $request->username)->first();
    $password = Crypt::decryptString($user->password);

    if (! $user || ($request->password != $password)) {
        throw ValidationException::withMessages([
            'username' => ['The provided credentials are incorrect.'],
        ]);
    }
 
    return $user->createToken($request->device_name)->plainTextToken;
});


Route::post('/sanctum/register/token', function (Request $request) {
   
 
    $user = User::create( 
        $request->validate([
        'name' => 'required',
        'username' => 'required',
        'email' => 'required',
        'password' => 'required',
        'password_confirmation' =>'required',
        'device_name' => 'required',
    ]));
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
    return $user->createToken($request->device_name)->plainTextToken;
});



Route::middleware('auth:sanctum')->get('/user/revoke', function (Request $request) {
    $user = $request->user();
    $user->tokens()->delete();
    return "token sont effacée";
});