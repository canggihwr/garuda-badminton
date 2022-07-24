<?php

namespace App\Http\Controllers;

use App\Models\Penyewaan;
use App\Models\User;
use App\Models\Paket;
use App\Models\Lapangan;
use Illuminate\Http\Request;

class PenyewaanController extends Controller
{
    public function list(Penyewaan $penyewaan)
    {
        return view('db/penyewaan', [
            'penyewaan' => Penyewaan::all()
        ]);
        
    }
    
    
    public function show(Penyewaan $penyewaan)
    {
        return view('db/add_penyewaan', [
            'user' => User::all(),
            'paket' => Paket::all(),
            'lapangan' => Lapangan::all()
        ]);
        
    }

    public function store(Request $request)
    {
        
        
        // $data = $request->validate([
        //     'lapangan' => 'required',
        //     'paket' => 'required',
        // ]);

        $data = [
            'kode' => $request->kode,
            'user_id' => $request->user_id,
            'lapangan_id' => $request->lapangan_id,
            'paket_id' => $request->paket_id,
            'tgl_main' => $request->tgl_main,
            'status' => $request->status,
            'waktu_main' => $request->waktu_main
        ];

        Penyewaan::create($data);

        return redirect('/dashboard/penyewaan')->with('success', 'Berhasil dipesan!, silahkan melakukan pembayaran!');
        
        
    }
}
