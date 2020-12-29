<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Wishlists extends Model
{
    protected $table    = 'wish_lists';
    protected $fillable = ['user_id','product_id','created_at', 'updated_at'];
    protected $hidden   = ['created_at', 'updated_at'];


    public function products()
        {
            return $this->belongsTo('App\Models\Products', 'product_id', 'id');
        }
}
