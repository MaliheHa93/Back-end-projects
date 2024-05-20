<?php

use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\firstviewController;
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

Route::get('/',[firstviewController::class, 'index']);

//Route::get('/save', [voteController::class, 'store']);
//Route::post('/save',[voteController::class, 'store']);


Route::get('/login', function (){
    return view('toosTechDir.login');
});


Route::get('/imprint', function (){
    return view('toosTechDir.Imprint');
});
Route::get('/privacy', function (){
    return view('toosTechDir.privacy1');
});


//Route::get('/readmore',function (){
//    return view('toosTechDir.readmore');
//});
//
//Route::get('/master',function (){
//    return view('toosTechDir.master');
//});
