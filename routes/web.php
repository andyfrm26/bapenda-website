<?php

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

Route::prefix('admin')->group(function () {
    Route::get('/login', 'AuthController@login')->name('login');
    Route::post('/login', 'AuthController@loginPost')->name('login');
});

Route::middleware('auth')->prefix('admin')->group(function () {
    Route::get('/logout', 'AuthController@logout')->name('logout');
    Route::get('/dashboard', 'AdminPageController@index')->name('dashboard');

    Route::resource('/berita', 'BeritaController');
    Route::resource('/artikel', 'ArtikelController');
    Route::resource('/banner', 'BannerController');
    Route::post('/banner/toggle/{banner}', 'BannerController@toggleStatus')->name('banner.toggleStatus');
});

Route::get('/admin', function () {
    return redirect()->route('beranda');
});

Route::get('/', 'PageController@index')->name('beranda');
Route::get('/berita', 'PageController@berita')->name('user.berita.index');
Route::get('/berita/{post}', 'PageController@showBerita')->name('user.berita.show');

Route::get('/artikel', 'PageController@artikel')->name('user.artikel.index');
Route::get('/artikel/{post}', 'PageController@showArtikel')->name('user.artikel.show');

Route::get('/pajak', 'PageController@pajak')->name('user.pajak');
Route::get('/pajak/pbb-p2', 'PageController@pajakPbb')->name('user.pajak.pbb');
Route::get('/pajak/bphtb', 'PageController@pajakBphtb')->name('user.pajak.bphtb');
Route::get('/pajak/hotel', 'PageController@pajakHotel')->name('user.pajak.hotel');
Route::get('/pajak/restoran', 'PageController@pajakRestoran')->name('user.pajak.restoran');
Route::get('/pajak/hiburan', 'PageController@pajakHiburan')->name('user.pajak.hiburan');
Route::get('/pajak/reklame', 'PageController@pajakReklame')->name('user.pajak.reklame');
Route::get('/pajak/penerangan', 'PageController@pajakPenerangan')->name('user.pajak.penerangan');
Route::get('/pajak/parkir', 'PageController@pajakParkir')->name('user.pajak.parkir');
Route::get('/pajak/air-bawah-tanah', 'PageController@pajakAir')->name('user.pajak.air');
Route::get('/pajak/mineral', 'PageController@pajakMineral')->name('user.pajak.mineral');

Route::get('/retribusi/jasa-umum', 'PageController@retribusiUmum')->name('user.retribusi.umum');
Route::get('/retribusi/jasa-usaha', 'PageController@retribusiUsaha')->name('user.retribusi.usaha');
Route::get('/retribusi/perizinan', 'PageController@retribusiPerizinan')->name('user.retribusi.perizinan');

Route::get('/selayang-pandang', 'PageController@selayangPandang');
Route::get('/sejarah', 'PageController@sejarah');
Route::get('/visi-dan-misi', 'PageController@visiMisi');
Route::get('/struktur-organisasi', 'PageController@strukturOrganisasi');
Route::get('/tupoksi', 'PageController@tupoksi');
Route::get('/alur-pembayaran', 'PageController@alurPembayaran');
Route::get('/e-bphtb', 'PageController@eBphtb');
Route::get('/j-mbako', 'PageController@jMbako');
