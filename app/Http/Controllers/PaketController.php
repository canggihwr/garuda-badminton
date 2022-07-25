<?php

namespace App\Http\Controllers;

use App\Models\Paket;
use Illuminate\Http\Request;

class PaketController extends Controller
{
    public function edit(Paket $paket)
    {
        return view('db/edit_paket', [
            "paket" => $paket
        ]);
        
    }

    public function update(Request $request, Paket $paket)
    {
        $data = $request->validate([
            'nama' => 'required',
            'harga' => 'required',
            'waktu_main' => 'required',
        ]);

        Paket::where('id', $paket->id)->update($data);
        return redirect('/dashboard/paket')->with('success', 'Paket berhasil diubah!');

    }

    public function destroy(Paket $paket)
    {
        Paket::destroy($paket->id);
        return redirect('/dashboard/paket')->with('success', 'Paket berhasil dihapus!');
    }

    public function store(Request $request)
    {
        
        $data = $request->validate([
            'nama' => 'required',
            'harga' => 'required',
            'lama' => 'required'
        ]);

        Paket::create($data);

        return redirect('/dashboard/paket')->with('success', 'Paket berhasil ditambahkan!');
    }
}
