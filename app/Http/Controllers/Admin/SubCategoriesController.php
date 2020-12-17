<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\SubCategoriesRequest;
use App\Models\MainCategories;
use App\Models\SubCategories;
use Illuminate\Http\Request;
use DB;
use Illuminate\Support\Str;
use Exception;

class SubCategoriesController extends Controller
{
    public function index()
    {
        // Helper Method //
        $local_lang = get_local_lang();
        $sub_categories = SubCategories::where('translation_lang', $local_lang)->selection()->get();

        return view('admin.sub_categories.index', compact('sub_categories'));
    }

    public function create()
    {
        $sub_category = MainCategories::where('translation_of', 0)->active()->get();
        return view('admin.sub_categories.create',compact('sub_category'));
    }

    public function store(SubCategoriesRequest $request)
    {

        try {
            DB::beginTransaction();
            $sub_categories = collect($request->category);
            $filter = $sub_categories->filter(function ($value, $key) {
                return $value['abbr'] == get_local_lang();
            });

            $default_category = array_values($filter->all())[0];

            //save photo //
            $filePath = "";
            // photo Accessors in models //
            if ($request->has('photo')) {
                $filePath = uploadImage('subcategories', $request->photo);
            }
            // insert data //
            $default_category_id = SubCategories::insertGetId([
                'translation_lang' => $default_category['abbr'],
                'translation_of'   => 0,
                'name'             => $default_category['name'],
                'slug'             => $default_category['name'],
                'photo'            => $filePath,
                'mainCategory_id'  => $request->main_category_id
            ]);

            $categories = $sub_categories->filter(function ($value, $key) {
                return $value['abbr'] != get_local_lang();
            });

            if (isset($categories) && $categories->count()) {
                $categories_arr = [];
                foreach ($categories as $category) {

                    // mohem $name_arr[] //
                    $categories_arr[] = [
                        'translation_lang' => $category['abbr'],
                        'translation_of'   => $default_category_id,
                        'name'             => $category['name'],
                        'slug'             => $category['name'],
                        'photo'            => $filePath,
                        'mainCategory_id'  => $request->main_category_id
                    ];
                }

                SubCategories::insert($categories_arr);
            }
            DB::commit();
            return redirect()->route('admin.subCategories')->with(['success' => 'تم الحفظ بنجاح']);
        } catch (Exception $e) {
            return $e;
            DB::rollback();
            return redirect()->route('admin.subCategories')->with(['error' => 'حدث خطاء اثناء الحفظ حاول لاحقا']);
        }
    }


    public function edit($id)
    {
        try {
            $sub_categories = SubCategories::selection()->find($id);
            if (!$sub_categories)
                return redirect()->route('admin.subCategories')->with(['error' => 'هذا القسم غير موجود']);

            $categories = MainCategories::where('translation_of', 0)->active()->get();
            return view('admin.sub_categories.edit', compact('sub_categories', 'categories'));
        } catch (Exception $e) {
            return $e;
            return redirect()->route('admin.subCategories')->with(['error' => 'حدث خطاء حاول لاحقا']);
        }
    }


    public function update($sub_id, SubCategoriesRequest $request)
    {


        try {
            //check
            $sub_categories = SubCategories::find($sub_id);
            if (!$sub_categories)
                return redirect()->route('admin.subCategories')->with(['error' => 'هذا القسم غير موجود']);

            $category = array_values($request->category)[0];

            if (!$request->has('category.0.active')) {
                $request->request->add(['active' => 0]);
            } else {
                $request->request->add(['active' => 1]);
            }

            //check photo
            if ($request->has('photo')) {
                $filepath = uploadImage('subcategories', $request->photo);

                //update new photo
                SubCategories::where('id', $sub_id)->update([
                    'photo' => $filepath
                ]);
            }

            //update without photo
            SubCategories::where('id', $sub_id)->update([
                'name' => $category['name'],
                'mainCategory_id' => $request->category_id,
                'active' => $request->active
            ]);

            return redirect()->route('admin.subCategories')->with(['success' => 'تم التحديث بنجاح']);
        } catch (Exception $e) {

            return redirect()->route('admin.subCategories')->with(['error' => 'حدث خطاء اثناء التعديل حاول لاحقا']);
        }
    }


    public function destroy($id)
    {
        try {
            $sub_categories = SubCategories::find($id);
            if (!$sub_categories)
                return redirect()->route('admin.subCategories')->with(['error' => 'هذا القسم غير موجود']);

                // هربطها بالمنتجات لما اعمل منتجات
           /*  $vendors = $sub_categories->vendors;
            if (isset($vendors) && $vendors->count() > 0)
                return redirect()->route('admin.subCategories')->with(['error' => 'لا يمكن حذف هذا القسم']);
 */
            //delete photo from folder
            $image = Str::after($sub_categories->photo, 'assets/');
            $image = base_path('assets/' . $image);
            unlink($image);

            //delete translation
            //$main_categories->categories()->delete();

            // ** I make delete translation in observer **


            //delete
            $sub_categories->delete();
            
            return redirect()->route('admin.subCategories')->with(['success' => 'تم الحذف بنجاح']);
        } catch (Exception $e) {
            return redirect()->route('admin.subCategories')->with(['error' => 'حدث خطاء اثناء الحذف حاول لاحقا']);
        }
    }

    public function changeStatus($id)
    {
        try
        {
            $sub_categories = SubCategories::find($id);
            if(!$sub_categories)
            return redirect()->route('admin.subCategories')->with(['error' => 'هذا القسم غير موجود']);

            $status = $sub_categories->active == 1 ? 0 : 1;
            $sub_categories->update(['active' => $status]);
            return redirect()->route('admin.subCategories')->with(['success' => 'تم بنجاح']);


        }catch(Exception $e)
        {
            return redirect()->route('admin.subCategories')->with(['error' => 'حدث خطاء اثناء التفعيل حاول لاحقا']);

        }
    }

}
