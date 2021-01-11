<?php

use http\Client\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MyDocumentController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\MyStudentController;
use App\Http\Controllers\MyOfficeController;
use App\Http\Controllers\MyDeanController;
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

Route::get('/auth', function(){
    return view('pages/auth');
});
/*
Route::get('/student', function(){
    return view('pages/student');
});

Route::get('/dean', function(){
    return view('pages/dean');
});
Route::get('/office', function(){
    return view('pages/office');
});
*/
Route::get('/home', function(){
    return view('pages/home');
});
Route::get('/home', [MyOfficeController::class, 'home'])->name('home');

//************************************************
Route::get('pdf/view_annex_1', [MyDocumentController::class, 'annex_1'])->name('annex_1');
Route::get('pdf/download', [MyDocumentController::class, 'download1PDF'])->name('download');

Route::get('/pdf/{type}/{id}', function($type, $id){
    return 'this is page for certificate '.$id.' type '.$type;
    //return view('annex_1');
});
Route::get('pdf/view_annex_5', [MyDocumentController::class, 'annex_5'])->name('annex_5');
Route::get('pdf/download5', [MyDocumentController::class, 'download5PDF'])->name('download5');

Route::get('pdf/view_annex_10', [MyDocumentController::class, 'annex_10'])->name('annex_10');
Route::get('pdf/download10', [MyDocumentController::class, 'download10PDF'])->name('download10');
//************************************************
/*
Route::get('/', function(){
    $value = 'text mix';
    return view('pages/test')->with('value', $value);
});
*/

Route::get('/student', [MyStudentController::class, 'index']);
Route::get('/office', [MyOfficeController::class, 'index']);
Route::get('/dean', [MyDeanController::class, 'index']);

//Route::get('/', function(){ return view('pages/auth'); });
/*
Route::resource('auth', 'AuthController');
//{{ route('auth.login') }}
*/
Route::get('/', [AuthController::class, 'login']);

//Request $request
Route::post('/check', [MyDocumentController::class, 'check']);
//Route::post('/login', function (Request $request) {
//    return $request;
//});

Route::post('/annex',[MyDocumentController::class, 'annexCreate']);
Route::post('/annexDean',[MyDocumentController::class, 'annex']);
Route::post('/zayavDean',[MyDocumentController::class, 'zayavDean']);
Route::post('/zayavOffice',[MyDocumentController::class, 'zayavOffice']);
Route::post('/zayav',[MyDocumentController::class, 'zayavCreate']);

//Route::post('/login', 'AuthController@postLogin');

Route::get('/login',[AuthController::class, 'login']);
Route::post('/login',[AuthController::class, 'postLogin']);
