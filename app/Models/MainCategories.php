<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class MainCategories extends Model
{
    protected $table = "main_categories";
    protected $fillable = ['translation_lang','translation_of','name','slug','photo','active','created_at','updated_at'];
    protected $hidden = ['created_at','updated_at'];

    ##############################   Relations  #####################################################

    public function categories(){
       return $this->hasMany(self::class,'translation_of');
    }

     ##############################  End Relations ####################################################

        ##############################  Scopes  ################################################
    public function scopeActive ($query){
        return $query->where('active',1);
    }

    public function scopeSelection ($query){
        return $query->select('id','translation_lang','translation_of','slug','photo','name','active');
    }
        ##############################  End Scopes  #####################################################

        ##############################  Accessors ####################################################

        public function getPhotoAttribute($value){
            return ($value !== null) ? asset("assets/".$value) : "";
        }

    ############################## End Accessors ####################################################

    public function getActive(){
         return $this->active == 1 ? ' مفعل' : ' غير مفعل ';
     }

}
