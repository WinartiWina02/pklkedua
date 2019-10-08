<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Peminjam extends Model
{
    protected $fillable = ['peminjam_nama', 'alamat', 'peminjam_telp', 'foto'];
    public $timestamps = true;
}
