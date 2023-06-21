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

        return view('landing.gallery', [
            'accountfb' => 'pandanviewmandeh',
            'account' => 'pandanviewmandeh',
            'channel' =>  '@pandanviewmandehofficial4919'
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
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\Admin\HomeController::class, 'index'])->name('admin.home');

Route::get('/services', [\App\Http\Controllers\Admin\ServicesController::class, 'index'])->name('services.index');
Route::post('/services/store', [\App\Http\Controllers\Admin\ServicesController::class, 'store']);

Route::get('/products', [\App\Http\Controllers\Admin\ProductController::class, 'index'])->name('products.index');
Route::post('/products/store', [\App\Http\Controllers\Admin\ProductController::class, 'store']);