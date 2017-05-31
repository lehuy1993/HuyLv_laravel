<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class cate extends Model
{
    //
     protected $table = 'cates';

     public function product()
     {
     	# code...
     	return $this->hasMany('App\product');
     }
}
