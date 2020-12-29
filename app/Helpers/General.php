<?php

use App\Models\Languages;
use App\User;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Support\Facades\Config;

function get_languages(){
    return Languages::active()->selection()->get();
}

function get_local_lang(){
    return Config::get('app.locale');
}
                             // photo Accessors in models //
function uploadImage($folder , $image){

    $image->store('/', $folder);
    $filename = $image->hashName();
    $path = 'images/' . $folder .'/'. $filename;
    return $path;
}


/* function wishlist2(){
    $user = new User;
        return $user->belongsToMany('App\Models\Products','wish_lists','product_id','user_id','id')->withTimestamps();
}

function wishlistHas2($productId)
    {
        return wishlist2()->where('product_id',$productId)->exists();
    } */
