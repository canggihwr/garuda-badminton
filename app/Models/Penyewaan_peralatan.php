<?php

namespace App\Models;

use App\Models\Paket;
use App\Models\Lapangan;
use App\Models\Peralatan;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Penyewaan_peralatan extends Model
{

    protected $fillable = [
        'penyewaan_id',
        'peralatan_id',
        'qty'
    ];

    use HasFactory;


}
