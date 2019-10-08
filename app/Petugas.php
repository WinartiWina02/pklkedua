<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Petugas extends Model
{
    protected $fillable = ['petugas_nama'];
    public $timestamps = true;
}
