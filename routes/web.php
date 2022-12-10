<?php

use App\Http\Controllers\AnswerController;
use App\Http\Controllers\CouresControllers;
use App\Http\Controllers\ContentsController;
use App\Http\Controllers\QuestionController;

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

Route::get('/', function () {
    return view('welcome');
});

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/',[CouresControllers::class,'index'])->name('showcoures');

///  Coures Template
// Route::get('/coures',[CouresControllers::class,'show'])->name('showcoures');
Route::post('/create',[CouresControllers::class,'create'])->name('addCoures');

// Content Template
Route::get('/showcontent',[ContentsController::class,'index'])->name('showcontent');
Route::post('/addcontent',[ContentsController::class,'store'])->name('createcontent');



// Quiz And Aswers
Route::get('/showquiz',[QuestionController::class,'index'])->name('showquiz');
Route::post('/addquiz',[QuestionController::class,'store'])->name('createquiz');
//  Aswers
Route::get('/showanswer',[AnswerController::class,'index'])->name('showanswer');
Route::post('/addAnswer',[AnswerController::class,'store'])->name('creatanswer');




require __DIR__.'/auth.php';

// Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
