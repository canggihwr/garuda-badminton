<?php

namespace App\Http\Controllers;

use App\Models\Penyewaan;
use App\Models\User;
use App\Models\Paket;
use App\Models\Peralatan;
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
    
    public function detail(Penyewaan $penyewaan)
    {
        return view('db/detail_sewa', [
            "penyewaan" => $penyewaan
        ]);
        
    }

    public function bayar(Penyewaan $penyewaan)
    {
        return view('db/bayar', [
            "penyewaan" => $penyewaan
        ]);
        
    }

    public function pembayaran(Request $request)
    {
        $id = $request->getid;
        $data = $request->validate([
            'tipe' => 'required',
            // 'bukti' => 'required',
            'metode' => 'required'
        ]);

        if ($request->hasFile('bukti')) {
            $path = $request->file('bukti')->store('uploads');
        }else {
            $path = '';

        }

        $data = [
            'tipe' => $request->tipe,
            'metode' => $request->metode,
            'bukti' => $request->bukti,
            'status' => $request->status
        ];

        Penyewaan::where('id', $id)->update($data);
        return redirect('/dashboard/penyewaan')->with('success', 'Pembayaran berhasil! Harap menunggu konfirmasi admin');
        
    }

    public function konfirmasi(Request $request)
    {
        $id = $request->getid;
        
        $data = [
            'status' => $request->status
        ];

        Penyewaan::where('id', $id)->update($data);
        return redirect('/dashboard/penyewaan')->with('success', 'Pembayaran diknfirmasi!');
        
    }
    
    public function show(Penyewaan $penyewaan)
    {
        return view('db/add_penyewaan', [
            'user' => User::all(),
            'paket' => Paket::all(),
            'peralatan' => Peralatan::all(),
            'lapangan' => Lapangan::all()
        ]);
        
    }

    public function store(Request $request)
    {
        
        
        // $data = $request->validate([
        //     'lapangan' => 'required',
        //     'paket' => 'required',
        // ]);

        $pkt = Paket::all();
        $getidpaket = '';

        foreach ($pkt as $p) {
            if ($request->paket_id == $p->harga) {
                $getidpaket = $p->id;
            }
        }

        $data = [
            'kode' => $request->kode,
            'user_id' => $request->user_id,
            'lapangan_id' => $request->lapangan_id,
            'paket_id' => $getidpaket,
            'peralatan_id' => $getidpaket,
            'tgl_main' => $request->tgl_main,
            'status' => $request->status,
            'waktu_main' => $request->waktu_main
        ];

        Penyewaan::create($data);

        return redirect('/dashboard/penyewaan')->with('success', 'Berhasil dipesan!, silahkan melakukan pembayaran!');
        
        
    }
}
