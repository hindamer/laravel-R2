<?php

namespace App\Http\Controllers;

use App\Models\Customer as ModelsCustomer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Customer;
use PhpParser\Node\Expr\Cast\String_;

class CustomerController extends Controller
{
    public function index(){
        // $cust=DB::table('customers')->get();
        // foreach($cust as $val){
        //     echo $val->name." ".$val->age. "<br>";
        // }
        $cust=Customer::get();
        return view('index',['customers'=>$cust]);
    }
    // public function view(){
    //    $customer=new Customer();
    //    $customer->name='nour';
    //    $customer->age=23;
    //    $customer->save();
    //    return response("done");
    // }
    public function data(){
        return view('form');
    }
    public function view(Request $request){
        $customer=new Customer();
        $customer->name=$request->name;
        $customer->age=$request->age;
        $customer->save();
        return redirect()->route('index')->with('yes');
    }
    public function edit(string $id){
        $custome=Customer::findOrFail($id);
        return view('update',['custome'=>$custome]);
    }
    public function update(Request $request,String $id){
        Customer::where('id',$id)->update([
            'name'=>$request->name,
            'age'=>$request->age
        ]);
        return redirect()->route('index')->with('done');
    }
}
