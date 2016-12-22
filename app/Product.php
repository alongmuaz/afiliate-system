<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{

	public function productvariant()
	{
		return $this->belongsTo('App\Product');
	}

}
