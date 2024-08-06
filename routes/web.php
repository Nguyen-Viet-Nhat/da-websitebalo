<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Client\ClienController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\AuthenticationController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Client\SearchProductController;
use App\Http\Controllers\Client\FilterProductController;



// ClientController
Route::group(['prefix' => 'client', 'as' => 'client.'], function () {

    Route::get('/', [ClienController::class, 'viewClient'])->name('viewClient');

    Route::get('/', [ClienController::class, 'viewProducts'])->name('viewProducts');

    // SearchProductController
    Route::get('search', [SearchProductController::class, 'searchProducts'])->name('searchProducts');

    // FilterProductController
    Route::get('filter', [FilterProductController::class, 'filterProducts'])->name('filterProducts');

    // AuthenticationController
    Route::get('login', [AuthenticationController::class, 'loginUsers'])->name('loginUsers');

    Route::post('login', [AuthenticationController::class, 'postLoginUsers'])->name('postLoginUsers');

    Route::get('register', [AuthenticationController::class, 'registerUsers'])->name('registerUsers');

    Route::post('register', [AuthenticationController::class, 'postRegisterUsers'])->name('postRegisterUsers');

    Route::get('logout', [AuthenticationController::class, 'logoutUsers'])->name('logoutUsers');

    Route::get('resetpassword', [AuthenticationController::class, 'resetpasswordUsers'])->name('resetpasswordUsers');

});


// AdminController
Route::group(['prefix' => 'admin', 'as' => 'admin.'], function () {
    Route::group(['prefix' => 'products', 'as' => 'products.'], function () {

        // ProductController
        Route::get('/', [ProductController::class, 'listProducts'])->name('listProducts');

        Route::get('add-product', [ProductController::class, 'addProducts'])->name('addProducts');

        Route::post('add-product', [ProductController::class, 'addPostProducts'])->name('addPostProducts');

        Route::delete('delete-product', [ProductController::class, 'deleteProducts'])->name('deleteProducts');

        Route::get('detail-product/{idProduct}', [ProductController::class, 'detailProducts'])->name('detailProducts');

        Route::get('edit-product/{idProduct}', [ProductController::class, 'editProducts'])->name('editProducts');

        Route::patch('edit-product/{idProduct}', [ProductController::class, 'editPatchProducts'])->name('editPatchProducts');

    });

    Route::group(['prefix' => 'users', 'as' => 'users.'], function () {

        // UserController
        Route::get('/', [UserController::class, 'listUsers'])->name('listUsers');

        Route::get('add-user', [UserController::class, 'addUsers'])->name('addUsers');

        Route::post('add-user', [UserController::class, 'addPostUsers'])->name('addPostUsers');

        Route::delete('delete-user', [UserController::class, 'deleteUsers'])->name('deleteUsers');

        Route::get('detail-user/{idUser}', [UserController::class, 'detailUsers'])->name('detailUsers');

        Route::get('edit-user/{idUser}', [UserController::class, 'editUsers'])->name('editUsers');

        Route::patch('edit-user/{idUser}', [UserController::class, 'editPatchUsers'])->name('editPatchUsers');

    });

    Route::group(['prefix' => 'category', 'as' => 'category.'], function () {

        // CategoryController
        Route::get('/', [CategoryController::class, 'listCategory'])->name('listCategory');

        Route::get('add-category', [CategoryController::class, 'addCategory'])->name('addCategory');

        Route::post('add-category', [CategoryController::class, 'addPostCategory'])->name('addPostCategory');

        Route::delete('delete-category', [CategoryController::class, 'deleteCategory'])->name('deleteCategory');

        Route::get('detail-category/{idCategory}', [CategoryController::class, 'detailCategory'])->name('detailCategory');

        Route::get('edit-category/{idCategory}', [CategoryController::class, 'editCategory'])->name('editCategory');

        Route::patch('edit-category/{idCategory}', [CategoryController::class, 'editPatchCategory'])->name('editPatchCategory');

    });
});
