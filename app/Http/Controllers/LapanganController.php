<?php

namespace App\Http\Controllers;

use App\Models\Lapangan;
use Illuminate\Http\Request;

class LapanganController extends Controller
{
       
    public function show(Lapangan $lapangan)
    {
        return view('db/add_lapangan');
        
    }
    public function edit(Lapangan $lapangan)
    {
        return view('db/edit_lapangan', [
            "lapangan" => $lapangan
        ]);
        
    }

    public function update(Request $request, Lapangan $lapangan)
    {
        $data = $request->validate([
            'nama' => 'required',
            'deskripsi' => 'required'
        ]);

        Lapangan::where('id', $lapangan->id)->update($data);
        return redirect('/dashboard/lapangan')->with('success', 'Lapangan berhasil diubah!');

    }

    public function destroy(Lapangan $lapangan)
    {
        Lapangan::destroy($lapangan->id);
        return redirect('/dashboard/lapangan')->with('success', 'Lapangan berhasil dihapus!');
    }

    public function store(Request $request)
    {
        
        $data = $request->validate([
            'nama' => 'required',
            'deskripsi' => 'required'
        ]);

        Lapangan::create($data);

        return redirect('/dashboard/lapangan')->with('success', 'Lapangan berhasil ditambahkan!');
        
        
    }
}
