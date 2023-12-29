<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\ResourceController;
use App\Http\Controllers\TestController;
use App\Http\Controllers\UserController;
use App\Http\Middleware\Admin;
use App\Http\Middleware\CheckAge;
use Symfony\Component\HttpFoundation\Request;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

// // Route::get('test',function(){
// //     echo 'Hello';
// // });
// // Route::get('user/profile',function(){
// //     return 'Hello user';
// // });
// // Route::get('user/{name}/profile/{id}',function($name,$id){
// //     return "the name is $name and the id is $id";
// // });
// // Route::get('user/delete/{id}',function($id){
// //     return "<h1> delete $id </h1>";
// // });
// // Route::get('name/{name}/{id}',function($name,$id){
// //     return "the name is:" . " " .$name . " ". "the id is:" . $id ;
// // })->where(['name'=>'[a-zA-Z]+','id'=>'[0-9]+']);

// // Route::prefix('user')->group(function(){
// //     Route::get('test',function(){
// //         return 'hind';
// //     });
// //     Route::get('car',function(){
// //         return "hello world";
// //     });
// // });
// // Route::fallback(function(){
// //     return redirect('/');
// // });

// Route::get('test',function(){
//     echo '<h1>hind</h1>';
// });
// Route::get('test/user',function(){
//     return'<h1>hind</h1>';
// });

// Route::get('user/{name}/{id}',function($name,$id){
//     return "the name is $name and the id is $id";
// })->where(['name'=>'[a-zA-Z]+','id'=>'[0-9]+']);
// Route::prefix('user')->group(function(){
//     Route::get('test',function(){
//         echo 'yes';
//     });
// });
// Route::fallback(function(){
//     return redirect('/');
// });
// Route::post('/home',function(){
//     $data=['name'=>'hind','email'=>'hind@gmail.com'];
//     return view ('home',$data);
// });
// Route::view('/form','form');
// Route::view('/home','home');
// Route::get('/url',function(){
//     return view('link');
// })->name('link');
// Route::get('customer/{user}',[CustomerController::class,'index'])->middleware(Admin::class);
// Route::get('form2',[CustomerController::class,'view']);
// // Route::get('test2/{age}',TestController::class)->middleware(CheckAge::class);
// Route::resource('photos',ResourceController::class);
// // Route::middleware(CheckAge::class)->group(function(){
// //     Route::get('customer/{age}',[CustomerController::class,'index']);
// //     Route::get('test2/{age}',TestController::class);
// // });
Route::get('index',[CustomerController::class,'index']);
Route::post('view',[CustomerController::class,'view']);
Route::get('data',[CustomerController::class,'data']);
Route::get('index',[CustomerController::class,'index'])->name('index');
Route::get('edit/{id}',[CustomerController::class,'edit']);
Route::post('update/{id}',[CustomerController::class,'update'])->name('update');
Route::get('nav',function(){
    return view('layouts.nav');
});

Route::get('home',function(){
    return view('layouts.home');
});

Route::get('about3',function(){
    return view('layouts.about');
});
Route::post('home1',function(Request $request){
    return $request;
});
Route::get('users/{name}',function($name){
    if($name=='hind'){
        return 'admin';
    }
    else{
        return 'user';
    }
});
Route::get('insert',[UserController::class,'insertform']);
Route::post('data',[UserController::class,'insert']);
Route::get('/table',[UserController::class,'get']);
Route::get('/show/{id}',[UserController::class,'show']);
Route::get('/edit/{id}',[UserController::class,'edit']);
Route::post('/update/{id}',[UserController::class,'update'])->name('update');
Route::get('/delete/{id}',[UserController::class,'delete']);
Route::delete('/delete2',[UserController::class,'delete2']);






