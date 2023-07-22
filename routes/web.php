<?php
use App\Http\Controllers\OrderController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\SizeController;
use App\Http\Controllers\ColorController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\SubscribeController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\WebControllers\PageController as WPageController;
use App\Http\Controllers\WebControllers\CartController;
use App\Http\Controllers\WebControllers\WishlistController;
use App\Http\Controllers\WebControllers\ShippingController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\HotdealController;
use App\Http\Controllers\SettingController;
use App\Http\Controllers\AllproductController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\frontendController;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
Route::get('/badmin', [AdminController::class, 'form']);
Route::post('/backend-check', [AdminController::class, 'login']);
Route::get('/logout', [AdminController::class,'logout']);

Route::get('/admin/dashboard', [DashboardController::class, 'dashboard'])->name('profile.edit');

//category
Route::get('/category', [CategoryController::class, 'create'])->name('admin.category');
Route::post('/store-category', [CategoryController::class, 'store']);
Route::get('/all-category', [CategoryController::class, 'index']);
Route::get('/edit-category/{id}', [CategoryController::class, 'edit']);
Route::post('/update-category/{id}', [CategoryController::class, 'update']);
Route::post('/delete-category/{id}', [CategoryController::class, 'destroy']);

//Size-admin
Route::get('/size', [SizeController::class, 'create']);
Route::post('/store-size', [SizeController::class, 'store']);
Route::get('/all-size', [SizeController::class, 'index']);
Route::get('/edit-size/{id}', [SizeController::class, 'edit']);
Route::post('/update-size/{id}', [SizeController::class, 'update']);
Route::post('/delete-size/{id}', [SizeController::class, 'destroy']);
//Color-admin
Route::get('/color', [ColorController::class, 'create']);
Route::post('/store-color', [ColorController::class, 'store']);
Route::get('/all-color', [ColorController::class, 'index'])->name('admin.color');
Route::get('/edit-color/{id}', [ColorController::class, 'edit']);
Route::post('/update-color/{id}', [ColorController::class, 'update']);
Route::post('/delete-color/{id}', [ColorController::class, 'destroy']);

 //product-admin
 Route::get('/product', [ProductController::class, 'create']);
 Route::post('/store-product', [ProductController::class, 'store']);
 Route::get('/all-product', [ProductController::class, 'index']);
 Route::post('/tog-stts', [ProductController::class, 'chng_stts'])->name('status');
 Route::post('/tog-deals', [ProductController::class, 'chng_deals'])->name('deals');
 Route::get('/edit-product/{id}', [ProductController::class, 'edit']);
 Route::post('/update-product/{id}', [ProductController::class, 'update']);
 Route::post('/delete-product/{id}', [ProductController::class, 'destroy']);
   //admin page
   Route::get('/create-page', [PageController::class, 'create_page']);
   Route::post('/store-page', [PageController::class, 'store_page']);
   Route::get('/all-page', [PageController::class, 'index_page'])->name('admin.page');
   Route::get('/edit-page/{id}', [PageController::class, 'edit_page']);
   Route::post('/update-page/{id}', [PageController::class, 'update_page']);
   Route::post('/delete-page/{id}', [PageController::class, 'destroy_page']);
   Route::get('/pages/{pageSlug}', [WPageController::class, 'findPageBySlug']);
   //hotdeal-admin
    Route::get('/hot_deal', [HotdealController::class, 'create']);
    Route::post('/store-hot_deal', [HotdealController::class, 'store']);
    Route::get('/all-hot_deal', [HotdealController::class, 'index'])->name('admin.hotdeal');
    Route::get('/edit-hot_deal/{id}', [HotdealController::class, 'edit']);
    Route::post('/update-hot_deal/{id}', [HotdealController::class, 'update']);
    Route::post('/delete-hot_deal/{id}', [HotdealController::class, 'destroy']);

        //order admin
        Route::get('/orders', [OrderController::class, 'index'])->name('list');
        //admin setting
        Route::get('/all-setting', [SettingController::class, 'index'])->name('admin.setting');
        Route::post('/update-setting', [SettingController::class, 'update'])->name('admin.update.setting');

        Route::get('/order-synced/{id}', [OrderController::class, 'sync']);
        Route::get('/order-update/{id}', [OrderController::class, 'update']);
        Route::get('/order-remove/{id}', [OrderController::class, 'cancel']);

        //subscribe
        Route::get('/subscribe', [AdminController::class, 'subscribe']);



//frontend
Route::get('/', [UserController::class, 'home']);
