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
use App\Http\Controllers\sanphamcontroller;
use App\Http\Controllers\loaispcontroller;
use App\Http\Controllers\khachhangcontroller;
use App\Http\Controllers\billsbancontroller;
use App\Http\Controllers\nhacungcapcontroller;

Route::get('/', function () {
    return view('sanphamus');
});
Route::get('/login', function () {
    return view('user.login');
});
Route::get('/dangky', function () {
    return view('user.register');
});
Route::get('/admin/welcome', function () {
    return view('welcome');
});

Route::get('/cart', function () {
    return view('user.cart');
});
Route::get('/payment', function () {
    return view('user.payment');
});

Route::get('/detail', function () {
    return view('detailsp');
});
Route::get('/productbycate', function () {
    return view('productbycate');   
});
Route::get('/view', function () {
    return view('home');
});
Route::get('/view', function () {
    return view('includes.home'); 
    //neu home nam trong includes trong view
});
Route::get('/admin/products', function () {
    return view('admin.sanpham'); 
    //neu home nam trong includes trong view
});
Route::get('/admin/categories', function () {
    return view('admin.loaisp'); 
    //neu home nam trong includes trong view
});
Route::get('/admin/supplier', function () {
    return view('admin.nhacungcap'); 
    //neu home nam trong includes trong view
});
Route::get('/admin/staff', function () {
    return view('admin.nhanvien'); 
});
Route::get('/admin/customer', function () {
    return view('admin.khachhang'); 
});
Route::get('/admin/bills', function () {
    return view('admin.billsban'); 
});
Route::get('/admin/news', function () {
    return view('admin.news'); 
});
Route::get('/admin/billsnhap', function () {
    return view('admin.billsnhap'); 
});
Route::get('/admin/slides', function () {
    return view('admin.slide'); 
});
Route::get('/admin/userss', function () {
    return view('admin.users'); 
});
Route::get('/admin', function () {
    return view('_layout_admin');
});
Route::get('/done', function () {
    return view('done');
});
Route::get('/blog', function () {
    return view('blog');
});

//sản phẩm
Route::get('/admin/sanpham',[sanphamcontroller::class,'index']);
Route::get('/admin/sanpham/{id}/show',[sanphamcontroller::class,'show']);
Route::get('/admin/sanpham/{id}/delete',[sanphamcontroller::class,'destroy']);
Route::post('/admin/sanpham/update',[sanphamcontroller::class,'update']);
Route::post('/admin/sanpham/create',[sanphamcontroller::class,'create']);
Route::get('/admin/sanpham/show2',[sanphamcontroller::class,'show2']);

// Loai san pham
Route::get('/admin/loaisp',[loaispcontroller::class,'index']);
Route::get('/admin/loaisp/{id}/show',[loaispcontroller::class,'show']);
Route::get('/admin/loaisp/{id}/delete',[loaispcontroller::class,'destroy']);
Route::post('/admin/loaisp/update',[loaispcontroller::class,'update']);
// bills bnas
Route::get('/admin/billsban',[billsbancontroller::class,'index']);
Route::get('/admin/billsban/{id}/show',[billsbancontroller::class,'show']);
Route::get('/admin/billsban/{id}/delete',[billsbancontroller::class,'destroy']);
Route::post('/admin/billsban/update',[billsbancontroller::class,'update']);
// khanh hàng 
Route::get('/admin/khachhang',[khachhangcontroller::class,'index']);
Route::get('/admin/khachhang/{id}/show',[khachhangcontroller::class,'show']);
Route::get('/admin/khachhang/{id}/delete',[khachhangcontroller::class,'destroy']);
Route::post('/admin/khachhang/update',[khachhangcontroller::class,'update']);
