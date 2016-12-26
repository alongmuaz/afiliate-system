<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProductVariant extends Model
{

	protected $table = 'product_variants';
	public $fillable = ['name','description'];

    public function product()
    {
    	return $this->hasMany('App\Product');
    }
}
