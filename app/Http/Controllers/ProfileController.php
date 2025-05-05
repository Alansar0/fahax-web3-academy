<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProfileUpdateRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;

class ProfileController extends Controller
{

     // Show Profile Page
     public function showProfile()
     {
         // Fetch user data (replace this with your actual logic)
         $user = [
             'full_name' => 'Randolph Turner',
             'email' => 'Molly8@hotmail.com',
             'phone' => '726-993-9812',
             'user_type' => 'Student',
             'bio' => 'Write a little about yourself',
             'location' => 'Nigeria',
             'date_joined' => 'Fri Mar 22 2024 15:09:14',
         ];

         return view('profile', compact('user'));
     }

     // Show Edit Profile Page
     public function showEditProfile()
     {
         return view('edit-profile');
     }
    /**
     * Display the user's profile form.
     */
    public function edit(Request $request): View
    {
        return view('profile.edit', [
            'user' => $request->user(),
        ]);
    }

    /**
     * Update the user's profile information.
     */
    public function update(ProfileUpdateRequest $request): RedirectResponse
    {
        $request->user()->fill($request->validated());

        if ($request->user()->isDirty('email')) {
            $request->user()->email_verified_at = null;
        }

        $request->user()->save();

        return Redirect::route('profile.edit')->with('status', 'profile-updated');
    }

    /**
     * Delete the user's account.
     */
    public function destroy(Request $request): RedirectResponse
    {
        $request->validateWithBag('userDeletion', [
            'password' => ['required', 'current_password'],
        ]);

        $user = $request->user();

        Auth::logout();

        $user->delete();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return Redirect::to('/');
    }
}
