<?php

namespace App\Models\Transaction;

use Illuminate\Database\Eloquent\Model;

class TransactionDetails extends Model
{
    public function products(){
        return $this->belongsTo('App\Models\Master\Products','product_id','id');
    }
}