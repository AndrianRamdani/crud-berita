<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profiel extends Model
{
    protected $fillable = ['nama_id','tgl_lahir','alamat','no_tlp'];
    public $timestamps = true;

    public function akun()
    {
        return $this->belongsTo('App\Akun' , 'nama_id');
    }
}
