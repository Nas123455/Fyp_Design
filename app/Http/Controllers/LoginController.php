<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use App\Models\User;

class LoginController extends Controller
{
    public function index()
    {
        return view('login'); // Ensure this view exists in the resources/views directory
    }

    public function authenticate(Request $request)
    {
        // Validate input
        $validator = Validator::make($request->all(), [
            'email'    => 'required|email',
            'password' => 'required'
        ]);

        if ($validator->fails()) {
            return redirect()->route('login')
                ->withErrors($validator)
                ->withInput();
        }

        // Attempt to log the user in
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            
            // Redirect to the appropriate dashboard
            return $this->redirectDashboard();
        } else {
            return redirect()->route('login')
                ->with('error', 'Either email or password is incorrect.')
                ->withInput();
        }
    }

    public function register()
    {
        return view('register'); // Ensure this view exists in the resources/views directory
    }

    public function processRegister(Request $request)
    {
        // Validate input
        $validated = $request->validate([
            'name'                  => 'required|string|max:255',
            'email'                 => 'required|email|unique:customer,email',
            'phone'                 => 'required|string|max:15',
            'password'              => 'required|string|confirmed|min:8',
            'role'                  => 'required|in:customer,admin', // Validation for role
        ]);

        // Create new user
        User::create([
            'name'     => $validated['name'],
            'email'    => $validated['email'],
            'phone'    => $validated['phone'],
            'password' => bcrypt($validated['password']),
            'role'     => $validated['role'], // Storing the role
        ]);

        // Redirect to login with success message
        return redirect()->route('login')->with('success', 'Registration successful. Please log in.');
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('login'); // Redirecting to login after logout
    }

    public function redirectDashboard()
    {
        if (Auth::user()->role === 'admin') {
            return redirect()->route('admin.dashboard');
        }

        return redirect()->route('account.dashboard');
    }
}
