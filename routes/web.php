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

//PRAKTIKUM 3

//Route::get('/Home', function () {
//  return view('Home');
//});


//nomer 1
//Route::get('/', function () {
 //   echo "Selamat Datang";
//});

//nomer 2
//Route::get('/about', function () {
 //   echo "2041720090 <br>";
 //   echo " Siswi Diah Priadhita Dewi <br>";
 //   echo " TI 2H ";

//});

//nomer 3
//Route::get('/articles/{id}', function ($id) {
//    echo "Ini adalah halaman artikel dengan ID: ".$id ;

//});

//PRAKTIKUM 2
//Route::get('/', [HomeController::class,'index']);

//Route::get('/about', [AboutController::class,'about']);

//Route::get('/articles/{id}', [ArticleController::class,'articles']);

//PRAKTIKUM 3
// Route::get('/', [UtamaController::class,'index']);
// Route::get('/about', [AboutUsController::class,'about']);
// Route::get('/news/{id}', [NewsController::class,'news']);
//Auth::routes();

//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Route::get('/Home', [PostController::class, 'index']);
Route::get('/home', function () {
    return view('home');
});