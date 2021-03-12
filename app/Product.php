<?php

namespace App;

use Illuminate\Database\Eloquent\Model;



class Product extends Model
{
    public function service(){
        return $this->belongsTo(Service::class , 'service_id');
    }
    public function images(){
        return $this->hasMany(Image::class , 'product_id');
    }
}
