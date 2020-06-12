<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Buku extends Model
{
    public function book2(){
    	return $this->belongsTo('App\Book2');
    }
}
