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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/index', function () {
    return view('index');
});

Route::get('/user', function () {
    return view('user');
});

Route::get('/partner', function () {
    return view('partner');
});

Route::get('/stock', function () {
    return view('stock');
});

Route::get('/transaksi', function () {
    return view('transaksi');
});

Route::get('/warehouse', function () {
    return view('warehouse');
});

Route::get('/laporan', function () {
    return view('laporan');
});

Route::get('/adduser', function () {
    return view('adduser');
});

Route::get('/input', function () {
    return view('input');
});

Route::get('/purchase', function () {
    return view('purchase');
});

Route::get('/addpurchase', function () {
    return view('addpurchase');
});

Route::get('/listuserpurchase', function () {
    return view('listuserpurchase');
});

Route::get('/listuserwarehouse', function () {
    return view('listuserwarehouse');
});

Route::get('/listusersales', function () {
    return view('listusersales');
});

Route::get('/addpartner', function () {
    return view('addpartner');
});

Route::get('/listpartnersupplier', function () {
    return view('listpartnersupplier');
});

Route::get('/listpartnercostumer', function () {
    return view('listpartnercostumer');
});

Route::get('/sales', function () {
    return view('sales');
});

Route::get('/addsales', function () {
    return view('addsales');
});

Route::get('/listbarangmasuk', function () {
    return view('listbarangmasuk');
});

Route::get('/listbarangmasukdetail', function () {
    return view('listbarangmasukdetail');
});

Route::get('/sidebar', function () {
    return view('sidebar');
});

Route::get('/admin', function () {
    return view('admin');
});