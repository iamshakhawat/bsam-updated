<?php

use App\Http\Controllers\DeliveryController;
use App\Models\DeliveryProcess;
use Illuminate\Support\Facades\Auth;

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

// CACHE CLEAR ROUTE
Route::get('cache-clear', function () {
    \Illuminate\Support\Facades\Artisan::call('optimize:clear');
    session()->flash('success', 'Successfully cache cleared.');
    return redirect()->back();
})->name('cache.clear');


// STORAGE LINKED ROUTE
Route::get('storage-link', [\App\Http\Controllers\AdminController::class, 'storageLink'])->name('storage.link');


Auth::routes(['register' => false]);

Route::get('user/login', 'FrontendController@login')->name('login.form');
Route::post('user/login', 'FrontendController@loginSubmit')->name('login.submit');
Route::get('user/logout', 'FrontendController@logout')->name('user.logout');

Route::get('user/register', 'FrontendController@register')->name('register.form');
Route::post('user/register', 'FrontendController@registerSubmit')->name('register.submit');
// Reset password
Route::get('/password-reset', 'FrontendController@showResetForm')->name('password.reset');
// Socialite
Route::get('login/{provider}/', 'Auth\LoginController@redirect')->name('login.redirect');
Route::get('login/{provider}/callback/', 'Auth\LoginController@Callback')->name('login.callback');

Route::get('/', 'FrontendController@home')->name('home');

// Frontend Routes
Route::get('/home', 'FrontendController@index');
Route::get('/about-us', 'FrontendController@aboutUs')->name('about-us');
Route::get('/contact', 'FrontendController@contact')->name('contact');
Route::post('/contact/message', 'MessageController@store')->name('contact.store');
Route::get('product-detail/{slug}', 'FrontendController@productDetail')->name('product-detail');
Route::post('/product/search', 'FrontendController@productSearch')->name('product.search');
Route::get('/product-cat/{slug}', 'FrontendController@productCat')->name('product-cat');
Route::get('/product-sub-cat/{slug}/{sub_slug}', 'FrontendController@productSubCat')->name('product-sub-cat');
Route::get('/product-brand/{slug}', 'FrontendController@productBrand')->name('product-brand');
// Cart section
Route::get('/add-to-cart/{slug}', 'CartController@addToCart')->name('add-to-cart')->middleware('user');
Route::post('/add-to-cart', 'CartController@singleAddToCart')->name('single-add-to-cart')->middleware('user');
Route::get('cart-delete/{id}', 'CartController@cartDelete')->name('cart-delete');
Route::post('cart-update', 'CartController@cartUpdate')->name('cart.update');

Route::get('/cart', function () {
    return view('frontend.pages.cart');
})->name('cart');
Route::get('/checkout', 'CartController@checkout')->name('checkout')->middleware('user');
// Wishlist
Route::get('/wishlist', function () {
    return view('frontend.pages.wishlist');
})->name('wishlist');
Route::get('/wishlist/{slug}', 'WishlistController@wishlist')->name('add-to-wishlist')->middleware('user');
Route::get('wishlist-delete/{id}', 'WishlistController@wishlistDelete')->name('wishlist-delete');
Route::post('cart/order', 'OrderController@store')->name('cart.order');
Route::get('order/pdf/{id}', 'OrderController@pdf')->name('order.pdf');
Route::get('/income', 'OrderController@incomeChart')->name('product.order.income');
// Route::get('/user/chart','AdminController@userPieChart')->name('user.piechart');
Route::get('/product-grids', 'FrontendController@productGrids')->name('product-grids');
Route::get('/product-lists', 'FrontendController@productLists')->name('product-lists');
Route::match(['get', 'post'], '/filter', 'FrontendController@productFilter')->name('shop.filter');
// Blog
Route::get('/blog', 'FrontendController@blog')->name('blog');
Route::get('/blog-detail/{slug}', 'FrontendController@blogDetail')->name('blog.detail');
Route::get('/blog/search', 'FrontendController@blogSearch')->name('blog.search');
Route::post('/blog/filter', 'FrontendController@blogFilter')->name('blog.filter');
Route::get('blog-cat/{slug}', 'FrontendController@blogByCategory')->name('blog.category');
Route::get('blog-tag/{slug}', 'FrontendController@blogByTag')->name('blog.tag');

// NewsLetter
Route::post('/subscribe', 'FrontendController@subscribe')->name('subscribe');

// Product Review
Route::resource('/review', 'ProductReviewController');
Route::post('product/{slug}/review', 'ProductReviewController@store')->name('review.store');

// Post Comment
Route::post('post/{slug}/comment', 'PostCommentController@store')->name('post-comment.store');
Route::resource('/comment', 'PostCommentController');
// Coupon
Route::post('/coupon-store', 'CouponController@couponStore')->name('coupon-store');
// Payment
Route::get('payment', 'PayPalController@payment')->name('payment');
Route::get('cancel', 'PayPalController@cancel')->name('payment.cancel');
Route::get('payment/success', 'PayPalController@success')->name('payment.success');


// Backend section start

Route::group(['prefix' => '/admin', 'middleware' => ['auth', 'admin']], function () {
    Route::get('/', 'AdminController@index')->name('admin');
    Route::get('/file-manager', function () {
        return view('backend.layouts.file-manager');
    })->name('file-manager');
    // user route
    Route::resource('users', 'UsersController');
    // Banner
    Route::resource('banner', 'BannerController');
    // Brand
    Route::resource('brand', 'BrandController');
    // Profile
    Route::get('/profile', 'AdminController@profile')->name('admin-profile');
    Route::post('/profile/{id}', 'AdminController@profileUpdate')->name('profile-update');
    // Category
    Route::resource('/category', 'CategoryController');
    // Product
    Route::resource('/product', 'ProductController');
    // Ajax for sub category
    Route::post('/category/{id}/child', 'CategoryController@getChildByParent');
    // POST category
    Route::resource('/post-category', 'PostCategoryController');
    // Post tag
    Route::resource('/post-tag', 'PostTagController');
    // Post
    Route::resource('/post', 'PostController');
    // Message
    Route::resource('/message', 'MessageController');
    Route::get('/message/five', 'MessageController@messageFive')->name('messages.five');

    // Order
    Route::resource('/order', 'OrderController');
    // Shipping
    Route::resource('/shipping', 'ShippingController');
    // Coupon
    Route::resource('/coupon', 'CouponController');
    // Settings
    Route::get('settings', 'AdminController@settings')->name('settings');
    Route::post('setting/update', 'AdminController@settingsUpdate')->name('settings.update');

    // Notification
    Route::get('/notification/{id}', 'NotificationController@show')->name('admin.notification');
    Route::get('/notifications', 'NotificationController@index')->name('all.notification');
    Route::delete('/notification/{id}', 'NotificationController@delete')->name('notification.delete');

    // Password Change
    Route::get('/change-password', 'AdminController@changePassword')->name('change.password.form');
    Route::post('change-password', 'AdminController@changPasswordStore')->name('change.password');


    // Delivery Man
    Route::get('/delivery-mans',[DeliveryController::class,'deliverymans'])->name('deliverymans');
    Route::get('/delivery-statictics',[DeliveryController::class,'deliverystatictics'])->name('deliverystatictics');
    Route::get('/add-delivery',[DeliveryController::class,'adddelivery'])->name('adddelivery');
    Route::get('/delivery-in-process',[DeliveryController::class,'deliveryinprocess'])->name('deliveryinprocess');
    Route::post('/choose-deliveryman',[DeliveryController::class,'choosedeliveryman'])->name('deliveryman.choose');
    Route::post('/add-deliveryman-for-delivery',[DeliveryController::class,'adddeliverymanfordelivery'])->name('deliveryman.adddeliveryman');

});


// User section start
Route::group(['prefix' => '/user', 'middleware' => ['user']], function () {
    Route::get('/', 'HomeController@index')->name('user');
    // Profile
    Route::get('/profile', 'HomeController@profile')->name('user-profile');
    Route::post('/profile/{id}', 'HomeController@profileUpdate')->name('user-profile-update');
    //  Order
    Route::get('/order', "HomeController@orderIndex")->name('user.order.index');
    Route::get('/order/show/{id}', "HomeController@orderShow")->name('user.order.show');
    Route::delete('/order/delete/{id}', 'HomeController@userOrderDelete')->name('user.order.delete');
    // Product Review
    Route::get('/user-review', 'HomeController@productReviewIndex')->name('user.productreview.index');
    Route::delete('/user-review/delete/{id}', 'HomeController@productReviewDelete')->name('user.productreview.delete');
    Route::get('/user-review/edit/{id}', 'HomeController@productReviewEdit')->name('user.productreview.edit');
    Route::patch('/user-review/update/{id}', 'HomeController@productReviewUpdate')->name('user.productreview.update');

    // Order Track
    Route::get('/product/track', 'OrderController@orderTrack')->name('order.track');
    Route::post('product/track/order', 'OrderController@productTrackOrder')->name('product.track.order');
    
    // Post comment
    Route::get('user-post/comment', 'HomeController@userComment')->name('user.post-comment.index');
    Route::delete('user-post/comment/delete/{id}', 'HomeController@userCommentDelete')->name('user.post-comment.delete');
    Route::get('user-post/comment/edit/{id}', 'HomeController@userCommentEdit')->name('user.post-comment.edit');
    Route::patch('user-post/comment/udpate/{id}', 'HomeController@userCommentUpdate')->name('user.post-comment.update');

    // Password Change
    Route::get('/change-password', 'HomeController@changePassword')->name('user.change.password.form');
    Route::post('change-password', 'HomeController@changPasswordStore')->name('change.password');
});

Route::group(['prefix' => 'laravel-filemanager', 'middleware' => ['web', 'auth']], function () {
    \UniSharp\LaravelFilemanager\Lfm::routes();
});



//     Route::get('login/google', 'Auth\SocialAuthController@redirectToGoogle');
// Route::get('login/google/callback', 'Auth\SocialAuthController@handleGoogleCallback');

// Route::get('login/facebook', 'Auth\SocialAuthController@redirectToFacebook');
// Route::get('login/facebook/callback', 'Auth\SocialAuthController@handleFacebookCallback');





// Delivery Web Routes

Route::middleware(['auth','delivery'])->prefix('/delivery')->group(function(){
    Route::get('/dashboard',[DeliveryController::class,'dashboard'])->name('delivery.dashboard');
    Route::get('/profile',[DeliveryController::class,'profile'])->name('delivery.profile');
    Route::get('/change-password',[DeliveryController::class,'changepassword'])->name('delivery.changepassword');
    Route::post('/update-password',[DeliveryController::class,'changepasswordPost'])->name('delivery.changepasswordPost');
    Route::get('/delivery-requests',[DeliveryController::class,'DeliveryRequest'])->name('delivery.request');
    Route::get('/delivery-details/{id}',[DeliveryController::class,'Deliverydetails'])->name('delivery.details');
    Route::get('/notifications',[DeliveryController::class,'notifications'])->name('delivery.notifications');
    Route::get('/notification-view/{id}',[DeliveryController::class,'notificationview'])->name('delivery.notificationview');
    Route::get('/notification-delete/{id}',[DeliveryController::class,'notificationdelete'])->name('delivery.notificationdelete');
    Route::post('/change-delivery-state',[DeliveryController::class,'changestate'])->name('delivery.changestate');
    Route::get('/logout',[DeliveryController::class,'logout'])->name('delivery.logout');
});

// Delivery Homepage
Route::get('/delivery-panel',[DeliveryController::class,'deliveryHome'])->name('delivery.home');
Route::get('/delivery/faq',[DeliveryController::class,'faq'])->name('delivery.faq');
Route::get('/delivery/invite',[DeliveryController::class,'invite'])->name('delivery.invite');
Route::get('/delivery/invite-email',[DeliveryController::class,'invite_email'])->name('delivery.invite-email');
Route::get('/delivery/about-us',[DeliveryController::class,'aboutus'])->name('delivery.aboutus');

Route::middleware('guest')->prefix('/delivery')->group(function(){
    Route::get('/login',[DeliveryController::class,'login'])->name('delivery.login');
    Route::post('/login',[DeliveryController::class,'loginPost'])->name('delivery.loginPost');
    Route::get('/register',[DeliveryController::class,'register'])->name('delivery.register');
    Route::post('/register',[DeliveryController::class,'registerPost'])->name('delivery.registerPost');
    
});
