<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Http\Requests\ProductRequest;
use App\Models\Products;


class ProductsController extends Controller
{
    public function index($id)
    {
        $data= [];
         $data['product'] = Products::selection()->where('id',$id)->first();
         $data['sub_category'] = $data['product']->subCategory;
         $data['main_category'] = $data['sub_category']->mainCategory;
         if($data['product']){
         $data['images'] = $data['product']->images;
        return view('front.productDetails',$data);
         }else{
             return redirect()->back();
         }


    }


}
