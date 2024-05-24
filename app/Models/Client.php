<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    protected $fillable = [
        'nama_client',
        'alamat_client',
        'tanggal_mulai_kontrak',
        'tanggal_berakhir_kontrak',
        'created_at',
        'updated_at',
    ];
}
