<?php

namespace App\Http\Controllers;

use App\Models\Penyewaan;
use App\Models\User;
use App\Models\Paket;
use App\Models\Peralatan;
use App\Models\Lapangan;
use Illuminate\Http\Request;
use Alert;
use Illuminate\Support\Facades\Auth;

class PenyewaanController extends Controller
{
    public function list()
    {
        if(Auth::user()->tipe_akun == 'Member'){
            $idget = Auth::user()->id;
            return view('db/penyewaan', [
                'penyewaan' => Penyewaan::where('user_id', $idget)->get()
            ]);
        }else{
            return view('db/penyewaan', [
                'penyewaan' => Penyewaan::orderBy('id', 'DESC')->get()
    
            ]);
        }
        
    }

    public function cetak()
    {
        $p = Penyewaan::where('status', 'Selesai')->get();

        return view('db/cetaks', [
            'penyewaan' => $p

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
        // return $request->all();
        $id = $request->getid;
        $data = $request->validate([
            'tipe' => 'required',
            // 'bukti' => 'required',
            'metode' => 'required'
        ]);

        if ($request->hasFile('bukti')) {
            $request->file('bukti')->move('img/buktipembayaran/', $request->file('bukti')->getClientOriginalName());
        } 
        
        $data = [
            'tipe' => $request->tipe,
            'metode' => $request->metode,
            'bukti' => $request->file('bukti')->getClientOriginalName(),
            'status' => $request->status
        ];

        Penyewaan::where('id', $id)->update($data);
        Alert::alert('Pembayaran berhasil!', 'Harap menunggu konfirmasi admin', 'success');
        return redirect('/dashboard/penyewaan')->with('success', 'Pembayaran berhasil! Harap menunggu konfirmasi admin');
        
    }

    public function konfirmasi(Request $request)
    {
        $id = $request->getid;
        
        $data = [
            'status' => $request->status
        ];

        Penyewaan::where('id', $id)->update($data);
        Alert::alert('Sukses!', 'Pembayaran dikonfirmasi!', 'success');
        return redirect('/dashboard/penyewaan')->with('success', 'Pembayaran dikonfirmasi!');
        
    }

    public function selesai(Request $request)
    {
        $id = $request->getid;
        
        $data = [
            'status' => $request->status
        ];

        Penyewaan::where('id', $id)->update($data);

        Alert::alert('Sukses!', 'Penyewaan Selesai!', 'success');
        return redirect('/dashboard/penyewaan')->with('success', 'Penyewaan Selesai!');
        
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
        // return $request;
        $datalap = Penyewaan::all();
        $data = $request->validate([
            'lapangan_id' => 'required',
            'paket_id' => 'required',
            'tgl_main' => 'required',
            'waktu_main' => 'required'
        ]);

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
            'total' => $request->bayar,
            'waktu_main' => $request->waktu_main
        ];

        $datapaket = Paket::find($getidpaket);
        

        $kosong = '';
        $waktu = strtotime($request->waktu_main);
        $lama = $datapaket->lama;
        $waktus = [];
        $min = 1;
        $plus = (int)100;

        for($i=1;$i<$lama; $i++){
            $waktus[0] = (int)$waktu;
            $waktus[$i] = (int)$waktus[$i-$min]+$plus;
        }
        
        
        foreach ($datalap as $l){
            if($request->tgl_main == $l->tgl_main){
                if($request->lapangan_id == $l->lapangan_id){
                    for($i=0;$i<$lama; $i++){
                        if(strtotime($request->waktu_main) == $waktus[$i]){
                            $kosong = 'false';
                        }
                    }
                }
            }
        }

        $items = $request->item;
        $qtys = $request->qty;
        $sync = [];
        if (!empty($items)) {
            for($i=0;$i<count($items); $i++){
                $sync[$items[$i]] = ['qty' => $qtys[$i]];
            }
        }

        if($kosong == 'false') {
            return redirect('/dashboard/penyewaan')->with('fail', 'Lapangan gagal dipesan!, silahkan memilih jadwal atau lapangan lain!');
        } else{
            if (!empty($items)){
                Penyewaan::create($data)->peralatan()->attach($sync);
                Alert::alert('Berhasil dipesan!', 'Silahkan melakukan pembayaran!', 'success');

            } else {
                Penyewaan::create($data)->peralatan();
                Alert::alert('Berhasil dipesan!', 'Silahkan melakukan pembayaran!', 'success');

            }
            return redirect('/dashboard/penyewaan')->with('success', 'Berhasil dipesan!, silahkan melakukan pembayaran!');

        }
        
        
    }

    public function destroy(Penyewaan $penyewaan)
    {
        $detach = Penyewaan::find($penyewaan->id);
        $detach->peralatan()->detach();
        $detach->delete($penyewaan->id);
        Alert::alert('Batal!', 'Pesanan berhasil dibatalkan!', 'success');
        return redirect('/dashboard/penyewaan')->with('success', 'Pesanan berhasil dibatalkan!');
    }
}
