<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kartu extends Model
{
    protected $fillable = ['id_petugas', 'id_peminjam', 'kartu_tgl_pembuatan', 'kartu_tgl_akhir', 'kartu_status_aktif'];
    public $timestamps = true;

    public function petugas()
    {
        return $this->belongsTo('App\Petugas', 'id_petugas');
    }

    public function peminjam()
    {
        return $this->belongsTo('App\peminjam', 'id_peminjam');
    }
}
