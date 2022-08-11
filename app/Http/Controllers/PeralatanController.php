<?php

namespace App\Http\Controllers;

use App\Models\Peralatan;
use Illuminate\Http\Request;
use Alert;


class PeralatanController extends Controller
{

    public function store(Request $request)
    {
        
        $data = $request->validate([
            'nama' => 'required',
            'harga' => 'required',
            'status' => 'required',
        ]);

        $stats = '';

        if ($data['status'] == 'unpublished') {
            $stats = 'Tidak tersedia';
        } else if($data['status'] == 'scheduled') {
            $stats = 'Restock';
        }else {
            $stats = 'Tersedia';
        }

        $datafoto = "";

        if ($request->hasFile('foto')) {
            $request->file('foto')->move('img/fotoperalatan/', $request->file('foto')->getClientOriginalName());
            $datafoto = $request->file('foto')->getClientOriginalName();

        } 

        $data = [

            'nama' => $request->nama,
            'harga' => $request->harga,
            'status' => $stats,
            'foto' => $datafoto,
            'restock' => $request->restock,
            'deskripsi' => $request->deskripsi
        ];
        

        Peralatan::create($data);
        Alert::alert('Sukses!', 'Peralatan berhasil ditambahkan!', 'success');
        return redirect('/dashboard/peralatan')->with('success', 'Peralatan berhasil ditambahkan!');
    }


    public function edit(Peralatan $peralatan)
    {
        return view('db/edit_peralatan', [
            "peralatan" => $peralatan
        ]);
        
    }

    public function update(Request $request, Peralatan $peralatan)
    {
        $data = $request->validate([
            'nama' => 'required',
            'harga' => 'required',
            'status' => 'required'
        ]);

        $stats = '';

        if ($data['status'] == 'unpublished') {
            $stats = 'Tidak tersedia';
        } else if($data['status'] == 'scheduled') {
            $stats = 'Restock';
        }else {
            $stats = 'Tersedia';
        }

        $datafoto = "";


        if ($request->hasFile('foto')) {
            $request->file('foto')->move('img/fotoperalatan/', $request->file('foto')->getClientOriginalName());
            $datafoto = $request->file('foto')->getClientOriginalName();
        } 

        $data = [
            'nama' => $request->nama,
            'harga' => $request->harga,
            'status' => $stats,
            'foto' => $datafoto,
            'restock' => $request->restock,
            'deskripsi' => $request->deskripsi
        ];
        

        Peralatan::where('id', $peralatan->id)->update($data);
        Alert::alert('Sukses!', 'Peralatan berhasil diubah!', 'success');

        return redirect('/dashboard/peralatan')->with('success', 'Peralatan berhasil diubah!');

    }

    public function destroy(Peralatan $peralatan)
    {
        Peralatan::destroy($peralatan->id);
        Alert::alert('Sukses!', 'Peralatan berhasil dihapus!', 'success');
        
        return redirect('/dashboard/peralatan')->with('success', 'Peralatan berhasil dihapus!');
    }

    
}
