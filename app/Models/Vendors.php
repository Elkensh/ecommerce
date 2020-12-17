<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Vendors extends Model
{
    use Notifiable;
    protected $table    = "vendors";
    protected $fillable = ['name', 'email', 'password', 'mobile', 'address', 'category_id','sunCategory_id', 'logo', 'active', 'created_at', 'updated_at'];
    protected $hidden   = ['category_id', 'created_at', 'updated_at'];


    ##############################   Relations  #####################################################

    public function category()
    {
        return $this->belongsTo('App\Models\MainCategories', 'category_id', 'id');
    }

    public function subCategory()
    {
        return $this->belongsTo('App\Models\SubCategories', 'sunCategory_id', 'id');
    }

    ##############################  End Relations ####################################################


    ##############################  Scopes  ################################################

    public function scopeActive($query)
    {
        return $query->where('active', 1);
    }

    public function scopeSelection($query)
    {
        return $query->select('id', 'name', 'password' , 'category_id', 'active', 'address' , 'email' , 'mobile', 'logo');
    }

    ##############################  End Scopes  #####################################################

    ##############################  Accessors ####################################################

    public function getLogoAttribute($value)
    {
        return ($value !== null) ? asset("assets/" . $value) : "";
    }

    public function setPasswordAttribute($password)
    {
        if (!empty($password)) {
            $this->attributes['password'] = bcrypt($password);
        }
    }

    ############################## End Accessors ####################################################

    public function getActive()
    {
        return $this->active == 1 ? ' مفعل' : ' غير مفعل ';
    }
}
