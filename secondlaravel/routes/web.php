<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
use App\task;
use Illuminate\Http\Request;

Route::get('/', function () {
    return view('task');
});
// danh sach to do list
// //them moi 1 task
Route::post('/task', function () {
    $validator=Validator::make($request->all(),['name'=>'required[max 255]']);
    if($validator->fails()){
    	return redirect('/')
    	->withInput()
    	->withErrors($validator);
    }
});
//xoa 1 task