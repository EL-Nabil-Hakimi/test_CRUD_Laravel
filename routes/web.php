<?php

use App\Http\Controllers\Page2;
use Illuminate\Support\Facades\Route;

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
    return view('PageAdd');
});


Route::get('/page2', [Page2::class , 'index']); 

Route::post('/AddUser', [Page2::class, 'create']);