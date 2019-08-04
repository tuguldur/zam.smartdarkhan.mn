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
                $car_nb = substr($request->car_number, 0, 4);
                $filename = $car_nb.'-'.md5(time()).'.'.request()->data->getClientOriginalExtension();
                request()->data->move(public_path('data/upload'), $filename);
                $path = "/data/upload/".$filename;

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
}
