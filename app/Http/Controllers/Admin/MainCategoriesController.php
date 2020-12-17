<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\MainCategoriesRequest;
use App\Models\MainCategories;
use Exception;
use Illuminate\Http\Request;
use DB;
use Illuminate\Support\Str;

class MainCategoriesController extends Controller
{
    public function index()
    {
        // Helper Method //
        $local_lang = get_local_lang();
        $main_categories = MainCategories::where('translation_lang', $local_lang)->selection()->get();

        return view('admin.main_categories.index', compact('main_categories'));
    }


    public function create()
    {
        return view('admin.main_categories.create');
    }

    public function store(MainCategoriesRequest $request)
    {


        try {
            DB::beginTransaction();
                            //collection
            $main_categories = collect($request->category);
            $filter = $main_categories->filter(function ($value, $key) {
                return $value['abbr'] == get_local_lang();
            });

            $defult_category = array_values($filter->all())[0];

            //save photo //
            $filePath = "";
            // photo Accessors in models //
            if ($request->has('photo')) {
                $filePath = uploadImage('maincategories', $request->photo);
            }
            // insert data //
            $defult_category_id = MainCategories::insertGetId([
                'translation_lang' => $defult_category['abbr'],
                'translation_of'   => 0,
                'name'             => $defult_category['name'],
                'slug'             => $defult_category['name'],
                'photo'            => $filePath
            ]);

            $categories = $main_categories->filter(function ($value, $key) {
                return $value['abbr'] != get_local_lang();
            });

            if (isset($categories) && $categories->count()) {
                $categories_arr = [];
                foreach ($categories as $category) {

                    // moheam $name_arr[] //
                    $categories_arr[] = [
                        'translation_lang' => $category['abbr'],
                        'translation_of'   => $defult_category_id,
                        'name'             => $category['name'],
                        'slug'             => $category['name'],
                        'photo'            => $filePath
                    ];
                }

                MainCategories::insert($categories_arr);
            }
            DB::commit();
            return redirect()->route('admin.MainCategories')->with(['success' => 'تم الحفظ بنجاح']);
        } catch (Exception $e) {
            DB::rollback();
            return redirect()->route('admin.MainCategories')->with(['error' => 'حدث خطاء اثناء الحفظ حاول لاحقا']);
        }
    }

    public function edit($main_id)
    {

        // get spacific categories and its translations
        $mainCat = MainCategories::with('categories')
            ->selection()
            ->find($main_id);

        if (!$mainCat)
            return redirect()->route('admin.MainCategories')->with(['error' => 'هذا القسم غير موجود']);

        return view('admin.main_categories.edit', compact('mainCat'));
    }

    public function update($main_id, MainCategoriesRequest $request)
    {
        //return $request;
        try {
            //check
            $mainCatigory = MainCategories::find($main_id);
            if (!$mainCatigory)
                return redirect()->route('admin.MainCategories')->with(['error' => 'هذا القسم غير موجود']);

            $category = array_values($request->category)[0];

            if (!$request->has('category.0.active')) {
                $request->request->add(['active' => 0]);
            } else {
                $request->request->add(['active' => 1]);
            }

            //check photo
            if ($request->has('photo')) {
                $filepath = uploadImage('maincategories', $request->photo);

            //delete photo from folder
            $image = Str::after($request->old_photo, 'assets/');
            $image = base_path('assets/' . $image);
            unlink($image);

                //update new photo
                MainCategories::where('id', $main_id)->update([
                    'photo' => $filepath
                ]);

            }

            //update without photo
            MainCategories::where('id', $main_id)->update([
                'name' => $category['name'],
                'active' => $request->active
            ]);

            return redirect()->route('admin.MainCategories')->with(['success' => 'تم التحديث بنجاح']);
        } catch (Exception $e) {

            return redirect()->route('admin.MainCategories')->with(['error' => 'حدث خطاء اثناء التعديل حاول لاحقا']);
        }
    }

    public function destroy($id)
    {
        try {
            $main_categories = MainCategories::find($id);
            if (!$main_categories)
                return redirect()->route('admin.MainCategories')->with(['error' => 'هذا القسم غير موجود']);

            $vendors = $main_categories->vendors;
            if (isset($vendors) && $vendors->count() > 0)
                return redirect()->route('admin.MainCategories')->with(['error' => 'لا يمكن حذف هذا القسم']);

            //delete photo from folder
            $image = Str::after($main_categories->photo, 'assets/');
            $image = base_path('assets/' . $image);
            unlink($image);

            //delete translation
            //$main_categories->categories()->delete();

            // ** I make delete translation in observer **
            //delete
            $main_categories->delete();
            return redirect()->route('admin.MainCategories')->with(['success' => 'تم الحذف بنجاح']);
        } catch (Exception $e) {
            return redirect()->route('admin.MainCategories')->with(['error' => 'حدث خطاء اثناء الحذف حاول لاحقا']);
        }
    }

    public function changeStatus($id)
    {
        try
        {
            $main_categories = MainCategories::find($id);
            if(!$main_categories)
            return redirect()->route('admin.MainCategories')->with(['error' => 'هذا القسم غير موجود']);

            $status = $main_categories->active == 1 ? 0 : 1;
            $main_categories->update(['active' => $status]);
            return redirect()->route('admin.MainCategories')->with(['success' => 'تم بنجاح']);


        }catch(Exception $e)
        {
            return redirect()->route('admin.MainCategories')->with(['error' => 'حدث خطاء اثناء التفعيل حاول لاحقا']);

        }
    }
}
