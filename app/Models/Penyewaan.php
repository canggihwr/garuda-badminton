<?php

namespace App\Models;

use App\Models\Paket;
use App\Models\Lapangan;
use App\Models\Peralatan;
use App\Models\User;
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

    public function peralatan() {
        return $this->belongsToMany(Peralatan::class)->withPivot('qty');
    }

}
