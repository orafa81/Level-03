<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\User;
use Laravel\Socialite\Facades\Socialite;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use Throwable;

class GoogleAuthController extends Controller
{

    /**
     * Redirect the user to Google’s OAuth page.
     */
    public function redirect()
    {
        return Socialite::driver('google')->redirect();
    }

    /**
     * Handle the callback from Google.
     */
    public function callback()
    {
        try {
            
            $user = Socialite::driver('google')->user();
        } catch (Throwable $e) {
            return redirect('/')->with('error', 'Google authentication failed.');
        }

        
        $existingUser = User::where('email', $user->email)->first();

        if ($existingUser) {
           
            $existingUser->update(['avatar' => $user->avatar]);
            Auth::login($existingUser);

        } else {
            
            $newUser = User::updateOrCreate([
                'email' => $user->email
            ], [
                'name' => $user->name,
                'password' => bcrypt(Str::random(16)),
                'avatar' => $user->avatar,
                'email_verified_at' => now()
            ]);
            Auth::login($newUser);
        }

        
        return redirect('/home');
    }
}