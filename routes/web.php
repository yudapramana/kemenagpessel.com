<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Artisan;
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

Route::get('/migrate-fresh', function () {
    Artisan::call('migrate:fresh', ['--seed' => true]);

    return 'Migration and seeding has been succeed, click <a href="/">here</a> to return to home page';
});

Route::get('/xdown/{view}', function ($view) {
    Artisan::call('down', ['--secret' => 'devmode', '--render' => 'errors.' . $view]);

    return 'Web Down with command view: ' . $view;
});

Route::get('/xup', function () {
    Artisan::call('up');
    return 'Web Up';
});

Route::group(['middleware' => ['web']], function () {
    // your routes here

    Route::get('/visitor', [App\Http\Controllers\Visitor\DashboardController::class, 'index'])->name('visitor.index');

    Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('landing.index');

    Route::get('/contact', function () {
        return view('landing.contact', [
            'accountfb' => 'pandanviewmandeh',
            'account' => 'pandanviewmandeh',
            'channel' =>  '@pandanviewmandehofficial4919'
        ]);
    });

    Route::get('/gallery', function () {

        $galleries = \App\Models\Gallery::all();
        $galleries = $galleries->shuffle();

        $filterTags = $galleries->pluck('filter_tag')->unique();
        return view('landing.gallery', [
            'accountfb' => 'pandanviewmandeh',
            'account' => 'pandanviewmandeh',
            'channel' =>  '@pandanviewmandehofficial4919',
            'galleries' =>  $galleries,
            'filterTags' =>  $filterTags,
        ]);
    });

    Route::get('/aboutus', function () {

        return view('landing.aboutus', [
            'accountfb' => 'pandanviewmandeh',
            'account' => 'pandanviewmandeh',
            'channel' =>  '@pandanviewmandehofficial4919'
        ]);
    });

    Route::get('/service/{slug}', function ($slug) {

        $service = \App\Models\Services::where('slug', $slug)->first();
        $products = \App\Models\Products::where('id_service', $service->id_service)->get();

        return view('landing.service-detail', [
            'accountfb' => 'pandanviewmandeh',
            'account' => 'pandanviewmandeh',
            'channel' =>  '@pandanviewmandehofficial4919',
            'service' =>  $service,
            'products' =>  $products
        ]);
    });

    Route::get('/all-services', function () {
        $services = \App\Models\Services::where('listed', 'yes')->get();

        return view('landing.all-services', [
            'accountfb' => 'pandanviewmandeh',
            'account' => 'pandanviewmandeh',
            'channel' =>  '@pandanviewmandehofficial4919',
            'services' =>  $services
        ]);
    });

    Route::get('/lang/home', [App\Http\Controllers\LangController::class, 'index']);
    Route::get('/lang/change', [App\Http\Controllers\LangController::class, 'change'])->name('changeLang');

    Route::post('/messages/store', [\App\Http\Controllers\Visitor\MessageController::class, 'store'])->name('messages.store');;
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\Admin\HomeController::class, 'index'])->name('admin.home');

Route::get('/services', [\App\Http\Controllers\Admin\ServicesController::class, 'index'])->name('services.index');
Route::post('/services/store', [\App\Http\Controllers\Admin\ServicesController::class, 'store']);

Route::get('/products', [\App\Http\Controllers\Admin\ProductController::class, 'index'])->name('products.index');
Route::post('/products/store', [\App\Http\Controllers\Admin\ProductController::class, 'store']);

Route::get('/galleries', [\App\Http\Controllers\Admin\GalleryController::class, 'index'])->name('galleries.index');
Route::post('/galleries/store', [\App\Http\Controllers\Admin\GalleryController::class, 'store']);

Route::get('/carousels', [\App\Http\Controllers\Admin\CarouselController::class, 'index'])->name('carousels.index');
Route::post('/carousels/store', [\App\Http\Controllers\Admin\CarouselController::class, 'store']);

Route::get('/messages', [\App\Http\Controllers\Admin\MessageController::class, 'index'])->name('messages.admin.index');
