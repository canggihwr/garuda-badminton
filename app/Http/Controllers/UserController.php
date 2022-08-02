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
        return view('db/add_user');

    }

    public function view()
    {
        return view('db/add_user');

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

        if ($request->hasFile('foto')) {
            $request->file('foto')->move('img/fotouser/', $request->file('foto')->getClientOriginalName());
            $data['foto'] = $request->file('foto')->getClientOriginalName();
        } 
        
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
        if ($request->hasFile('foto')) {
            $request->file('foto')->move('img/fotouser/', $request->file('foto')->getClientOriginalName());
            $data['foto'] = $request->file('foto')->getClientOriginalName();
        } 
        $data['name'] = $request->name;
        $data['email'] = $request->email;
        $data['username'] = $request->username;
        $data['no_hp'] = $request->no_hp;
        $data['password'] = bcrypt($request->password);
        $id =  $request->getid;

        User::where('id', $id)->update($data);
        return redirect('/dashboard/user')->with('success', 'User berhasil diubah!');

    }

    public function destroy(User $user)
    {
        User::destroy($user->id);
        return redirect('/dashboard/user')->with('success', 'User berhasil dihapus!');
    }
}
