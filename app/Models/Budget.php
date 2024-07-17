<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Budget extends Model
{
    use HasFactory;

    protected $fillable = [
        'description', // Kolom deskripsi
        'amount',      // Kolom jumlah
        'date',        // Kolom tanggal
    ];
}
