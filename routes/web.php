<?php

use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\PostController;
use \App\Http\Controllers\BlogController;
use \App\Http\Controllers\CommentController;
use \App\Http\Controllers\HamshController;
use \App\Http\Controllers\PromReqController;


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
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
Route::get('/posts/create',[PostController::class, 'create'])->name('posts.create')->middleware('role:admin|writer');
Route::get('/posts/{post}/edit',[PostController::class, 'edit'])->name('posts.edit')->middleware('role:admin|editor');


Route::resource('/blogs', BlogController::class);

Route::view('stage','prom.index');
Route::resource('comments',CommentController::class);
Route::resource('hamshs',HamshController::class);

/*Route::post('forms/sciplan/', 'HamshController@index');*/

/*Route::view('hamshs/forms/sciplani','hamshs.forms.sciplan')->name('sciplan');*/
/*Route::view('hamshs/forms/sciplan','hamshs.forms.sciplan')->name('sciplan'); // working line. it is not working bcs I call a view which has no function in the controller
Route::view('hamshs/forms/sciplan','hamshs.forms.sciplan')->name('sciplan');*/
Route::get('/hamshs/forms/index2',[HamshController::class, 'index2'])->name('hamshs.index2');

/*Route::view('/sciplanEdit','hamshs.forms.edit')->name('sciplanEdit');*/
/*Route::view('/sciplan/createform','hamshs.forms.createform')->name('sciplancreateform');*/

Route::post('/hamshs/forms/sciplan',[HamshController::class, 'storef'])->name('hamshs.storef');
Route::post('/hamshs/sciplanH',[HamshController::class, 'storefH'])->name('hamshs.storefH'); //f for form, H for hamesh

Route::get('/hamshs/edit2/{form_id}',[HamshController::class, 'edit2'])->name('hamshs.forms.edit');
Route::post('/hamshs/update2/{form_id}',[HamshController::class, 'update2'])->name('site-update');
//Route::post('hamshs/update/{form_id}', 'HamshController@update')->name('site-update');
Route::get('/hamshs/show2/{form_id}',[HamshController::class, 'show2'])->name('hamshs.forms.show');

/*Route::view('/hamshs/newapplicaion','hamshs.newapplicaion');*/
Route::view('/newapplicaiono','hamshs.newapplicaion')->name('newapplicaion');
Route::view('/NewApplication','NewApplication.index')->name('NewApplicationBoard');
/*Route::view('/hamshsindex','hamshs.index')->name('hamshidex');*/



/*Route::view("forms/Sci_plan_",'forms.Sci_plan_');
Route::get('/hamshs/create2', function () {
    return view('views.hamshs.create2');
})->name('views.hamshs.create2');
Route::view('/hamshs/create2','hamshs.create2');

Route::get('/hamshs/sciplan','HamshController@sciplan')->name('sciplan');*/

//Route::resource('/blogs/index','BlogController');
//Route::get('/blogs/index',[BlogController::class, 'index'])->name('blogs.index');
//Route::get('/blogs',[PostController::class, 'create'])->name('posts.create');*/
/*Route::get('/blogs', function () {
    return view('blogs.index');
})->name('blogs.index');*/
//Route::get('/blogs',[BlogController::class, 'stage']);
/*Route::get('/blogs/stage', function () {
    return view('blogs.stage');
})->name('blogs.stage');*/
/*Route::get('stage', function () {
    return view('stage');
});*/
/*Route::get('/hamshs/sciplan','HamshController@sciplan')->name('sciplan');*/
/*Route::get('/hamshs/sciplan', function () {
    return "Sudad";
return view('hamshs.sciplan');


})->name('sciplan');*/
