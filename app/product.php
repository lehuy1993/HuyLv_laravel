<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class product extends Model
{
    //
    protected $table = 'products';

    public function cate()
    {
    	# code...
    	return $this->belongsTo('App\cate');
    }
    public function user () {
		return $this->belongsTo('App\User');
	}
}
