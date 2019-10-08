<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Peminjaman extends Model
{
    protected $fillable = ['petugas_id', 'peminjams_id', 'peminjam_tgl', 'peminjam_tgl_harus_kembali'];
    public $timestamps = true;

    public function petugas()
    {
        return $this->belongsTo('App\Petugas', 'petugas_id');
    }

    public function peminjams()
    {
        return $this->belongsTo('App\Peminjam', 'peminjams_id');
    }
}
