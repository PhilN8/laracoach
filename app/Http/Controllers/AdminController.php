<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Flasher\Laravel\Facade\Flasher;
// use Flasher\Prime\FlasherInterface;

class AdminController extends Controller
{
    public function index()
    {
        // Flasher::addInfo('Login Successful');
        return view('admin.admin');
    }

    public function login()
    {
        return view('admin.login');
    }

    public function authenticate(Request $request)
    {
        $formFields = $request->validate([
            'email' => ['required', 'email'],
            'password' => 'required'
        ]);

        if (auth()->attempt($formFields)) {
            $request->session()->regenerate();
            Flasher::addInfo('Login Successful');
            return redirect('/admin');
            // ->with('message', 'You are now logged in');
        }

        Flasher::addError('Invalid Credentials');
        // return redirect('/admin/login');
        return back()
            ->withErrors(['email' => 'Invalid Credentials'])
            ->onlyInput('email');
    }

    public function logout(Request $request)
    {
        auth()->logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        Flasher::addInfo('Logout Successful');

        return redirect('/admin/login');
        // ->with('message', 'You have been logged out!');
    }
}
