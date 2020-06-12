<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Book2 extends Model
{
    protected $table = "book2";

    public function buku(){
        return $this->hasMany('App\Buku');
    }
}
