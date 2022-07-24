<?php

namespace App\Models;

use App\Models\Lapangan;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Penyewaan extends Model
{
    use HasFactory;
    protected $guarded = ['id'];

    public function lapangan() {
        return $this->belongsTo(Lapangan::class);
    }

    public function user() {
        return $this->belongsTo(User::class);
    }

    public function paket() {
        return $this->belongsTo(Paket::class);
    }

}
