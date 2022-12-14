<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Buku extends Model
{
    protected $table = 'bukus';
        protected $fillable = [
        'id',
        'judul',
        'pengarang',
        'tahun',
        'jumlah',
    ];
    use HasFactory;
}
