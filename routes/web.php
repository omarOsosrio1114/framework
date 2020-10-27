<?php

use App\Framework;
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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::resource('dashboard/framework', 'FrameworkController');
Route::resource('dashboard/category', 'CategoryController');
Route::post('dashboard/framework/{framework}/tutorial','FrameworkController@tutorial')->name('framework.tutorial');

Route::get('/pdf', function () {
    $frameworks = Framework::all();
    $pdf = PDF::loadView('dashboard/informe',['frameworks'=>$frameworks]);
    $pdf->setPaper("A4", "landscape");
    return $pdf->download('informe.pdf');
})->name('download');
                                                                                         

