<?php

namespace App\Models;

use App\Observers\MainCategoryObserver;
use Illuminate\Database\Eloquent\Model;

class MainCategories extends Model
{
    protected $table    = "main_categories";
    protected $fillable = ['translation_lang', 'translation_of', 'name', 'slug', 'photo', 'active', 'created_at', 'updated_at'];
    protected $hidden   = ['created_at', 'updated_at'];

    //observer
    protected static function boot()
    {
        parent::boot();
        MainCategories::observe(MainCategoryObserver::class);
    }


    ##############################   Relations  #####################################################

    public function categories()
    {
        return $this->hasMany(self::class, 'translation_of');
    }

    public function vendors()
    {
        return $this->hasMany('App\Models\Vendors', 'category_id', 'id');
    }

    public function subCategory()
    {
        return $this->hasMany('App\Models\SubCategories', 'mainCategory_id', 'id');
    }

    public function products()
    {
        return $this->hasManyThrough('App\Models\Products','App\Models\SubCategories','mainCategory_id','subcategory_id','id');
    }

    ##############################  End Relations ####################################################


    ##############################  Scopes  ################################################
    public function scopeActive($query)
    {
        return $query->where('active', 1);
    }

    public function scopeSelection($query)
    {
        return $query->select('id', 'translation_lang', 'translation_of', 'slug', 'photo', 'name', 'active');
    }

    public function scopeDefaultCategory($query)
    {
        return $query->where('translation_of',0);
    }

    ##############################  End Scopes  #####################################################

    ##############################  Accessors ####################################################

    public function getPhotoAttribute($value)
    {
        return ($value !== null) ? asset("assets/" . $value) : "";
    }

    ############################## End Accessors ####################################################

    public function getActive()
    {
        return $this->active == 1 ? ' مفعل' : ' غير مفعل ';
    }
}
