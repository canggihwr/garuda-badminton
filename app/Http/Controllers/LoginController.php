<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Alert;

class LoginController extends Controller
{
    public function index()
    {
        return view('login.sign-in', [
            // "title" => "Login"
        ]);
    }

    public function authenticate(Request $request)
    {
        $credentials = $request->validate([
            'username' => 'required',
            'password' => 'required'
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            Alert::alert('Berhasil login!', 'Mengarahkan ke Dashboard!', 'success');
            return redirect()->intended('/dashboard');
        }
        Alert::alert('Login Gagal!', 'Username atau password salah!', 'error');
        return back()->with('loginError', 'Login Gagal! Username atau password salah!');
    }

    public function logout(Request $request)
    {
        Auth::logout();
        // Alert::alert('Anda berhasil logout!', '', 'info');
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/');
    }
}
