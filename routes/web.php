<?php

// Auth

use App\Http\Controllers\Admin\AdminCategoryController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;

//Admin
use App\Http\Controllers\Admin\AdminDashboardController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\ProductGalleryController;
use App\Http\Controllers\Admin\AdminTransactionController;
use App\Http\Controllers\Admin\DiscountController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\AlamatController;
// Dashboard
use App\Http\Controllers\Dashboard\DashboardController;
use App\Http\Controllers\Dashboard\DashboardProductController;
use App\Http\Controllers\Dashboard\DashboardTransactionController;
use App\Http\Controllers\Dashboard\DashboardSettingController;

use App\Http\Controllers\CommentController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CekOngkirController;
use App\Http\Controllers\CheckoutController;
use App\Http\Controllers\DetailController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\TransactionDetailController;
use Illuminate\Support\Facades\Route;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

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

// Route::get('/', function () {
//     return view('pages.home');
// });



Route::get('/', [HomeController::class, 'index']);

Route::get('/categories', [CategoryController::class, 'index'])->name('categories');
Route::get('/categories/{id}', [CategoryController::class, 'detail'])->name('categories-detail');

Route::get('/details/{id}', [DetailController::class, 'index'])->name('detail');
Route::post('/details/{id}', [DetailController::class, 'add'])->name('detail-add');

Route::get('/register', [RegisterController::class, 'index'])->name('register');
Route::post('/register', [RegisterController::class, 'store']);
Route::get('/register/success', [RegisterController::class, 'success'])->name('register-success');

Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);

//index
Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
//my products
Route::get('/dashboard/products', [DashboardProductController::class, 'index'])->name('dashboard-products');
//product create
Route::get('/dashboard/products/create', [DashboardProductController::class, 'create'])->name('dashboard-products-create');
//product detail
Route::get('/dashboard/products/{id}', [DashboardProductController::class, 'details'])->name('dashboard-products-details');

//transactions
Route::get('/dashboard/transactions', [DashboardTransactionController::class, 'index'])->name('dashboard-transactions');
//transactions detail
Route::get('/dashboard/transactions/{id}', [DashboardTransactionController::class, 'details'])->name('dashboard-transactions-details');

//store setting
Route::get('/dashboard/setting-store', [DashboardSettingController::class, 'settingStore'])->name('dashboard-settings-store');
//account setting
Route::get('/dashboard/setting-account', [DashboardSettingController::class, 'settingAccount'])->name('dashboard-settings-account');

//Ongkir
// Route::get('/cekongkir', [CekOngkirController::class, 'index']);
// Route::get('/cekongkir/province/{id}/cities', [CekOngkirController::class, 'getCities']);
// Route::post('/cekongkir', [CekOngkirController::class, 'submit'])->name('sumbit');

// Auth
Route::group(['middleware' => ['auth']], function() {
    Route::get('/cart', [CartController::class, 'index'])->name('cart');
    Route::delete('/cart/{id}', [CartController::class, 'delete'])->name('cart-delete');
    
    Route::get('/transaction', [TransactionDetailController::class, 'index']);
    Route::get('/transaction/{id}', [TransactionDetailController::class, 'detail']);

    //Checkout
    Route::post('/checkout', [CheckoutController::class, 'process'])->name('checkout');

    //Alamat
    // Route::get('/alamat',[AlamatController::class, 'index']);
    // Route::post('/alamat', [AlamatController::class, 'update']);
    Route::resource('/alamat', AlamatController::class)->except('show', 'create');

    //Comment
    Route::post('/comment', [CommentController::class, 'comment']);
    // Route::get('/countComment/{id}', [CommentController::class, 'countComment']);
    
});
// End Auth

    //callback
    Route::post('/checkout/callback', [CheckoutController::class, 'callback'])->name('midtrans-callback');
    
    Route::get('/success', [CartController::class, 'success'])->name('success');

Route::prefix('admin')
    ->middleware(['auth','admin'])
    ->group(function () {
    Route::get('/', [AdminDashboardController::class, 'index'])->name('admin-dashboard');
    Route::resource('/category', AdminCategoryController::class);
    Route::resource('/user', UserController::class);
    Route::resource('/product', ProductController::class);
    Route::resource('/product-gallery', ProductGalleryController::class);
    Route::resource('/transaction', AdminTransactionController::class);
    Route::resource('/discount', DiscountController::class);
});

