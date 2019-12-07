<?php

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

//Route::get('/', function () {
//    return view('welcome');
//});

// Auth::routes();

//Route::get('/home', 'HomeController@index')->name('home');


// Route::get('/', 'ServiceController@index');
// Route::get('/home', 'HelloController@index');
// Route::get('/about', 'HelloController@index');
// Route::get('/service', 'ServiceController@index');
// Route::post('/service', 'ServiceController@store');
    
// Route::get('/customer', 'CustomerController@index');
// Route::get('/customer/create', 'CustomerController@create');
// Route::post('/customer', 'CustomerController@store');
// Route::get('/customer/{id}/edite', 'CustomerController@edite');
// Route::patch('/customer/{id}', 'CustomerController@update');
// Route::delete('/customer/{id}', 'CustomerController@destroy');


// Route::get('/post/{id}', 'PostsController@index');
//Route::resource("posts", 'PostsController');
use App\Post;
use App\User;
use Illuminate\Support\Facades\DB;
//
//Route::get('/posts', function (){
//   DB::insert('insert into posts(title, content) values(?,?)', ['this is title', 'this is post content body']);
//
//});
//Route::get('/read', function (){
//   $result = DB::select('select * from posts where id=?', [1]);
//   return $result;
//});
//Route::get('/delete', function (){
//    $result = DB::delete('delete from posts where id=?', [1]);
//    return $result;
//});

//Route::get('/read', function (){
//    $resutls = Post::all();
//    return $resutls;
//});

//Route::get('/create', function (){
//    Post::create(['user_id'=> 1, 'title'=>'this is user to post relation ', 'content'=>'eluquent relation body is mass content body post']);
//});
//Route::get('/update', function (){
//    Post::where('id', 3)->where('admin_id', 0)->update(['title'=>'updated title']);
//});
//Route::get('/softdelete', function (){
//   return Post::withTrashed()->findOrFail(3)->restore();
//});

//Route::get('/user/{id}/post', function ($id){
//    return $result = User::find($id)->post->title;
//});

//Route::get('/post/{id}/user', function ($id){
//    return Post::findOrFail($id)->user->name;
//});
//
//Route::get('/posts/', function (){
//    return User::findOrFail(1)->posts;
//});

//Route::get('/roles', function (){
//     dd(\App\Role::find(1)->users);
//});


///laravel job portal

Route::get('/', 'CompanyController@index');
Route::get('/jobdetails/{id}', 'CompanyController@jobdetails');
Route::get('/applicants', 'CompanyController@applicants');
Route::get('/applicants/{id}/edit', 'CompanyController@applicantsedit');
Route::post('/applicantsprofileupdate/{id}', 'CompanyController@applicantprofileupdate');
Route::get('/companyprofile/{id}', 'CompanyController@companyprofile');
Route::get('/apply/{id}', 'CompanyController@applyjob');
