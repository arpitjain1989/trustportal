<?php

use Illuminate\Support\Facades\Route;

/*
|-------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get('/clear', function () {
     Artisan::call('cache:clear');
    return "Cache is cleared";
});






Route::group(['prefix'=>'admin'], function(){
    // Guest Users
    Route::group(['middleware'=>'admin.guest'], function(){
        Route::view('login', 'admin.login')->name('admin.login');
        Route::post('login', [App\Http\Controllers\Admin\AdminController::class, 'login'])->name('admin.auth');
    });

    // Authenticated users
    Route::group(['middleware'=>'admin.auth'], function(){
        // Route::view('home', 'admin.home')->name('admin.home');
        Route::get('home', [App\Http\Controllers\Admin\AdminController::class, 'home'])->name('admin.home');

        Route::get('member-list', [App\Http\Controllers\Admin\AdminController::class, 'member_list'])->name('admin.member-list');
        Route::post('getmember', [App\Http\Controllers\Admin\AdminController::class, 'getmemberbyid'])->name('admin.getmember');
        Route::any('/member/insert_process',[App\Http\Controllers\Admin\AdminController::class, 'InsertMember'])->name('admin.insert_process');
        Route::get('/member/delete/{id}',[App\Http\Controllers\Admin\AdminController::class,'deleteMember']);
        Route::get('/member/view/{id}',[App\Http\Controllers\Admin\AdminController::class,'viewMember']);

        Route::get('feed', [App\Http\Controllers\Admin\AdminController::class, 'feed'])->name('admin.feed');
        Route::get('create-feed', [App\Http\Controllers\Admin\AdminController::class, 'create_feed'])->name('admin.create-feed');
        Route::any('create-feed-process', [App\Http\Controllers\Admin\FeedController::class, 'create_feed_process'])->name('admin.create-feed-process');
        Route::any('edit-feed/{id}', [App\Http\Controllers\Admin\FeedController::class, 'edit_feed']);
        Route::any('edit-feed-process/{id}', [App\Http\Controllers\Admin\FeedController::class, 'edit_feed_process'])->name('admin.edit-feed-process');
        Route::any('delete-feed/{id}', [App\Http\Controllers\Admin\FeedController::class, 'delete_feed']);


        Route::get('moduleview', [App\Http\Controllers\Admin\AdminController::class, 'moduleview'])->name('admin.moduleview');
        Route::get('addsections/{id}', [App\Http\Controllers\Admin\AdminController::class, 'addsections'])->name('admin.addsections');
        Route::post('postsections', [App\Http\Controllers\Admin\AdminController::class, 'postsections'])->name('admin.postsections');
        Route::post('updaterole', [App\Http\Controllers\Admin\AdminController::class, 'updaterole'])->name('admin.updaterole');
        Route::post('supdaterole', [App\Http\Controllers\Admin\AdminController::class, 'supdaterole'])->name('admin.supdaterole');
        Route::post('logout', [App\Http\Controllers\Admin\AdminController::class, 'logout'])->name('admin.logout');
    });
});

