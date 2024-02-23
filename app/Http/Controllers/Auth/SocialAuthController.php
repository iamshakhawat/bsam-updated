<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Laravel\Socialite\Facades\Socialite;
class SocialAuthController extends Controller
{
   

public function redirectToGoogle()
{
    return Socialite::driver('google')->redirect();
}

public function handleGoogleCallback()
{
    // $user = Socialite::driver('google')->user();
    // Implement your logic to handle the authenticated user here

    $user = Socialite::driver('google')->user();

        // Check if the user with this email exists in your database
        $existingUser = User::where('email', $user->email)->first();
      
        if ($existingUser) {
            // Log in the existing user
            auth()->login($existingUser);
        } else {
            // Create a new user with the Google data
            $newUser = new User();
            $newUser->name = $user->name;
            $newUser->email = $user->email;
            Session::put('user', $user->email);
            $newUser->save();
            auth()->login($newUser);
        }

        Session::put('user',$user->email);
        request()->session()->flash('success','Successfully login');
        return redirect()->route('home');
}

public function redirectToFacebook()
{
    return Socialite::driver('facebook')->redirect();
}

public function handleFacebookCallback()
{
    $user = Socialite::driver('facebook')->user();
    // Implement your logic to handle the authenticated user here
}

}
