<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Models\MainCategories;
use App\Models\Sliders;
use App\Models\SubCategories;
use Illuminate\Http\Request;

class SiteController extends Controller
{
    public function home()
    {
        $data = [];
        $local_lang = get_local_lang();
        $data['sliders'] = Sliders::get('photo');
        $data['categories'] = MainCategories::selection()->where('translation_lang',$local_lang)->with(['subCategory' => function($q){
            $q->where('translation_lang',get_local_lang());

        }])->get();

        $data['SubCategory'] = SubCategories::where('translation_lang',$local_lang)->get();

        return view('front.home',$data);


        /*//////test///////////

        if($categories){
            foreach($categories as $c){

                echo $c->name.' <br> ';

                if($SubCategory){
                    foreach($SubCategory as $sub){
                        if(get_local_lang() == 'ar'){
                            if($sub->mainCategory_id == $c->id){
                                echo '& '.$sub->name.' &';
                            }
                        }elseif(get_local_lang() == 'en'){
                            if($sub->mainCategory_id == $c->translation_of){
                                echo '& '.$sub->name.' &';
                            }
                        }else{
                            echo 'error';
                        }
                    }

                } */
                /* foreach($categories->subCategory() as $s){
                    echo $s->name;
                }

            }
        }*/



    }
}
