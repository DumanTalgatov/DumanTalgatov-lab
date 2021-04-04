<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;
use App\Models\Lab;
use App\Http\Controllers\ControllerLab;
use App\Http\Controllers\MailController;

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
// Route::get('/record', function () {
//     return view('blog.index');
// });

// Route::name('blog')->get('/blog', [ControllerLab::class, 'index']);

Route::get('/blog/main', [ControllerLab::class, 'index']);
Route::post('/blog/main', [ControllerLab::class, 'store'])->name('add');
// Route::get('/record', [ControllerLab::class, 'index']);
Route::get('/mail/send', 'App\Http\Controllers\MailController@send');