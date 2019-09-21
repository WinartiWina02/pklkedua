<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kartu extends Model
{
    protected $fillable = ['kartu_tgl_pembuatan'];
    public $timestamps = true;
}
