<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Penganten extends Model
{
    protected $guarded = [];
    protected $table = 'tb_penganten';
    protected $fillable = ['id', 'salam', 'tanggal', 'title','nama1','keterangan1','gambar1','nama2','keterangan2','gambar2'];
}
