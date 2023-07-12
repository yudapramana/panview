<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Http\Request;

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
            'title' => 'Contact - Pandan View Mandeh',
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
            'title' => 'Gallery Pandan View Mandeh',
            'accountfb' => 'pandanviewmandeh',
            'account' => 'pandanviewmandeh',
            'channel' =>  '@pandanviewmandehofficial4919',
            'galleries' =>  $galleries,
            'filterTags' =>  $filterTags,
        ]);
    });

    Route::get('/aboutus', function () {

        return view('landing.aboutus', [
            'title' => 'Pandan View Mandeh - About Us',
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
            'title' => 'Pandan View Mandeh - Semua Layanan',
            'accountfb' => 'pandanviewmandeh',
            'account' => 'pandanviewmandeh',
            'channel' =>  '@pandanviewmandehofficial4919',
            'services' =>  $services
        ]);
    });

    Route::get('/blog', function (Request $request) {

        if ($request->has('search')) {
            $search = $request->input('search');
            $posts = \App\Models\Post::where('title', 'LIKE', "%{$search}%")
                ->orWhere('desc', 'LIKE', "%{$search}%")->orderBy('created_at', 'DESC')->paginate(2);
        } elseif ($request->has('category')) {
            $search = $request->input('category');
            $posts = \App\Models\Post::whereHas('category', function($q) use($search) {
                $q->where('slug', $search);
            })->orderBy('created_at', 'DESC')->paginate(2);
        } elseif ($request->has('tag')) {
            $search = $request->input('tag');
            $posts = \App\Models\Post::whereHas('tags', function($q) use($search) {
                $q->where('slug', $search);
            })->orderBy('created_at', 'DESC')->paginate(2);
        }else {
            $posts = \App\Models\Post::orderBy('created_at', 'DESC')->paginate(2);
        }

        $categories = \App\Models\Category::withCount('posts')->get();
        $tags = \App\Models\Tag::all();

        $recent_posts = \App\Models\Post::take(5)->get();

        return view('landing.blog', [
            'title' => 'Blog Pandan View Mandeh',
            'accountfb' => 'pandanviewmandeh',
            'account' => 'pandanviewmandeh',
            'channel' =>  '@pandanviewmandehofficial4919',
            'categories' =>  $categories,
            'posts' => $posts,
            'recent_posts' => $recent_posts,
            'tags' => $tags
        ]);
    });

    Route::get('post/{slug}', function(Request $request, $slug) {
        $post = \App\Models\Post::where('slug', $slug)->first();

        $cookie_name = (\Str::replace('.','',($request->ip())).'-'. $post->id);

        $cookie = \Cookie::get($cookie_name);
        if($cookie == ''){//check if cookie is set
            $cookie = cookie($cookie_name, '1', 60);//set the cookie
            $post->incrementReadCount();//count the view
        } 

        if($post->showPost()){// this will test if the user viwed the post or not
            // return $post;
        } else {
            \App\Models\PostView::createViewLog($post);
        }

        $categories = \App\Models\Category::withCount('posts')->get();
        $tags = \App\Models\Tag::all();
        $recent_posts = \App\Models\Post::take(5)->get();
        return view('landing.post', [
            'accountfb' => 'pandanviewmandeh',
            'account' => 'pandanviewmandeh',
            'channel' =>  '@pandanviewmandehofficial4919',
            'categories' =>  $categories,
            'recent_posts' => $recent_posts,
            'tags' => $tags,
            'post' => $post
        ])->withCookie($cookie);//store the cookie;

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

Route::get('/testimonies', [\App\Http\Controllers\Admin\TestimonyController::class, 'index'])->name('testimonies.index');
Route::post('/testimonies/store', [\App\Http\Controllers\Admin\TestimonyController::class, 'store']);

Route::get('/messages', [\App\Http\Controllers\Admin\MessageController::class, 'index'])->name('messages.admin.index');


Route::resource('categories', App\Http\Controllers\CategoryController::class);
Route::resource('tags', App\Http\Controllers\TagController::class);
// Manage Posts
Route::get('posts/trash', [App\Http\Controllers\PostController::class, 'trash'])->name('posts.trash');
Route::post('posts/trash/{id}/restore', [App\Http\Controllers\PostController::class, 'restore'])->name('posts.restore');
Route::delete('posts/{id}/delete-permanent', [App\Http\Controllers\PostController::class, 'deletePermanent'])->name('posts.deletePermanent');
Route::resource('posts', App\Http\Controllers\PostController::class);
Route::post('ckeditor/upload', 'CKEditorController@upload')->name('ckeditor.image-upload');
