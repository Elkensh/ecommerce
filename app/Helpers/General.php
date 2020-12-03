<?php

use App\Models\Languages;
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
