<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Sliders extends Model
{
    protected $table    = 'sliders';
    protected $fillable = ['photo','created_at', 'updated_at'];
    protected $hidden   = ['created_at', 'updated_at'];


    public function getPhotoAttribute($value)
    {
        return ($value !== null) ? asset("assets/" . $value) : "";
    }
}
