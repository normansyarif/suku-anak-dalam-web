<?php

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

Route::get('/', 'GuestController@home')->name('home');
Route::get('kegiatan', 'GuestController@kegiatan')->name('kegiatan');
Route::get('kegiatan/view/{id}', 'GuestController@kegiatanView')->name('kegiatan-view');
Route::get('editorial', 'GuestController@editorial')->name('editorial');
Route::get('editorial/view/{id}', 'GuestController@editorialView')->name('editorial-view');
Route::get('galeri', 'GuestController@galeri')->name('galeri');
Route::get('mitra', 'GuestController@mitra')->name('mitra');
Route::get('mitra/view/{id}', 'GuestController@mitraView')->name('mitra-view');
Route::get('akses', 'GuestController@akses')->name('akses');
Route::get('tentang/profil', 'GuestController@profil')->name('profil');
Route::get('tentang/sejarah', 'GuestController@sejarah')->name('sejarah');



Route::get('admin/home', 'AdminController@homeSettings')->name('admin.home');
Route::get('admin/profil', 'AdminController@profilSettings')->name('admin.profil');
Route::get('admin/sejarah', 'AdminController@sejarahSettings')->name('admin.sejarah');

Route::get('admin/kegiatan', 'AdminController@kegiatanIndex')->name('admin.kegiatan');
Route::get('admin/kegiatan/add', 'AdminController@kegiatanAdd')->name('admin.kegiatan.add');
Route::get('admin/kegiatan/edit/{id}', 'AdminController@kegiatanEdit')->name('admin.kegiatan.edit');

Route::get('admin/editorial', 'AdminController@editorialIndex')->name('admin.editorial');
Route::get('admin/editorial/add', 'AdminController@editorialAdd')->name('admin.editorial.add');
Route::get('admin/editorial/edit/{id}', 'AdminController@editorialEdit')->name('admin.editorial.edit');

Route::get('admin/mitra', 'AdminController@mitraIndex')->name('admin.mitra');
Route::get('admin/mitra/add', 'AdminController@mitraAdd')->name('admin.mitra.add');
Route::get('admin/mitra/edit/{id}', 'AdminController@mitraEdit')->name('admin.mitra.edit');

Route::get('admin/galeri', 'AdminController@galeriIndex')->name('admin.galeri');

Route::post('ckeditor/upload', 'GuestController@uploadCk')->name('ckeditor.upload');


Route::post('admin/post/beranda-update', 'AdminController@berandaUpdate')->name('admin.beranda-update');
Route::post('admin/post/beranda-menu-update', 'AdminController@berandaMenuUpdate')->name('admin.beranda-menu-update');
Route::post('admin/post/footer-update', 'AdminController@footerUpdate')->name('admin.footer-update');
Route::post('admin/post/profil-update', 'AdminController@profilUpdate')->name('admin.profil-update');
Route::post('admin/post/sejarah-update', 'AdminController@sejarahUpdate')->name('admin.sejarah-update');

Route::post('admin/post/kegiatan-insert', 'AdminController@kegiatanInsert')->name('admin.kegiatan-insert');
Route::post('admin/post/kegiatan-publish/{id}', 'AdminController@kegiatanPublish')->name('admin.kegiatan-publish');
Route::post('admin/post/kegiatan-delete/{id}', 'AdminController@kegiatanDelete')->name('admin.kegiatan-delete');
Route::post('admin/post/kegiatan-update/{id}', 'AdminController@kegiatanUpdate')->name('admin.kegiatan-update');


Route::post('admin/post/editorial-insert', 'AdminController@editorialInsert')->name('admin.editorial-insert');
Route::post('admin/post/editorial-publish/{id}', 'AdminController@editorialPublish')->name('admin.editorial-publish');
Route::post('admin/post/editorial-delete/{id}', 'AdminController@editorialDelete')->name('admin.editorial-delete');
Route::post('admin/post/editorial-update/{id}', 'AdminController@editorialUpdate')->name('admin.editorial-update');


Route::post('admin/post/mitra-insert', 'AdminController@mitraInsert')->name('admin.mitra-insert');
Route::post('admin/post/mitra-publish/{id}', 'AdminController@mitraPublish')->name('admin.mitra-publish');
Route::post('admin/post/mitra-delete/{id}', 'AdminController@mitraDelete')->name('admin.mitra-delete');
Route::post('admin/post/mitra-update/{id}', 'AdminController@mitraUpdate')->name('admin.mitra-update');

Route::post('admin/post/caption', 'AdminController@galeriUpdate')->name('admin.ubah-caption');
Route::post('admin/post/galeri-delete/{id}','AdminController@galeriDelete')->name('admin.galeri-delete');

Route::post('admin/post/galeri-insert', 'AdminController@galeriInsert')->name('admin.galeri-insert');

Route::get('search/editorial', 'GuestController@editorialSearch')->name('editorial.search');
Route::get('search/kegiatan', 'GuestController@kegiatanSearch')->name('kegiatan.search');
Route::get('search/mitra', 'GuestController@mitraSearch')->name('mitra.search');

Auth::routes([
  'register' => false, // Registration Routes...
  'reset' => false, // Password Reset Routes...
  'verify' => false, // Email Verification Routes...
]);
