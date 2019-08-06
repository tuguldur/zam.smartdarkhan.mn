<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use App\license;
class licenseController extends Controller
{

    public function index(){
        $license = license::all();
        return view('admin/license',["licenses"=>$license]);
    }
    public function save(Request $request){
            $validator = Validator::make($request->all(), [
                'car_number' => '|required|max:10', // max char 10
                'data' => '|required|max:32768|mimes:7z,zip,rar', //max size 32mb, 7z, zip, rar supported
            ]);
            if ($validator->fails()) {
                return redirect('/license')
                            ->withErrors($validator)
                            ->withInput();
            }
            else {
                $file = $request->data;
                $save = $request->file('data')->store('public/upload');
                $path= preg_replace('/^public/', 'storage/app/public', $save);
                $license = new license();
                $license->car_number = $request->car_number;
                $license->file_url = $path;
                $license->status = 'false';
                $license->save();

                return redirect()->back()->with('message','Цахим зөвшөөрөл авах хүсэлт амжилттай илгээгдлээ.');
            }
    } 
    public function edit(Request $request){
        if($request->status == 'true'){
            $license = license::find($request->id);
            $license->status = "true";
            $license->save();
            return redirect()->back();
        }
        else if($request->remove == 'true'){
            $license = license::find($request->id);
            $license->delete();
            return redirect()->back();
        }
        else dd("some thing went wrong");
    }
    public function search(Request $req){
        $search = $req->search;
        $license = license::where('id','LIKE','%'.$search.'%')
        ->orWhere('car_number','LIKE','%'.$search.'%')
        ->orWhere('status','LIKE','%'.$search.'%')->get();
        return view('admin/license',["licenses"=>$license]);
    }
}
