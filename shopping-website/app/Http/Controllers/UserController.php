<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Validation\Rule;

class UserController extends Controller
{
    public function logout() {
        auth()->logout();
        return redirect('/')->with('success', __('messages.logged_out'));
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
        $fields = $request->validate([
            'user_name' => ['required', 'min:6', 'max:24', Rule::unique('users', 'user_name')],
            'email' => ['required', 'email', Rule::unique('users', 'email')],
            'password' => ['required', 'min:8', 'confirmed'],
            'country' => []
        ]);

        $fields['password'] = bcrypt($fields['password']);
        $user = User::create($fields);
        auth()->login($user, true);
        return redirect('/');
    }
}
