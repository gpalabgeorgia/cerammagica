<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\SectionController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::prefix('/admin')->namespace('Admin')->group(function() {

    Route::match(['get', 'post'],'/', [AdminController::class, 'login']);

    Route::group(['middleware'=>['admin']], function() {

        Route::get('dashboard', [AdminController::class, 'dashboard']);

        Route::get('settings', [AdminController::class, 'settings']);

        Route::get('logout', [AdminController::class, 'logout']);

        Route::post('check-current-pwd', [AdminController::class, 'chkCurrentPassword']);

        Route::post('update-current-pwd', [AdminController::class, 'updateCurrentPassword']);

        Route::match(['get', 'post'], 'update-admin-details', [AdminController::class, 'updateAdminDetails']);

        // Sections
        Route::get('sections', [SectionController::class, 'sections']);
        Route::post('update-section-status', [SectionController::class, 'updateSectionStatus']);

        // Categories
        Route::get('categories', [CategoryController::class, 'categories']);
        Route::post('update-category-status', [CategoryController::class, 'updateCategoryStatus']);
        Route::match(['get', 'post'], 'add-edit-category/{id?}', [CategoryController::class, 'addEditController']);
        Route::post('append-categories-level', [CategoryController::class, 'appendCategoryLevel']);
    });

});
