<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Akad extends Model
{
    protected $guarded = [];
    protected $table = 'table_akad';
    protected $fillable = ['nama', 'jam1', 'jam2', 'tanggal1','tanggal2','keterangan'];
}
