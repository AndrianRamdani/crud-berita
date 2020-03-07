<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Berita extends Model
{
    protected $fillable = [
        'judul', 'deskripsi','tanggal','id_tag'];
    public $timestamps = true;

    public function tag()
    {
        return $this->belongsToMany('App\Tag' ,'berita_tag','id_berita','id_tag');
    }

}
