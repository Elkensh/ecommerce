<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Observers\SubCategoryObserver;

class SubCategories extends Model
{
    protected $table    = "sub_category";
    protected $fillable = ['translation_lang', 'translation_of', 'name', 'slug', 'photo', 'active', 'created_at', 'updated_at','mainCategory_id'];
    protected $hidden   = ['created_at', 'updated_at'];

    //observer
    protected static function boot()
    {
        parent::boot();
        SubCategories::observe(SubCategoryObserver::class);
    }

        ##############################   Relations  #####################################################

        public function categories()
        {
            return $this->hasMany(self::class, 'translation_of');
        }

        public function vendors()
        {
            return $this->hasMany('App\Models\Vendors', 'sunCategory_id', 'id');
        }

        public function mainCategory()
        {
            return $this->belongsTo('App\Models\MainCategories', 'mainCategory_id', 'id');
        }

        public function product()
        {
            return $this->hasMany('App\Models\Products','subcategory_id','id');
        }

        ##############################  End Relations ####################################################


         ##############################  Scopes  ################################################
    public function scopeActive($query)
    {
        return $query->where('active', 1);
    }

    public function scopeSelection($query)
    {
        return $query->select('id', 'translation_lang', 'translation_of','mainCategory_id', 'slug', 'photo', 'name', 'active');
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


