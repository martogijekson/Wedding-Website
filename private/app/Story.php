<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Story extends Model
{
    protected $guarded = [];
    protected $table = 'tb_story';
    protected $fillable = ['id', 'judul', 'tanggal', 'keterangan','gambar'];
}
