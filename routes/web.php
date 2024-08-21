<?php

use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\Frontend\HomeController;
use \App\Http\Controllers\Frontend\ProductController;
use \App\Http\Controllers\Frontend\ArticleController;

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

Route::controller(ProductController::class)->group(function () {
    Route::get('/category', 'category')->name('category');
    Route::get('/product', 'product')->name('product');
    Route::prefix('magazine')->as('magazine')->group(function () {
        Route::get('/', 'magazine')->name('magazine');
        Route::get('detail', 'magazineDetail')->name('magazine.detail');
    });

});

Route::controller(ArticleController::class)->name('article.')->group(function () {
    Route::get('/collection', 'collection')->name('collection');
    Route::get('/collection/detail', 'collectionDetail')->name('collection.detail');
    Route::get('/article', 'index')->name('index');
    Route::get('/article/{slug}', 'detail')->name('detail');
    Route::get('/introduce', 'introduce')->name('introduce');
//    Route::get('/magazine', 'magazine')->name('magazine.index');
//    Route::get('/magazine/{slug}', 'magazineDetail')->name('magazine.detail');
});

Route::controller(HomeController::class)->group(function () {
    Route::get('/knowledge', 'knowledge');
    Route::prefix('about-us')->as('about-us')->group(function () {
        Route::get('team', 'team')->name('team');
        Route::get('designer', 'designer')->name('designer');
    });
    Route::get('/contact', 'contact')->name('contact');
});

Route::get('/',[\App\Http\Controllers\Frontend\PageController::class,'home'])->name('home');

Route::get('/product-category/{slug}',[\App\Http\Controllers\Frontend\PageController::class,'productCategory'])->name('page.product-category');

Route::controller(\App\Http\Controllers\Frontend\ProjectController::class)
    ->prefix('project')
    ->as('fe.project')
    ->group(function() {
    Route::get('/', 'project');
    Route::get('/{slug}', 'projectCate')->name('.category');
    Route::get('/{slug}/{detail}', 'projectDetail')->name('.detail');
//    Route::get('/{slug}', 'projectDetail')->name('.detail');
});

Route::prefix('designer')
    ->controller(\App\Http\Controllers\Frontend\DesignerController::class)
    ->as('fe.designer')
    ->group(function (){
   Route::get('/', 'index')->name('.index');
   Route::get('/{slug}', 'detail')->name('.detail');
});
Route::get('/{any}',[\App\Http\Controllers\Frontend\PageController::class,'page'])->name('page.any');


