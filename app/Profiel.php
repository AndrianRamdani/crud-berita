<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profiel extends Model
{
    protected $fillable = ['akun_id','tgl_lahir','alamat','no_tlp'];
    public $timestamps = true;

    public function akun()
    {
        return $this->belongsTo('App\Akun' , 'akun_id');
    }
}
