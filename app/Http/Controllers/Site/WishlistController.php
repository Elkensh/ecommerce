<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Models\Products;
use App\Models\Wishlists;
use App\User;
use Dotenv\Result\Success;
use Illuminate\Http\Request;

class WishlistController extends Controller
{
    public function index()
    {
         $user_id = auth()->user()->id;
        $user =User::find($user_id);
        $products = $user ->wishlist;
         return view('front.wishlists',compact('products'));

    }

    public function store($productId)
    {

        /* if(!auth()->user()->wishlistHas2($productId)){
            auth()->user()->wishlist()->attach($productId);
        } */
         $user = auth()->user()->id;

         $wishlist = Wishlists::where('user_id',$user)->where('product_id',$productId)->first();
        // هعدل لما اعمل المنتجات لغات
        if(!$wishlist){
            //if(get_local_lang() == 'ar'){
            Wishlists::create([
                'user_id' => $user,
                'product_id' => $productId
               ]);
               return redirect()->back()->with(['done' => 'The product has been added to your wishlist']);
            /* }else{
                     //return $product_lang = Products::find($productId);
                Wishlists::create([
                    'user_id' => $user,
                    'product_id' => $productId
                   ]);
                   return redirect()->back();
            } */
        }else{
            return redirect()->back()->with(['done' => 'you have this product before']);
        }

    }

    public function destroy($product_id)
    {

        $user = auth()->user()->id;
        $wishlist = Wishlists::where('user_id',$user)->where('product_id',$product_id)->first();

        if(!$wishlist){
       return redirect()->back();
        }else
        {
            $wishlist->delete();
            return redirect()->back()->with(['done' => 'delete successfully']);
        }
    }

}

