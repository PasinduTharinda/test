<?php

use App\Http\Controllers\laravellogin;

use Illuminate\Support\Facades\Route;
use App\Models\log;


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

//Route::get('add',[laravellogin::class, 'add']);
//Route::post('add',[laravellogin::class, 'add']);


//Route::post('welcome',function(){

    //$artical = new log();
   // $artical ->name = request('name');
   // $artical ->password = request('password');
    //$artical->save();


//});


//Route::post('/loginme','laravellogin@welcome');
Route::post('add',[laravellogin::class, 'add']);

