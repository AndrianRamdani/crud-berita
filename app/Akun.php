<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Akun extends Model
{
    protected $fillable = ['nama', 'email'];
    public $timestamps = true;

    public function profil()
    {
        return $this->hasOne('App\Profiel' , 'nama_id');
    }
}
