<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    public function subsubcategory(){
    	return $this->belongsTo(SubSubCategory::class);
    }
}
