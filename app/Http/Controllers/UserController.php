<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function get(){
        $user=User::get();
        return view('table',compact('user'));
    }
    public function insertform(){
        return view('form');
    }
    public function insert(Request $request){
        $user=new User();
        $user->name=$request->name;
        $user->email=$request->email;
        $user->password=$request->password;
        $user->save();
        return redirect('/table');
    }
    public function show(string $id){
        $user=User::findOrFail($id);
        return view('show',compact('user'));
    }
    public function edit(string $id){
        $user=User::findOrFail($id);
        return view('edit',compact('user'));
    }
    public function update(Request $request, string $id){
        User::where('id',$id)->update([
            'name' => $request->name,
            'email'=> $request->email,
            'password' => $request->password
        ]);
        return redirect('/table');

    }
    public function delete(string $id){
        User::findOrFail($id)->delete();
        return redirect('/table');
    }
    public function delete2(Request $request){
        $id=$request->id;
        User::where('id',$id)->delete();
        return redirect('/table');
    }
}
