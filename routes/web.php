<?php

use App\Http\Controllers\Admin\CategoryController;
use app\Http\Controllers\Admin\ProductControllerController;
use app\Http\Controllers\Admin\UsersControllerController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use Illuminate\Tests\Integration\Database\EloquentHasManyThroughTest\Category;

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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/admin/index',[HomeController::class, 'admin'])->name('admin');

//User
Route::get('/admin/users/index',[App\Http\Controllers\Admin\UsersController::class, 'index'])->name('users.index');

//Category
Route::get('/admin/typeproduct/index',[App\Http\Controllers\Admin\CategoryController::class, 'index'])->name('category.index');
Route::get('/admin/typeproduct/create',[CategoryController::class, 'create'])->name('category.create');
Route::post('/admin/typeproduct/insert',[CategoryController::class, 'insert'])->name('category.insert');
Route::get('admin/typeproduct/edit/{id}',[CategoryController::class, 'edit'])->name('category.edit');
Route::get('admin/typeproduct/delete/{id}', [CategoryController::class, 'delete'])->name('category.delete');
Route::post('admin/typeproduct/update/{id}', [CategoryController::class, 'update'])->name('category.update');
//Product
Route::get('/admin/product/index',[App\Http\Controllers\Admin\ProductController::class, 'index'])->name('product.index');