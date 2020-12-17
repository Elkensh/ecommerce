<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ImageUpload extends Model
{
    protected $table    = 'images';
    protected $fillable = ['filename', 'product_id', 'created_at', 'updated_at'];
    protected $hidden   = ['created_at', 'updated_at'];



    public function product()
    {
        return $this->belongsTo('App\Models\Products', 'product_id', 'id');
    }


    public function getFilenameAttribute($value)
    {
        return ($value !== null) ? asset("assets/" . $value) : "";
    }
}
