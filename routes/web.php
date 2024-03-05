<?php

use Illuminate\Support\Facades\Route;


use App\Http\Controllers\backend\ServiceController;
use App\Http\Controllers\backend\PageController;
use App\Http\Controllers\backend\SliderController;
use App\Http\Controllers\backend\BackendController;
use App\Http\Controllers\backend\SettingController;
use App\Http\Controllers\frontend\FrontendController;
use Illuminate\Support\Facades\Auth;
Use App\Http\Controllers\ContactController;


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
//     return view('frontend.index');
// });

/*
==========================
 Frontend Routes
============================
*/

Route::get('/', [FrontendController::class, 'index'])->name('frontend.index');
// Route::get('/about-us/{id}', [FrontendController::class, 'aboutUs'])->name('frontend.about-us');

Route::get('/about-us', [FrontendController::class, 'aboutUs'])->name('frontend.about-us');
Route::get('/terms-conditions', [FrontendController::class, 'TermsCondition'])->name('frontend.terms-conditions');

Route::get('/contact-us', [FrontendController::class, 'contact'])->name('frontend.contact-us');
Route::get('/our-service', [FrontendController::class, 'service'])->name('frontend.our-service');
Route::get('/portfolio', [FrontendController::class, 'portfolio'])->name('frontend.portfolio');
Route::get('/portfolio/pos', [FrontendController::class, 'pos'])->name('frontend.portfolio.pos');
Route::get('/portfolio/aeon', [FrontendController::class, 'aeon'])->name('frontend.portfolio.aeon');
Route::get('/portfolio/misi', [FrontendController::class, 'misi'])->name('frontend.portfolio.misi');
Route::get('/portfolio/shob-khobor', [FrontendController::class, 'shobKhobor'])->name('frontend.portfolio.shob-khobor');
Route::get('/portfolio/stay-connected', [FrontendController::class, 'StayConnected'])->name('frontend.portfolio.stay-connected');
Route::get('/portfolio/de-was', [FrontendController::class, 'deWas'])->name('frontend.portfolio.de-was');
Route::get('/portfolio/book-exchanger', [FrontendController::class, 'bookExchanger'])->name('frontend.portfolio.book-exchanger');
Route::get('/portfolio/de-shopper', [FrontendController::class, 'deShopper'])->name('frontend.portfolio.de-shopper');

Route::get('/our-service/software-development', [FrontendController::class, 'softwareDevelopment'])->name('frontend.our-service.software-development');
Route::get('/our-service/mobile-development', [FrontendController::class, 'mobileAppDevelopment'])->name('frontend.our-service.mobile-development');
Route::get('/our-service/software-services', [FrontendController::class, 'softwareServices'])->name('frontend.our-service.software-services');
Route::get('/our-service/webdesign-development', [FrontendController::class, 'webDesignDevelopment'])->name('frontend.our-service.webdesign-development');
Route::get('/our-service/search-engine-optimization', [FrontendController::class, 'searchEngineOptimization'])->name('frontend.our-service.search-engine-optimization');
Route::get('/our-service/digital-marketing', [FrontendController::class, 'digitalMarketing'])->name('frontend.our-service.digital-marketing');



// Route::group(['middleware' => 'backend'], function () {
Route::group(['middleware' =>['auth']], function(){

    /*
==========================
 Backend Routes
============================
*/

//Route::get('/admin', [BackendController::class, 'index'])->name('backend.index');

/*
==========================
 Slider Routes
============================
*/

Route::get('/slider/index', [SliderController::class, 'index'])->name('slider.index');
Route::get('/slider/create', [SliderController::class, 'create'])->name('slider.create');
Route::post('/slider/store', [SliderController::class, 'store'])->name('slider.store');
Route::get('/slider/edit/{id}', [SliderController::class, 'edit'])->name('slider.edit');
Route::post('/slider/update/{id}', [SliderController::class, 'update'])->name('slider.update');
Route::get('/slider/delete/{id}', [SliderController::class, 'destroy'])->name('slider.delete');

/*
==========================
 Service Routes
============================
*/
Route::get('/service/index', [ServiceController::class, 'index'])->name('service.index');
Route::get('/service/create', [ServiceController::class, 'create'])->name('service.create');
Route::post('/service/store', [ServiceController::class, 'store'])->name('service.store');
Route::get('/service/edit/{id}', [ServiceController::class, 'edit'])->name('service.edit');
Route::post('/service/update/{id}', [ServiceController::class, 'update'])->name('service.update');
Route::get('/service/delete/{id}', [ServiceController::class, 'destroy'])->name('service.delete');

/*
==========================
 Pages Routes
============================
*/
Route::get('/page/index', [PageController::class, 'page'])->name('page.index');
Route::get('/page/create', [PageController::class, 'create'])->name('page.create');
Route::get('/page/edit/{id}', [PageController::class, 'edit'])->name('page.edit');
Route::post('/page/update/{id}', [PageController::class, 'update'])->name('page.update');
Route::post('/page/store', [PageController::class, 'store'])->name('page.store');

/*
==========================
 Settings Routes
============================
*/
Route::get('setting/index', [SettingController::class, 'index'])->name('setting.index');
Route::post('setting/update', [SettingController::class, 'update'])->name('setting.update');

/*
==========================
Contact Routes
============================
*/
Route::resource('contacts', ContactController::class);
});



/*
==========================
 About Routes
============================
*/

Route::get('/about', function () {
    return view('frontend.page.about');
})->name('about');

// Auth::routes(['home' => 'App\Http\Controllers\backend\BackendController@index']);

// // Logout Route
// Route::post('/logout', [App\Http\Controllers\Auth\LoginController::class, 'logout'])->name('logout');

Auth::routes();

Route::get('/admin', [App\Http\Controllers\HomeController::class, 'index'])->name('backend.index');

// Logout Route
Route::post('/logout', [App\Http\Controllers\Auth\LoginController::class, 'logout'])->name('logout');

