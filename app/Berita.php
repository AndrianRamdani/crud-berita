<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Berita extends Model
{
    protected $fillable = [
        'judul', 'deskripsi','tanggal','foto','id_tag'];
    public $timestamps = true;

    public function tag()
    {
        return $this->belongsToMany('App\Tag' , 'id_tag');
    }

}
