<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;


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


// Route::get('/', function () {
//     // echo "hello default page";
//     return view('home');
// });

// return from the controller
Route::get('/',[HomeController::class, 'index']);




// Route::get('/hello', function () {
//    return view('hello');
// });
Route::get('/hello',[HomeController::class, 'hello']);

// Route::get('/about-us', function(){
//     return view('about');
// });
Route::get('/about-us',[HomeController::class, 'about']);
