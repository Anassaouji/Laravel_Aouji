<?php

use App\Http\Controllers\ArticleController;
use App\Http\Controllers\BiblioController;
use Illuminate\Support\Facades\Route;
use \App\Http\Middleware\AgeVerification;
use App\Http\Controllers\BookController; // Replace with your actual controller path
use Illuminate\Support\Facades\Auth;
use Ramsey\Uuid\Type\Integer;

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
    return view('welcome');
});
Route::get('/aceul', function () {
    return view('bienvenue');
});
Route::get('/aceul/{id}', function ($id) {
    return "vous choisir l'id $id";
});

Route::get('/contact', function () {
    return "page de contact";
})->name('contact');
Route::get('/about', function () {
    return "page de about";
})->name('about');

Route::group([
            'prefix' => 'admin',
            'middleware' => 'auth'
            ], function () {
    // Routes spécifiques au groupe "admin"
    Route::get('/dashboard', function () {
        return view('admin.dashboard');
    });

    Route::get('/profile', function () {
        return view('admin.profile');
    });
});



Route::get('/age/{age}', function () {

})->middleware('age' );




Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::resource('books', BookController::class);


// middleware:authentification

// Route::resource('books', BookController::class)->middleware('auth');

// Route::put('books/{book}/update', [BookController::class, 'update'])->middleware('admin');

// Route::delete('books/{book}/delete', [BookController::class, 'destroy'])->middleware('admin');

// pour article:
Route::resource("articles",ArticleController::class);
// Route::get('/articles/{article}/acheter', 'App\Http\Controllers\ArticleController@acheter')->name('acheter');
// les boucles
Route::get("pr",function(){
    return view("bienvenue");
});


// middleware:maghadi t'acceder la page hta dir login

Route::view("/mdllwr","bienvenue")->middleware('auth');


// tester midlleware age
Route::get("/agem/{age}",function($age){
    return "vous majour ";
})->middleware("age");


// controoler
Route::resource("/bibliotheques",BiblioController::class);



