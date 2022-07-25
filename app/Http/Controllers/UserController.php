<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        return view('db/user', [
            "user" => User::all()
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

        return redirect('/dashboard/user')->with('success', 'User berhasil ditambah!');
        
        
    }

    public function edit(User $user)
    {
        return view('db/edit_user', [
            "user" => $user
        ]);
        
    }

    public function update(Request $request)
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
        $id =  $request->getid;

        User::where('id', $id)->update($data);
        return $data;
        // return redirect('/dashboard/user')->with('success', 'User berhasil diubah!');

    }

    public function destroy(User $user)
    {
        User::destroy($user->id);
        return redirect('/dashboard/user')->with('success', 'User berhasil dihapus!');
    }
}
