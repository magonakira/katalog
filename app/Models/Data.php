<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Data extends Model
{
    protected $table = 'datas';
    protected $primaryKey = 'id';
    protected $fillable = ['tahun', 'judul', 'penulis1', 'penulis2', 'penulis3', 'penulis4', 'penulis5', 'penulis6', 'penerbit', 'tanggal', 'halaman', 'file', 'link', 'noreg'];
    protected $hidden = ['created_at', 'updated_at'];

    use HasFactory;
}
