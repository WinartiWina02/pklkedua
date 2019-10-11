<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Detail extends Model
{
    protected $fillable = ['peminjams_id', 'id_buku', 'detail_tgl_kembali', 'detail_denda', 'detail_status_kembali'];
    public $timestamps = true;

    public function peminjams()
    {
        return $this->belongsTo('App\Peminjam', 'peminjams_id');
    }

    public function buku()
    {
        return $this->belongsTo('App\Buku', 'id_buku');
    }
}
