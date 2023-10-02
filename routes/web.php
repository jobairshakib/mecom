<?php
namespace App\Http\Controllers;
use App\Http\Controllers\BrandController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\VendorController;
use App\Http\Controllers\SliderController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProfileController;
use App\Http\Middleware\RedirectIfAuthenticated;
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

Route::middleware(['auth','role:admin'])->group(function (){
    Route::get('/admin/dashboard/',[AdminController::class,'adminDashboard'])->name('admin.Dashboard');

    Route::get('/admin/logout',[AdminController::class,'adminDestroy'])->name('admin.logout');

    Route::get('/admin/profile',[AdminController::class,'adminProfile'])->name('admin.profile');
    Route::post('/admin/profile/store',[AdminController::class,'adminProfileStore'])->name('admin.profile.store');

    Route::resource('brands',BrandController::class);
    Route::resource('categories',CategoryController::class);
    Route::resource('sliders',SliderController::class);
    Route::resource('products',ProductController::class);
});

Route::get('/admin/login',[AdminController::class,'AdminLogin'])->middleware(RedirectIfAuthenticated :: class);
Route::get('/vendor/login',[AdminController::class,'VendorLogin'])->middleware(RedirectIfAuthenticated :: class);

Route::middleware(['auth','role:vendor'])->group(function (){

    Route::get('/vendor/dashboard/',[VendorController::class,'vendorDashboard'])->name('vendor.Dashboard');

});


Route::get('/', function () {
    return view('frontend.index');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/product/inactive/{id}',[ProductController::class,'ProductInactive'])->name('product.inactive');
Route::get('/product/active/{id}',[ProductController::class,'ProductActive'])->name('product.active');



require __DIR__.'/auth.php';
