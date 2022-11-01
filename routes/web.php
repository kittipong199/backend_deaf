<?php

use App\Http\Controllers\CouresControllers;
use App\Http\Controllers\ContentsController;
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

Route::get('/',[CouresControllers::class,'index']);

Route::get('/coures',[CouresControllers::class,'show'])->name('showcoures');
Route::post('/create',[CouresControllers::class,'create'])->name('addCoures');


Route::get('/showcontent',[ContentsController::class,'index'])->name('showcontent');
Route::post('/addcontent',[ContentsController::class,'store'])->name('createcontent');
require __DIR__.'/auth.php';
