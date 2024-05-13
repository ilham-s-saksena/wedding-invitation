<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Ucapan extends Model
{
    use HasFactory;
    protected $fillable = [
        'nama',
        'ucapan',
        'konfirmasi',
    ];

    public function getCreatedAtAttribute($value)
    {
        return Carbon::parse($value)->format('d F Y H:i:s');
    }
}
