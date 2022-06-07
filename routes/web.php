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

Route::get('/', [\App\Http\Controllers\ContentController::class, 'index'])->name('index');

Route::get('/services', [\App\Http\Controllers\JobController::class, 'services'])->name('services');
Route::get('/worker', [\App\Http\Controllers\JobController::class, 'worker'])->name('worker');
Route::get('/product/{id}', [\App\Http\Controllers\JobController::class, 'product'])->name('product');
Route::get('/category/{id}', [App\Http\Controllers\JobController::class, 'category'])->name('category');
Route::get('/checkout', [\App\Http\Controllers\ContentController::class, 'checkout'])->name('checkout');
Route::get('/contact', [\App\Http\Controllers\ContentController::class, 'contact'])->name('contact');
Route::get('/account', [App\Http\Controllers\ContentController::class, 'account'])->name('account');
Route::post('/send_contact', [\App\Http\Controllers\ContentController::class, 'send_contact']);
Route::get('/task', [\App\Http\Controllers\ContentController::class, 'task'])->name('tasks');
Route::post('/post_job', [\App\Http\Controllers\JobController::class, 'post_job']);
Route::get('/workers/{id}', [\App\Http\Controllers\ContentController::class, 'workers'])->name('workers');
Route::post('/subscribe', [\App\Http\Controllers\ContentController::class, 'subscribe']);
Route::get('/blog', [\App\Http\Controllers\BlogController::class, 'blog'])->name('blog');
Route::get('/blog-single/{title}', [\App\Http\Controllers\BlogController::class, 'blogDetail'])->name('blogDetail');
Route::get('/become_worker', [\App\Http\Controllers\ContentController::class, 'become_worker'])->name('become_worker');
Route::post('/become', [\App\Http\Controllers\ContentController::class, 'become']);
Auth::routes();
Route::get('/billing', [\App\Http\Controllers\JobController::class, 'billing'])->name('billing');
Route::get('/about', [App\Http\Controllers\ContentController::class, 'about'])->name('about');
Route::get('/home', [App\Http\Controllers\ContentController::class, 'index'])->name('home');
Route::get('/admin', [\App\Http\Controllers\AdminController::class, 'admin'])->name('admin');
Route::get('/search', [\App\Http\Controllers\JobController::class, 'search'])->name('search');
Route::get('/admin/messages', [App\Http\Controllers\AdminController::class, 'messages'])->name('messages');
Route::get('/admin/create_post', [App\Http\Controllers\AdminController::class, 'create_post'])->name('create_post');
Route::get('/admin/create_workers', [App\Http\Controllers\AdminController::class, 'create_workers'])->name('create_workers');
Route::post('/upload_worker', [\App\Http\Controllers\AdminController::class, 'upload_worker']);
Route::post('/upload_category', [\App\Http\Controllers\AdminController::class, 'upload_category']);
Route::post('/job_post', [\App\Http\Controllers\AdminController::class, 'job_post']);
Route::get('/admin/view_jobs', [\App\Http\Controllers\AdminController::class, 'view_jobs'])->name('view_jobs');
Route::get('/admin/view_workers', [\App\Http\Controllers\AdminController::class, 'view_workers'])->name('view_workers');
Route::get('/admin/categories', [\App\Http\Controllers\AdminController::class, 'categories'])->name('categories');
Route::get('/admin/blogs', [\App\Http\Controllers\AdminController::class, 'blogs'])->name('blogs');
Route::get('/admin/create_blog', [\App\Http\Controllers\AdminController::class, 'create_blog'])->name('create_blog');
Route::post('/blogPost', [\App\Http\Controllers\AdminController::class, 'blogPost']);