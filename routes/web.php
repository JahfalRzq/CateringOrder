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

// Route::get('/', function () {
//     return view('welcome');
// });

//guest page
// Route::get('/',function(){
//     return view('index'); 
// });
Route::get('/',function(){
    return view('register'); 
});

Route::get('/login',function(){
    return view('login');
});

Route::get('/register',function(){
    return view('register');
});
Route::get('/about-guest',function(){
    return view('about'); 
});
Route::get('/shop',function(){
    return view('shop'); 
});


Route::get('/blog',function(){
    return view('blog'); 
});
Route::get('/blog-detail',function(){
    return view('blog-detail'); 
});
Route::get('/blog-detail-2',function(){
    return view('blog-detail-2'); 
});
Route::get('/blog-detail-3',function(){
    return view('blog-detail-3'); 
});
Route::get('/blog-detail-4',function(){
    return view('blog-detail-4'); 
});
Route::get('/blog-detail-5',function(){
    return view('blog-detail-5'); 
});
Route::get('/blog-detail-6',function(){
    return view('blog-detail-6'); 
});
Route::get('/blog-detail-8',function(){
    return view('blog-detail-8'); 
});
Route::get('/blog-detail-9',function(){
    return view('blog-detail-9'); 
});
Route::get('/product-detail',function(){
    return view('product-detail'); 
});
Route::get('/product-1-1-detail',function(){
    return view('product-1-1-detail'); 
});
Route::get('/product-2-2-detail',function(){
    return view('product-2-2-detail'); 
});
Route::get('/product-1-thumb',function(){
    return view('product-1-thumb'); 
});
Route::get('/product-2-thumb',function(){
    return view('product-2-thumb'); 
});
Route::get('/product-3-thumb',function(){
    return view('product-3-thumb'); 
});
Route::get('/product-4-thumb',function(){
    return view('product-4-thumb'); 
});
Route::get('/product-5-thumb',function(){
    return view('product-5-thumb'); 
});
Route::get('/product-6-thumb',function(){
    return view('product-6-thumb'); 
});
Route::get('/product-7-thumb',function(){
    return view('product-7-thumb'); 
});
Route::get('/product-8-thumb',function(){
    return view('product-8-thumb'); 
});
Route::get('/product-3-1-detail',function(){
    return view('product-3-1-detail'); 
});
Route::get('/product-7-1-detail',function(){
    return view('product-7-1-detail'); 
});

Route::get('/contact',function(){
    return view('contact'); 
});



Route::get('/admin-cms',function(){
    return view('admin-cms'); 
});

//user login
Route::get('/index_user',function(){
    return view('index-user'); 
});


Route::get('/about-user',function(){
    return view('about-user'); 
});
Route::get('/shop-user',function(){
    return view('shop-user'); 
});
Route::get('/cart',function(){
    return view('cart'); 
});
Route::get('/checkout',function(){
    return view('checkout'); 
});
Route::get('/product-detail-user',function(){
    return view('productDetail-user'); 
});
Route::get('/product-detail-user-2',function(){
    return view('productDetail-user-2'); 
});
Route::get('/product-detail-user-3',function(){
    return view('productDetail-user-3'); 
});
Route::get('/product-detail-user-4',function(){
    return view('productDetail-user-4'); 
});
Route::get('/product-detail-user-5',function(){
    return view('productDetail-user-5'); 
});
Route::get('/product-detail-user-6',function(){
    return view('productDetail-user-6'); 
});
Route::get('/product-detail-user-7',function(){
    return view('productDetail-user-7'); 
});
Route::get('/product-detail-user-8',function(){
    return view('productDetail-user-8'); 
});
Route::get('/product-detail-user-9',function(){
    return view('productDetail-user-9'); 
});
Route::get('/product-detail-user-10',function(){
    return view('productDetail-user-10'); 
});
Route::get('/product-detail-user-11',function(){
    return view('productDetail-user-11'); 
});
Route::get('/product-detail-user-12',function(){
    return view('productDetail-user-12'); 
     
});Route::get('/product-detail-user-13',function(){
    return view('productDetail-user-13'); 

});Route::get('/product-detail-user-14',function(){
    return view('productDetail-user-14'); 

});
Route::get('/product-detail-user-15',function(){
    return view('productDetail-user-15'); 

});

Route::get('/product-detail-user-16',function(){
    return view('productDetail-user-16'); 
});

Route::get('/product-detail-user-17',function(){
    return view('productDetail-user-17'); 
});

Route::get('/product-detail-user-18',function(){
    return view('productDetail-user-18'); 
});


Route::get('/blog-user',function(){
    return view('blog-user'); 
});
Route::get('/blogDetail-user',function(){
    return view('blog-detail-user-1'); 
});
Route::get('/blogDetail-user-2',function(){
    return view('blog-detail-user-2'); 
});
Route::get('/blogDetail-user-3',function(){
    return view('blog-detail-user-3'); 
});
Route::get('/blogDetail-user-4',function(){
    return view('blog-detail-user-4'); 
});
Route::get('/blogDetail-user-5',function(){
    return view('blog-detail-user-5'); 
});
Route::get('/blogDetail-user-6',function(){
    return view('blog-detail-user-6'); 
});
Route::get('/blogDetail-user-7',function(){
    return view('blog-detail-user-7'); 
});
Route::get('/blogDetail-user-8',function(){
    return view('blog-detail-user-8'); 
});
Route::get('/blogDetail-user-9',function(){
    return view('blog-detail-user-9'); 
});

Route::get('/contact-user',function(){
    return view('contact-user'); 
});

Route::get('/my-account',function(){
    return view('my-account'); 
});

//route Dashboard admin

Route::get('/admin-dashboard',function(){
    return view('admin-dashboard');

});

//Dashboard Admin




// Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Route::middleware('auth')->group(function () {
//     Route::view('about', 'about')->name('about');

//     Route::get('users', [\App\Http\Controllers\UserController::class, 'index'])->name('users.index');

//     Route::get('profile', [\App\Http\Controllers\ProfileController::class, 'show'])->name('profile.show');
//     Route::put('profile', [\App\Http\Controllers\ProfileController::class, 'update'])->name('profile.update');
// });
