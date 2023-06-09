<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\userController;
use App\Http\Controllers\loginController;
use App\Http\Controllers\addhp;
use App\Http\Controllers\loginAdminController;
use App\Http\Controllers\viewproduct;
use App\Http\Controllers\viewhp;
use Illuminate\Support\Facades\Route;

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


// Route::get('/index', function () {
//     return view('index');
// });

Route::get('/account', function () {
    return view('account');
});

Route::get('/cart', function () {
    return view('cart');
});

Route::get('/wishlist', function () {
    return view('wishlist');
});

Route::get('/checkout', function () {
    return view('checkout');
});

Route::get('/shop', function () {
    return view('shop');
});

Route::get('/shop-page2', function () {
    return view('shop-page2');
});

Route::get('/dashboard', function () {
    return view('dashboard');
});

Route::get('/contact-us', function () {
    return view('contact-us');
});

Route::get('/list-iphone', function () {
    return view('list-iphone');
});

Route::get('/list-oppo', function () {
    return view('list-oppo');
});

Route::get('/list-samsung', function () {
    return view('list-samsung');
});

Route::get('/list-xiaomi', function () {
    return view('list-xiaomi');
});

Route::get('/detail-iphone11', function () {
    return view('detail-iphone11');
});

Route::get('/detail-iphone12', function () {
    return view('detail-iphone12');
});

Route::get('/detail-iphone14', function () {
    return view('detail-iphone14');
});

Route::get('/detail-iphone14pro', function () {
    return view('detail-iphone14pro');
});

Route::get('/detail-oppoA78', function () {
    return view('detail-oppoA78');
});

Route::get('/detail-oppoFindN2', function () {
    return view('detail-oppoFindN2');
});

Route::get('/detail-oppoReno7', function () {
    return view('detail-oppoReno7');
});

Route::get('/detail-samsungA74', function () {
    return view('detail-samsungA74');
});

Route::get('/detail-samsungS23', function () {
    return view('detail-samsungS23');
});

Route::get('/detail-samsungS23+', function () {
    return view('detail-samsungS23+');
});

Route::get('/detail-samsungS23Ultra', function () {
    return view('detail-samsungS23Ultra');
});

Route::get('/detail-xiaomi13', function () {
    return view('detail-xiaomi13');
});

Route::get('/detail-xiaomi13pro', function () {
    return view('detail-xiaomi13pro');
});

Route::get('/detail-samsungA14', function () {
    return view('detail-samsungA14');
});

Route::get('/detail-samsungA54', function () {
    return view('detail-samsungA54');
});

Route::get('/login', [loginController::class,'login'])->name('login');
Route::post('/login', [loginController::class,'loginPost'])->name('loginPost');

Route::get('/register', [loginController::class,'register'])->name('register');
Route::post('/register', [loginController::class,'registerPost'])->name('registerPost');  

Route::get('/index', [userController::class,'index'])->name('index');

Route::middleware('role:user')->group(function() {    
    Route::get('/logout', [loginController::class,'logout'])->name('logout');
});


Route::get('/product', [viewhp::class,'viewproduk'])->name('viewproduk');

Route::get('shop', [userController::class,'detailproduct'])->name('detailproduct');
Route::get('/index', [userController::class,'homeproduct'])->name('index');



//WEB ADMIN
Route::get('/admin',[loginAdminController::class,'registeradmin'])->name('registeradmin');
Route::post('/adminRegister',[loginAdminController::class,'adminRegisterPost'])->name('adminRegisterPost');

Route::get('/loginAdmin',[loginAdminController::class,'login'])->name('adminlogin');
Route::post('/loginAdmin',[loginAdminController::class,'loginAdminPost'])->name('loginAdminPost');

Route::get('/dashboard', [AdminController::class,'dashboard'])->name('dashboard'); 
Route::get('/sales', [AdminController::class,'viewSales'])->name('viewSales');
Route::get('/add product', [addhp::class,'addproduk'])->name('addproduk');
Route::post('/add product', [addhp::class,'addhp'])->name('addhp');
Route::get('/logoutadmin', [loginAdminController::class,'logoutAdmin'])->name('logoutadmin');

Route::get('/payment', function () {
    return view('payment');
});

Route::get('/thankyou', function () {
    return view('thankyou');
})->name('thankyou');

Route::get('/Home', function () {
    return view('Home');
});
