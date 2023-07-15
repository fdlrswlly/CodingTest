<?php
use App\Http\Controllers\helloController;
use App\Http\Controllers\JurusanController;
use App\Http\Controllers\MhsController;
use App\Http\Controllers\MobilController;
use Illuminate\Routing\Route as RoutingRoute;
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
Route::get('', function () {
    return view('welcome');
});

/*Route::get('/main', function () {
    return view('main');
});*/
Route::get('/test', function () {
    return view('template.default');
});

Route::get('/', [LoginController::class, 'login'])->name('login');
Route::post('actionlogin', [LoginController::class, 'actionlogin'])->name('actionlogin');
//Route::get('home', [HomeController::class, 'index'])->name('home')->middleware('auth');
Route::get('actionlogout', [LoginController::class, 'actionlogout'])->name('actionlogout')->middleware('auth');
Route::get('main','HomeController@index');
Route::get('login', 'LoginController@login');
Route::post('actionlogin', 'LoginController@actionlogin');
Route::get('/DataMobil/mobil', 'MobilController@mobil')->name('mobil');
Route::get('/DataMobil/tambah_mobil', 'MobilController@tambah2');
//route CRUD
Route::post('/DataMobil/tambah_mobil/store', 'MobilController@store');
Route::get('/DataMobil/edit_mobil/{id_mobil}','MobilController@edit');
Route::post('/DataMobil/edit_mobil/update', 'MobilController@update');
Route::get('/DataMobil/hapus/{id_mobil}', 'MobilController@hapus');

