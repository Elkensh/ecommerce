<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\VendorRequest;
use App\Models\MainCategories;
use App\Models\Vendors;
use App\Notifications\VendorCreated;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Notification;
use DB;
use Illuminate\Support\Str;

class VendorsController extends Controller
{
    public function index()
    {
        $vendors = Vendors::selection()->paginate(PAGINATION_COUNT);
        $v = Vendors::find(19);
        $s = $v->name;
        return explode(',',$s);
        return view('admin.vendors.index', compact('vendors'));
    }

    public function create()
    {
        $categories = MainCategories::where('translation_of', 0)->active()->get();
        return view('admin.vendors.create', compact('categories'));
    }
    public function store(VendorRequest $request)
    {
        try {
            //save photo //
            $filePath = "";
            // photo Accessors in models //
            if ($request->has('logo')) {
                $filePath = uploadImage('vendors', $request->logo);
            }
            // chick active //
            if (!$request->has('active')) {
                $request->request->add(['active' => 0]);
            } else {
                $request->request->add(['active' => 1]);
            }

            $vendor = Vendors::create([
                'name'        => $request->name,
                'logo'        => $filePath,
                'mobile'      => $request->mobile,
                'email'       => $request->email,
                'address'     => $request->address,
                'password'    => $request->password,
                'category_id' => $request->category_id,
                'active'      => $request->active,
            ]);

            Notification::send($vendor, new VendorCreated($vendor));

            return redirect()->route('admin.vendors')->with(['success' => 'تم الحفظ بنجاح']);
        } catch (Exception $e) {

            return $e;
            return redirect()->route('admin.vendors')->with(['error' => 'حدث خطاء اثناء الحفظ حاول لاحقا']);
        }
    }

    public function edit($id)
    {
        try {
            $vendors = Vendors::selection()->find($id);
            if (!$vendors)
                return redirect()->route('admin.vendors')->with(['error' => 'هذا المتجر غير موجود']);

            $categories = MainCategories::where('translation_of', 0)->active()->get();
            return view('admin.vendors.edit', compact('vendors', 'categories'));
        } catch (Exception $e) {
            return redirect()->route('admin.vendors')->with(['error' => 'حدث خطاء حاول لاحقا']);
        }
    }

    public function update(VendorRequest $request, $id)
    {
        try {

            $vendors = Vendors::selection()->find($id);
            if (!$vendors)
                return redirect()->route('admin.vendors')->with(['error' => 'هذا المتجر غير موجود']);

            DB::beginTransaction();
            //check photo
            if ($request->has('logo')) {
                $filepath = uploadImage('vendors', $request->logo);

                //update new photo
                Vendors::where('id', $id)->update([
                    'logo' => $filepath
                ]);
            }

            //chick password
            //except for what will not be updated
            /* $Data = $request->except('_token', 'id', 'photo', 'password','add'); // and photo updated already in above ^

            if ($request->has('password')) {
                 $Data['password'] = $request->password;
            }

            //update
            Vendors::where('id', $id)->update($Data); */


            $Data = [];
            if ($request->has('password')) {
                //update without photo
                Vendors::where('id', $id)->update([
                    'name'        => $request->name,
                    'mobile'      => $request->mobile,
                    'email'       => $request->email,
                    'address'     => $request->address,
                    'password'    => bcrypt($request->password),
                    'category_id' => $request->category_id,
                    'active'      => $request->active,
                ]);
            } else {
                //update without photo and password
                Vendors::where('id', $id)->update([
                    'name'        => $request->name,
                    'mobile'      => $request->mobile,
                    'email'       => $request->email,
                    'address'     => $request->address,
                    'category_id' => $request->category_id,
                    'active'      => $request->active,
                ]);;
            }

            DB::commit();
            return redirect()->route('admin.vendors')->with(['success' => 'تم التعديل بنجاح']);
        } catch (Exception $e) {
            DB::rollback();
            return $e;
            return redirect()->route('admin.vendors')->with(['error' => 'حدث خطاء حاول لاحقا']);
        }
    }

    public function destroy($id)
    {
        try {
            $vendors = Vendors::find($id);
            if (!$vendors)
                return redirect()->route('admin.vendors')->with(['error' => 'هذا المتجر غير موجود']);


            //delete photo from folder
            $image = Str::after($vendors->logo, 'assets/');
            $image = base_path('assets/' . $image);
            unlink($image);


            //delete
            $vendors->delete();
            return redirect()->route('admin.vendors')->with(['success' => 'تم الحذف بنجاح']);
        } catch (Exception $e) {
            return redirect()->route('admin.vendors')->with(['error' => 'حدث خطاء اثناء الحذف حاول لاحقا']);
        }
    }

    public function changeStatus($id)
    {
        try {
            $vendor = Vendors::find($id);
            if (!$vendor)
                return redirect()->route('admin.vendors')->with(['error' => 'هذا القسم غير موجود']);

            $status = $vendor->active == 1 ? 0 : 1;
            $vendor->update(['active' => $status]);
            return redirect()->route('admin.vendors')->with(['success' => 'تم بنجاح']);
        } catch (Exception $e) {
            return redirect()->route('admin.vendors')->with(['error' => 'حدث خطاء اثناء التفعيل حاول لاحقا']);
        }
    }
}
