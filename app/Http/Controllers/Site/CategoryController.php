<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Models\MainCategories;
use App\Models\Products;
use App\Models\Sliders;
use App\Models\SubCategories;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function productsBySlug($slug)
    {
        $data = [];
        $m_category  = MainCategories::where('slug', $slug)->first();
        $s_category = SubCategories::where('slug', $slug)->first();
        //return Products::find(1)->images[0]->filename;
        if ($m_category) {

            if ($m_category->translation_lang == 'ar') {

                $data['category'] = $m_category;
                $data['products'] = $m_category->products;
                return view('front.products', $data);

            } elseif ($m_category->translation_lang == get_local_lang()) {

                $data['category'] = $m_category;
                $MAIN = $m_category->find($m_category->translation_of);
                $data['products'] = $MAIN->products;
                return view('front.products', $data);
            }
        } elseif ($s_category) {

            if ($s_category->translation_lang == 'ar') {

                $data['category'] = $s_category;
                $data['products'] = $s_category->product;
                return view('front.products', $data);

            } elseif ($s_category->translation_lang == get_local_lang()) {

                $data['category'] = $s_category;
                $SUB = $s_category->find($s_category->translation_of);
                $data['products'] = $SUB->product;
                return view('front.products', $data);

            } else {
                return redirect()->back();
            }
        } else {
            return redirect()->back();
        }
    }
}
