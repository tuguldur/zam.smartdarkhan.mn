<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\payment;
class paymentController extends Controller
{
    public function save(Request $req){
        /*
        --REQUEST--
       "car_number" => "string"
       "name" => "string"
       "type" => "string"
       "year" => "number"
       "amount" => "number"
       "status" => "string"
        --TABLE--
        $table->string('car_number');
        $table->string('name');
        $table->string('type');
        $table->string('year');
        $table->string('amount');
        $table->string('status');
        */
       $id = $req->id;
       if($id==0){
        $payment = new payment();
        $payment->car_number = $req->car_number;
        $payment->name = $req->name;
        $payment->type = $req->type;
        $payment->year = $req->year;
        $payment->amount = $req->amount;
        $payment->status = $req->status;
        $payment->save();
       }
       else{
        $payment =payment::find($id);
        $payment->car_number = $req->car_number;
        $payment->name = $req->name;
        $payment->type = $req->type;
        $payment->year = $req->year;
        $payment->amount = $req->amount;
        $payment->status = $req->status;
        $payment->save();
       }
        return back();
    }
    public function view(Request $req){
        $payment = payment::limit(20)->orderBy('id', 'desc')->get();
        return response()->json($payment);
    }
    public function find($id){
        $payment = payment::findOrFail($id);
        return response()->json($payment);
    }
    public function search($search){
        $payment = payment::where('id','LIKE','%'.$search.'%')
                ->orWhere('name','LIKE','%'.$search.'%')
                ->orWhere('car_number','LIKE','%'.$search.'%')
                ->orWhere('type','LIKE','%'.$search.'%')
                ->orWhere('year','LIKE','%'.$search.'%')
                ->orWhere('amount','LIKE','%'.$search.'%')
                ->orWhere('status','LIKE','%'.$search.'%')->limit(100)->get();
                return response()->json($payment);
    }
    public function check($car_number){
        $payment = payment::where('car_number','LIKE','%'.$car_number.'%')->get();
        return response()->json($payment);
    }
    public function remove(Request $req){
        $payment = payment::find($req->id)->delete();
        return response()->json(['status' => 'true']);
    }
}