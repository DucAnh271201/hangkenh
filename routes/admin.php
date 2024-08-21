<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('login', [\App\Http\Controllers\Admin\UserAdminController::class, 'getLogin'])->name('login')->middleware('admin_guest');
Route::post('login', [\App\Http\Controllers\Admin\UserAdminController::class, 'postLogin'])->name('login')->middleware('admin_guest');
Route::group(['middleware' => ['admin']], function () {
    Route::get('/403', function (){
        return view('');
    });
});
Route::group(['middleware' => ['admin']], function () {
    Route::get('/', [\App\Http\Controllers\Admin\DashboardController::class, 'index'])->name('dashboard');
    Route::get('/logout', function () {
        Auth::guard('admin')->logout();
        return redirect()->route('admin.login');
    })->name('logout');
    Route::prefix('posts')->as('manager-post')->group(function () {
        Route::get('/', [\App\Http\Controllers\Admin\PostManagerController::class, 'index']);
        Route::get('/create', [\App\Http\Controllers\Admin\PostManagerController::class, 'create'])->name('.create');
        Route::get('/edit/{id}', [\App\Http\Controllers\Admin\PostManagerController::class, 'edit'])->name('.edit');
    });
    Route::prefix('pages')->as('manager-page')->group(function () {
        Route::get('/', [\App\Http\Controllers\Admin\PostPageController::class, 'index']);
        Route::get('/create', [\App\Http\Controllers\Admin\PostPageController::class, 'create'])->name('.create');
        Route::get('/edit/{id}', [\App\Http\Controllers\Admin\PostPageController::class, 'edit'])->name('.edit');
    });
    Route::prefix('categories')->as('manager-category')->group(function () {
        Route::get('/', [\App\Http\Controllers\Admin\PostCategoryController::class, 'index']);
        Route::get('/create', [\App\Http\Controllers\Admin\PostCategoryController::class, 'create'])->name('.create');
        Route::get('/edit/{id}', [\App\Http\Controllers\Admin\PostCategoryController::class, 'edit'])->name('.edit');
    });
    Route::prefix('products')->as('manager-product')->group(function () {
        Route::get('/', [\App\Http\Controllers\Admin\PostProductController::class, 'index']);
        Route::get('/create', [\App\Http\Controllers\Admin\PostProductController::class, 'create'])->name('.create');
        Route::get('/edit/{id}', [\App\Http\Controllers\Admin\PostProductController::class, 'edit'])->name('.edit');
    });
    Route::prefix('attributes')->as('manager-attribute')->group(function () {
        Route::get('/', [\App\Http\Controllers\Admin\AttributeManagerController::class, 'index']);
        Route::get('/create', [\App\Http\Controllers\Admin\AttributeManagerController::class, 'create'])->name('.create');
        Route::get('/edit/{id}', [\App\Http\Controllers\Admin\AttributeManagerController::class, 'edit'])->name('.edit');
    });
    Route::prefix('user-admins')->as('manager-user-admin')->group(function () {
        Route::get('/', [\App\Http\Controllers\Admin\UserAdminController::class, 'index']);
        Route::get('/create', [\App\Http\Controllers\Admin\UserAdminController::class, 'create'])->name('.create');
        Route::get('/edit/{id}', [\App\Http\Controllers\Admin\UserAdminController::class, 'edit'])->name('.edit');
    });
    Route::prefix('options')->as('option')->group(function () {
        Route::get('/', [\App\Http\Controllers\Admin\OptionController::class, 'index']);
    });
    Route::prefix('menus')->as('menu')->group(function () {
        Route::get('/', [\App\Http\Controllers\Admin\MenuController::class, 'index']);
    });
    Route::prefix('medias')->as('media')->group(function () {
        Route::get('/', [\App\Http\Controllers\Admin\MediaController::class, 'index']);
        Route::get('/delete/{id}', [\App\Http\Controllers\Admin\MediaController::class, 'delete'])->name('.delete');
        Route::get('/datable', [\App\Http\Controllers\Admin\MediaController::class, 'getDatatable'])->name('.datable');
        Route::post('/', [\App\Http\Controllers\Admin\MediaController::class, 'store']);
    });

    Route::prefix('designer')->as('manager-designer')->group(function () {
        Route::get('/', [\App\Http\Controllers\Admin\DesignerController::class, 'index']);
        Route::get('/create', [\App\Http\Controllers\Admin\DesignerController::class, 'create'])->name('.create');
        Route::get('/design-list/{author_id}', [\App\Http\Controllers\Admin\DesignerController::class, 'designList'])->name('.design-list');
        Route::get('/design-list/{author_id}/create', [\App\Http\Controllers\Admin\DesignerController::class, 'designCreate'])->name('.design-list.create');
        Route::get('/design-list/{author_id}/edit/{id}', [\App\Http\Controllers\Admin\DesignerController::class, 'designEdit'])->name('.design-list.edit');
        Route::get('/edit/{id}', [\App\Http\Controllers\Admin\DesignerController::class, 'edit'])->name('.edit');
    });

    Route::prefix('designers')->as('manager-project')->group(function () {
        Route::get('/', [\App\Http\Controllers\Admin\ProjectController::class, 'index']);
        Route::get('/create', [\App\Http\Controllers\Admin\ProjectController::class, 'create'])->name('.create');
        Route::get('/edit/{id}', [\App\Http\Controllers\Admin\ProjectController::class, 'edit'])->name('.edit');
    });
});
