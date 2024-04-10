<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Short_LinksController;

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

Route::redirect('/', 'login') ;
Route::redirect('/dashboard', 'generate-shorten-link') ;


Route::get('generate-shorten-link',[Short_LinksController::class,'index']);
Route::get('generate-shorten-link',[Short_LinksController::class,'list']);

Route::post('generate-shorten-link',[Short_LinksController::class,'store'])->name('generate.shorten.link.post');
Route::get('{code}',[Short_LinksController::class,'shortenLink'])->name('shorten.link');



Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        redirect('dashboardp');
    })->name('dashboard');
});

