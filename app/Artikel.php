<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Artikel extends Model
{
    protected $fillable = ['artikel','id_kategori'];
    public $timestamps = true ;

    public function kategori()
    {
        return $this->belongsTo('App\Kategori' ,'kategori_id');
    }
}
