<?php

namespace App\Models\Master;

use Illuminate\Database\Eloquent\Model;

class ProductImage extends Model
{
    public function product(){
        return $this->belongsTo('App\Models\Master\Products');        
    }
}
