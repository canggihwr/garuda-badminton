<?php

namespace App\Http\Controllers;

use App\Models\Lapangan;
use Illuminate\Http\Request;
use Alert;
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
        if ($request->hasFile('foto')) {
            $request->file('foto')->move('img/fotolapangan/', $request->file('foto')->getClientOriginalName());
            $data['foto'] = $request->file('foto')->getClientOriginalName();
        } 

        $data = [
            'nama' => $request->nama,
            'deskripsi' => $request->deskripsi
        ];

        Lapangan::where('id', $lapangan->id)->update($data);
        Alert::alert('Berhasil!', 'Lapangan berhasil diupdate!', 'success');
        return redirect('/dashboard/lapangan')->with('success', 'Lapangan berhasil diupdate!');

    }

    public function destroy(Lapangan $lapangan)
    {
        Lapangan::destroy($lapangan->id);
        Alert::alert('Berhasil!', 'Lapangan berhasil dihapus!', 'success');

        return redirect('/dashboard/lapangan')->with('success', 'Lapangan berhasil dihapus!');
    }

    public function store(Request $request)
    {

        $data = Lapangan::create($request->all());

        if ($request->hasFile('foto')) {
            $request->file('foto')->move('img/fotolapangan/', $request->file('foto')->getClientOriginalName());
            $data->foto = $request->file('foto')->getClientOriginalName();
            $data->save();
        } 
        Alert::alert('Berhasil!', 'Lapangan berhasil ditambahkan!', 'success');

        return redirect('/dashboard/lapangan')->with('success', 'Lapangan berhasil ditambahkan!');
        
        
    }
}
