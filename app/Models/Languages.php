<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Languages extends Model
{

    protected $table    = "languages";
    protected $fillable = ['name', 'abbr', 'locale', 'direction', 'active', 'created_at', 'updated_at'];
    protected $hidden   = ['created_at', 'updated_at'];

    ##############################  Scopes  ################################################
    public function scopeActive($query)
    {
        return $query->where('active', 1);
    }

    public function scopeSelection($query)
    {
        return $query->select('id', 'name', 'abbr', 'direction', 'active');
    }

    ##############################  End Scopes  #####################################################
    public function getActive()
    {
        return $this->active == 1 ? ' مفعل' : ' غير مفعل ';
    }

    ##############################  Accessors ####################################################

    ############################## End Accessors ####################################################

}
