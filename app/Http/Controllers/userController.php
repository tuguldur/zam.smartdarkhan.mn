<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Auth;
use Hash;
use App\User;
class userController extends Controller
{
    public function index(){
        return view('profile');
    }
    public function save(Request $request){
        $old_password = Auth::user()->password;
        $check_password = $request->old_password;
        $new_password = $request->new_password;
        if (Hash::check($check_password, $old_password)) 
        {
            $user = User::find(Auth::user()->id);
            $user->name = $request->name;
            $user->password = bcrypt($request->password);
            $user->save();
            return back();
        }
        else{
            echo('password wrong');
        }
    }
}
