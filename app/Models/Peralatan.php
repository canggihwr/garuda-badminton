<?php

namespace App\Models;

use App\Models\Penyewaan;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Peralatan extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function penyewaan() {
        return $this->belongsToMany(Penyewaan::class)->withPivot('qty');
    }
}
