<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\ProductRequest;
use App\Models\Products;
use App\Models\SubCategories;
use App\Models\ImageUpload;
use Exception;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $products = Products::selection()->paginate(PAGINATION_COUNT);
        return view('admin.product.index', compact('products'));
    }

    public function create()
    {
        $sub_category = SubCategories::where('translation_of', 0)->active()->get();
        return view('admin.product.create', compact('sub_category'));
    }

    public function store(ProductRequest $request)
    {
        try {
            // chick active {in_stock}//
            if (!$request->has('in_stock')) {
                $request->request->add(['in_stock' => 0]);
            } else {
                $request->request->add(['in_stock' => 1]);
            }
            $products = Products::create([
                'name' => $request->name,
                'slug' => $request->name,
                'subcategory_id' => $request->sub_category_id,
                'sku' => $request->sku,
                'price' => $request->price,
                'manage_stock' => $request->manage_stock,
                'in_stock' => $request->in_stock

            ]);

            return redirect()->route('admin.product')->with(['success => تم الحفظ بنجاح']);
        } catch (Exception $e) {
            return redirect()->route('admin.product')->with(['error => حدث خطا حاول لاحقا']);
        }
    }


    public function fileCreate($id)
    {
        $post = Products::find($id);
        return view('admin.product.images', compact('post'));
    }

    public function fileStore(Request $request, $post)
    {
        $pp = Products::find($post);
        $path = "";
        if ($request->hasFile('file')) {
            $file = $request->file('file');
            $path = uploadImage('products', $file);


            /* $fileName = uniqid() . '.' . $file->getClientOriginalExtension();
            $path = $file->storeAs('products' , $fileName); */

            //save photo //
            /*  $filePath = "";
            // photo Accessors in models //
            if ($request->has('photo')) {
                $filePath = uploadImage('products', $request->photo);
            } */

            if ($path) {
                // enter the record in images database
                return $pp->images()->create([
                    'filename' => $path
                ]);

                return response()->json([
                    'upload_status' => 'success'
                ], 200);
            } else {
                return response()->json([
                    'upload_status' => 'failed'
                ], 401);
            }
        }

        /* $imageName = $image->getClientOriginalExtension();
        $image->move(base_path('images'),$imageName);

        $imageUpload = new ImageUpload();
        $imageUpload->filename = $imageName;
        $imageUpload->save();
        return response()->json(['success'=>$imageName]); */
    }
    public function fileDestroy($image)
    {
        try {
            $image = ImageUpload::find($image);

            if (!$image)
                return redirect()->route('admin.product')->with(['error' => 'هذه الصوره غير موجود']);

            $img = Str::after($image->filename, 'assets/');
            $img = base_path('assets/' . $img);
            unlink($img);

            $image->delete();

            return redirect()->back()->with(['success' => 'تم الحذف بنجاح']);
        } catch (Exception $e) {
            return redirect()->back()->with(['error' => 'هذه الصوره غير موجود']);
        }
        /* $filename =  $request->get('filename');
        ImageUpload::where('filename',$filename)->delete();
        $path=base_path().'/assets/images/products/'.$filename;
        if (file_exists($path)) {
            unlink($path);
        }
        return $filename; */
    }
}
