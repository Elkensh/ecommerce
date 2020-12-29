<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Sliders;
use Exception;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

class SliderController extends Controller
{
    public function fileCreate()
    {
        $sliders = Sliders::get();
        return view('admin.sliders.images',compact('sliders'));
    }

    public function fileStore(Request $request)
    {

        $path = "";
        if ($request->hasFile('file')) {
            $file = $request->file('file');
            $path = uploadImage('sliders', $file);

            if ($path) {
                // enter the record in images database
                return Sliders::create([
                    'photo' => $path
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
    }


    public function fileDestroy($slider)
    {
        try {
            $image = Sliders::find($slider);

            if (!$image)
                return redirect()->route('admin.slider.image')->with(['error' => 'هذه الصوره غير موجود']);

            $img = Str::after($image->photo, 'assets/');
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
