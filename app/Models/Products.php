<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Products extends Model
{
    protected $table    = 'products';
    protected $fillable = ['name', 'price', 'slug', 'manage_stock', 'in_stock', 'sku', 'subcategory_id', 'created_at', 'updated_at'];
    protected $hidden   = ['created_at', 'updated_at'];


    ##############################   Relations  #####################################################

    public function subCategory()
    {
        return $this->belongsTo('App\Models\SubCategories', 'subcategory_id', 'id');
    }

    public function images()
    {
        return $this->hasMany('App\Models\ImageUpload', 'product_id', 'id');

    }

    public function wishlist()
    {

        return $this->belongsToMany('App\User','wish_lists','product_id','user_id','id');
    }

    public function cart()
    {

        return $this->belongsToMany('App\User','cart','product_id','user_id','id');
    }

    ##############################  End Relations ####################################################

    ##############################  Scopes  ################################################

    public function scopeIn_stock($query)
    {
        return $query->where('in_stock', 1);
    }

    public function scopeSelection($query)
    {
        return $query->select('id', 'name', 'price', 'manage_stock', 'slug', 'sku', 'name', 'in_stock', 'subcategory_id');
    }

    ##############################  End Scopes  #####################################################

    public function getIn_stock()
    {
        return $this->in_stock == 1 ? ' متاح' : ' غير متاح ';
    }
}
