<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\LanguagesRequest;
use App\Models\Admin;
use Illuminate\Http\Request;
use App\Models\Languages;
use Exception;

class LanguagesController extends Controller
{
    public function index(){

                         ///scope selection//
       $languages = Languages::selection()->paginate(PAGINATION_COUNT);
        return view('admin.languages.index',compact('languages'));

    }

    public function create(){

        return view('admin.languages.create');
    }

    public function store(LanguagesRequest $request){

        try{

        Languages::create($request->except(['_token']));
        return redirect()->route('admin.languages')->with(['success'=>' تم اضافه اللغه بنجاح']);

        }catch(Exception $e){

            return redirect()->route('admin.languages')->with(['error'=>'حدث خطا اثناء اضافه اللغه']);


        }
    }

    public function edit($id)
    {
        $languages = Languages::selection()->find($id);
        if(!$languages){
            return redirect()->route('admin.languages')->with(['error'=>'هذه اللغه غير موجوده']);
        }
        return view('admin.languages.edit',compact('languages'));
    }

    public function update($id , LanguagesRequest $request){
        try{
        $languages = Languages::find($id);
        if(!$languages){
            return redirect()->route('admin.laguages.edit',$id)->with(['error'=>'هذه اللغه غير موجوده']);
        }
        // update Language
        if(!$request->active == 1){ // OR   if(!$request->has('active'))
        $request->request->add(['active' => 0]);
        }
        $languages->update($request->except(['_token']));
        return redirect()->route('admin.languages')->with(['success'=>' تم تحديث اللغه بنجاح']);
        }catch(Exception $e){
            return redirect()->route('admin.languages')->with(['error'=>'هنالك خطا فى التحديث حاول فيما بعد']);

        }

    }

    public function destroy($id){
        try{
        $languages = Languages::find($id);
        if(!$languages){
            return redirect()->route('admin.languages',$id)->with(['error'=>'هذه اللغه غير موجوده']);
        }
        $languages->delete();
        return redirect()->route('admin.languages')->with(['success'=>' تم حذف اللغه بنجاح']);
        }catch(Exception $e){
            return redirect()->route('admin.languages')->with(['error'=>'هنالك خطا فى الحذف حاول فيما بعد']);

        }

    }



}
