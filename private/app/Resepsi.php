<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Resepsi extends Model
{
    protected $guarded = [];
    protected $table = 'tb_resepsi';
    protected $fillable = ['nama', 'jam1', 'jam2', 'tanggal1','tanggal2','keterangan'];
}
