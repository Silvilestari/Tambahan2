<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;

    protected $fillable = ['pengarang_id','nama_buku', 'jumlah_halaman', 'translate_judul_buku'];

    public function pengarang()
    {
        return $this->belongsTo(Pengarang::class, 'pengarang_id');
    }

}
