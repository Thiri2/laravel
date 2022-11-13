<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TestingController;
use App\Http\Controllers\TemplateController;


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

// Route::get('/', function () {
//     return view('welcome');
// });

//route->controller->view
Route::get('/', [TestingController::class, 'index']);
Route::get('/blade', [TestingController::class, 'blade']);

Route::get('/home', [TemplateController::class, 'home']);
Route::get('/about', [TemplateController::class, 'about']);
Route::get('/contact', [TemplateController::class, 'contact']);


//route->view
Route::get('/template/home', function () {
    return view('template.home');
});

Route::get('/template/about', function () {
    return view('template.about');
});

Route::get('/template/contact', function () {
    return view('template.contact');
});

Route::get('/template/post', function () {
    return view('template.post');
});