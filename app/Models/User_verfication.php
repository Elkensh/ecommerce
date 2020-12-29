<?php

namespace App\Models;

use App\Observers\MainCategoryObserver;
use Illuminate\Database\Eloquent\Model;

class User_verfication extends Model
{
    protected $table    = "users_verficationcode";
    protected $fillable = ['user_id', 'code','created_at', 'updated_at'];
    protected $hidden   = ['created_at', 'updated_at'];




    ##############################   Relations  #####################################################



    /* public function users()
    {
        return $this->belongsTo('App\User', 'user_id', 'id');
    } */

    ##############################  End Relations ####################################################



}
