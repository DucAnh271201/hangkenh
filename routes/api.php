<?php

use Illuminate\Support\Facades\Route;

Route::middleware('admin')->group(function (){

    Route::prefix('posts')->as('.posts')->group(function () {
        Route::get('datable', [\App\Http\Controllers\API\PostController::class, 'getDatable'])->name('.datable');
        Route::post('/store', [\App\Http\Controllers\API\PostController::class, 'store'])->name('.store');
        Route::post('/update', [\App\Http\Controllers\API\PostController::class, 'update'])->name('.update');
        Route::get('/destroy/{id}', [\App\Http\Controllers\API\PostController::class, 'destroy'])->name('.destroy');
    });
    Route::group(['prefix' => 'categories', 'as' => '.categories'], function () {
        Route::get('/', [\App\Http\Controllers\API\CategoryController::class, 'getCategories']);
        Route::get('datable', [\App\Http\Controllers\API\CategoryController::class, 'getDatable'])->name('.datable');
        Route::post('/', [\App\Http\Controllers\API\CategoryController::class, 'store'])->name('.store');
        Route::post('/update', [\App\Http\Controllers\API\CategoryController::class, 'update'])->name('.update');
        Route::get('/destroy/{id}', [\App\Http\Controllers\API\CategoryController::class, 'destroy'])->name('.destroy');
    });
    Route::group(['prefix' => 'attributes', 'as' => '.attributes'], function () {
        Route::get('/', [\App\Http\Controllers\API\AttributeController::class, 'getAttributes']);
        Route::get('datable', [\App\Http\Controllers\API\AttributeController::class, 'getDatable'])->name('.datable');
        Route::post('/', [\App\Http\Controllers\API\AttributeController::class, 'store'])->name('.store');
        Route::post('/update', [\App\Http\Controllers\API\AttributeController::class, 'update'])->name('.update');
        Route::get('/destroy/{id}', [\App\Http\Controllers\API\AttributeController::class, 'destroy'])->name('.destroy');
    });
    Route::group(['prefix' => 'user-admins', 'as' => '.user-admins'], function () {
        Route::get('/', [\App\Http\Controllers\API\UserAdminController::class, 'getAttributes']);
        Route::get('datable', [\App\Http\Controllers\API\UserAdminController::class, 'getDatable'])->name('.datable');
        Route::post('/', [\App\Http\Controllers\API\UserAdminController::class, 'store'])->name('.store');
        Route::post('/update', [\App\Http\Controllers\API\UserAdminController::class, 'update'])->name('.update');
        Route::get('/destroy/{id}', [\App\Http\Controllers\API\UserAdminController::class, 'destroy'])->name('.destroy');
    });
    Route::group(['prefix' => 'options', 'as' => '.options'], function () {
        Route::post('/', [\App\Http\Controllers\API\OptionController::class, 'store']);
    });
    Route::group(['prefix' => 'menus', 'as' => '.menus'], function () {
        Route::post('/add-custom-menu', [\App\Http\Controllers\API\MenuController::class, 'addCustomMenu'])->name('.add-custom-menu');
        Route::post('/delete-item-menu', [\App\Http\Controllers\API\MenuController::class, 'deleteItemMenu'])->name('.delete-item-menu');
        Route::post('/delete-menug', [\App\Http\Controllers\API\MenuController::class, 'deleteMenug'])->name('.delete-menug');
        Route::post('/create-new-menu', [\App\Http\Controllers\API\MenuController::class, 'createNewMenu'])->name('.create-new-menu');
        Route::post('/generate-menu-control', [\App\Http\Controllers\API\MenuController::class, 'generateMenuControl'])->name('.generate-menu-control');
        Route::post('/update-item', [\App\Http\Controllers\API\MenuController::class, 'updateItem'])->name('.update-item');
    });

    Route::prefix('designers')->as('.designers')->group(function () {
        Route::get('datable', [\App\Http\Controllers\API\DesignerController::class, 'getDatable'])->name('.datable');
        Route::get('design-datable/{id}', [\App\Http\Controllers\API\DesignerController::class, 'getDesignDatable'])->name('.design-datable');
        Route::post('/store', [\App\Http\Controllers\API\DesignerController::class, 'store'])->name('.store');
        Route::post('/update', [\App\Http\Controllers\API\DesignerController::class, 'update'])->name('.update');
        Route::get('/destroy/{id}', [\App\Http\Controllers\API\DesignerController::class, 'destroy'])->name('.destroy');
    });

    Route::prefix('projects')->as('.projects')->group(function () {
        Route::get('datable', [\App\Http\Controllers\API\ProjectController::class, 'getDatable'])->name('.datable');
    });
});