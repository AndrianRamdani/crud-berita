<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    protected $fillable = ['tag'];
    public $timestamps = true ;

    public function berita()
    {
        return $this->belongsToMany('App\Berita' ,'berita_tag','id_tag','id_berita');
    }
}
