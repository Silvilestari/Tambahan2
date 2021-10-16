<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pengarang extends Model
{
    use HasFactory;
    protected $fillable = ['nama_pengarang', 'email', 'telp'];

    public function book()
    {
        return $this->hasMany(Book::class, 'pengarang_id');
    }

}
