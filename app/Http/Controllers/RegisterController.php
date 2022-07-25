<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function index()
    {
        return view('login.sign-up', [
            // "title" => "Register"
        ]);
    }

    public function store(Request $request)
    {
        
        $data = $request->validate([
            'name' => 'required',
            'no_hp' => 'required',
            'username' => ['required', 'unique:users'],
            'email' => 'required|unique:users|email',
            'password' => 'required'
        ]);
        $data['tipe_akun'] = $request->tipe_akun;

        $data['password'] = bcrypt($data['password']);
        User::create($data);

        return redirect('/daftar')->with('success', 'Pendaftaran berhasil! silahkan login!');
        
        
    }
}
