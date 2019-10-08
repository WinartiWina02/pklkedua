<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Detail extends Model
{
    protected $fillable = ['peminjamen_id', 'id_buku', 'detail_tgl_kembali', 'detail_denda', 'detail_status_kembali'];
    public $timestamps = true;

    public function peminjamen()
    {
        return $this->belongsTo('App\Peminjaman', 'peminjamen_id');
    }

    public function buku()
    {
        return $this->belongsTo('App\Buku', 'id_buku');
    }
}
