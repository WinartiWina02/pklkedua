<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Peminjaman extends Model
{
    protected $fillable = ['peminjam_tgl'];
    public $timestamps = true;

    public function peminjaman()
    {
        return $this->belongsTo('App\Peminjam', 'id_kategori');
    }

    public function user()
    {
        return $this->belongsTo('App\User', 'id_user');
    }
    // public function tag()
    // {
    //     return $this->belongsToMany('App\Tag', 'artikel_tag', 'id_artikel', 'id_tag');
    // }
    public function getRouteKeyName()
    {
        return 'id_';
    }
}
