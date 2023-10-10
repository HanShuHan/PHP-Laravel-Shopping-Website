<?php

namespace App\Http\Controllers;

use App\Models\CartItem;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Validation\Rule;

class UserController extends Controller
{
    public function logout() {
        auth()->logout();
        return redirect('/')->with('success', __('messages.logged_out'));
    }

    public function showProfile(Request $request)
    {
        if (auth()->guest()) {
            return redirect('/signup');
        }
        $cartItemsCount = 0;
        if (session()->has('cart_id')) {
            $cartId = session('cart_id');
            $cartItemsCount = CartItem::where('cart_id', $cartId)->sum('quantity');
        }
        $user = auth()->user();
        return view('pages/user-profile', [
            'user' => $user,
            'cartItemsCount' => $cartItemsCount
        ]);
    }

    public function updatePicture() {
        return redirect('/profile')->with('success', 'Feature not yet implemented');
    }
    public function updateProfile(Request $request)
    {
        $user = auth()->user();

        // Validate the request data
        $request->validate([
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'user_name' => 'required|string|max:255|unique:users,user_name,' . $user->id,
            'email' => 'required|email|unique:users,email,' . $user->id,
            'phone_number' => 'nullable|digits:10',
            'address_line1' => 'nullable|string|max:255',
            'address_line2' => 'nullable|string|max:255',
            'postal_code' => 'nullable|size:6',
            'province' => 'nullable|string|max:2',
            'city' => 'nullable|string|max:255',
        ]);

        // Update the user's profile
        $user->update($request->all());

        // Redirect back to the profile page
        return redirect('/profile')->with('success', 'Profile updated successfully');
    }

    public function login(Request $request) {
        $fields = $request->validate([
            'user_name' => 'required',
            'password' => 'required'
        ]);

        if(auth()->attempt(['user_name' => $fields['user_name'], 'password' => $fields['password']])) {
            $request->session()->regenerate();
            return redirect('/');
        }
        else {
            return redirect('/login')->with('failure', __('messages.login_fail'));
        }
    }

    public function register(Request $request) {
        $fields = array_merge($request->validate([
            'user_name' => ['required', 'min:6', 'max:24', Rule::unique('users', 'user_name')],
            'email' => ['required', 'email', Rule::unique('users', 'email')],
            'password' => ['required', 'min:8', 'confirmed'],
            'first_name' => ['required', 'string', 'max:255'],
            'last_name' => ['required', 'string', 'max:255'],
        ]), [
            'address_line1' => null,
            'address_line2' => null,
            'phone_number' => null,
            'postal_code' => null,
            'province' => null,
            'city' => null,
        ]);

        $fields['password'] = bcrypt($fields['password']);
        $user = User::create($fields);
        auth()->login($user, true);
        return redirect('/');
    }
}
