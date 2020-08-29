<?php

/*use Illuminate\Support\Facades\Route;*/
use App\Post;
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
Route::get('/', function () {
    return view('welcome');
    /* return "Chào mừng đến trang web laravel đầu tiên của Trang Lữ";*/
   /* return view('index');*/
  
});

Route::get('/about', function () {
	return 'About content';
});

Route::get('/about/{truyenthamso}', function ($truyenthamso) {
	return $truyenthamso.'About content';// truyền tham số
});

Route::get('/where', function () {
	return Redirect::to('about');//liên kết trang
});
Route::get('/insert', function () {
	DB::insert('insert into posts(body) value(?)',['PHP with Laravel']);
	return 'done';
});// insert dữ liệu vào bảng có sẵn

Route::get('/profile/{name}', 'ProfileController@showProfile');

Route::get('/read', function () {
	$result=DB::select('select*from posts where id=1');
	//return $result;
	foreach ($result as $a){
		return $a->body;
	}
});

Route::get('/update', function () {
	$update=DB::update('update posts set body=" xin chào" where id=1');
	return $update;
});

Route::get('/delete', function () {
	$delete=DB::delete('delete from posts where id=2');
	return $delete;
});

Route::get('/readAll', function () {
	
	$posts=Post::all();
	foreach ($posts as $result){
		/*return $result->body;*/
		echo $result->id." ".$result->body;
		echo "<br>";
	}
});
Route::get('/findID', function () {
	
	$posts=Post::where('id','>=',1)
		->where ('body','xin chào thuyf trang')
		/*->where('body','like','@trang@')*/
		->orderBy('id','desc')
		->take(10)
		->get();
		foreach ($posts as $result){
		return $result->body;
		/*echo $result->id." ".$result->body;
		echo "<br>";*/
	}

});
// chèn dữ liệu
Route::get('/insert', function () {
	$p=new Post;
	$p->body="body mới chèn";
	$p->save();
	
});
//update dữ liệu
Route::get('/updateORM', function () {
	$p=Post:: where ('id',1)->first();
	$p->body="body mới update";
	$p->save();
	
});
// xóa dữ liệu
Route::get('/deleteORM', function () {
	$p=Post:: where ('id','>=',5);
	$p->delete();
});
// xóa theo khóa chính
Route::get('/destroyORM', function () {
	Post:: destroy ([4,3]);
	
});