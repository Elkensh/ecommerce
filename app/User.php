<?php

namespace App;

use App\Models\Products;
use App\Models\Wishlists;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\App;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'password','mobile',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    ###########################   Relations   ############################################

    public function codes()
    {
        return $this->hasMany('App\Models\User_verfication','user_id','id');
    }

    public function wishlist()
    {
        return $this->belongsToMany('App\Models\Products','wish_lists','user_id','product_id','id');
    }

    public function cart()
    {
        return $this->belongsToMany('App\Models\Products','cart','user_id','product_id','id');
    }

    public function ScopeWishlistHas($productId)
    {
        return self::wishlist()->where('product_id',$productId)->exists();
    }
}
