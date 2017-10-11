<?php

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

Route::get('/', 'IndexController@index')->name('home');
Route::get('/article/{page}', 'PageController@article')->name('article')->where('page', '[0-9]+');;
Route::get('/page/{page}', 'PageController@page')->name('page')->where('page', '[0-9]+');;
Route::get('/category/{category}', 'IndexController@category')->name('category')->where('category', '[0-9]+');;
Route::get('/tag/{tag}', 'IndexController@tag')->name('tag')->where('tag', '[0-9]+');;

Route::prefix('admin')->group(function () {
    // 在 "App\Http\Controllers\Admin" 命名空间下的控制器
    Route::namespace('Admin')->group(function () {
        Route::get('/', 'IndexController@index')->name('adminHome');
        // link
        Route::get('/link/', 'LinkController@index')->name('adminLinkList');
        Route::get('/link/create', 'LinkController@create')->name('adminLinkCreate');
        Route::post('/link/create', 'LinkController@save')->name('adminLinkSave');
        Route::get('/link/{link}/edit', 'LinkController@edit')->name('adminLinkEdit');
        Route::post('/link/{link}/edit', 'LinkController@update')->name('adminLinkUpdate');
        Route::get('/link/{link}/delete', 'LinkController@delete')->name('adminLinkDelete');
        // option
        Route::get('/option/', 'OptionController@index')->name('adminOptionList');
        Route::post('/option/', 'OptionController@save')->name('adminOptionSave');
        // category
        Route::get('/category/', 'CategoryController@index')->name('adminCategoryList');
        Route::get('/category/create', 'CategoryController@create')->name('adminCategoryCreate');
        Route::post('/category/create', 'CategoryController@save')->name('adminCategorySave');
        Route::get('/category/{category}/edit', 'CategoryController@edit')->name('adminCategoryEdit');
        Route::post('/category/{category}/edit', 'CategoryController@update')->name('adminCategoryUpdate');
        Route::get('/category/{category}/delete', 'CategoryController@delete')->name('adminCategoryDelete');
        // page
        Route::get('/page/', 'PageController@index')->name('adminPageList');
        Route::get('/page/create', 'PageController@create')->name('adminPageCreate');
        Route::post('/page/create', 'PageController@save')->name('adminPageSave');
        Route::get('/page/{page}/edit', 'PageController@edit')->name('adminPageEdit');
        Route::post('/page/{page}/edit', 'PageController@update')->name('adminPageUpdate');
        Route::get('/page/{page}/delete', 'PageController@delete')->name('adminPageDelete');
        // page
        Route::get('/article/', 'ArticleController@index')->name('adminArticleList');
        Route::get('/article/create', 'ArticleController@create')->name('adminArticleCreate');
        Route::post('/article/create', 'ArticleController@save')->name('adminArticleSave');
        Route::get('/article/{page}/edit', 'ArticleController@edit')->name('adminArticleEdit');
        Route::post('/article/{page}/edit', 'ArticleController@update')->name('adminArticleUpdate');
        Route::get('/article/{page}/delete', 'ArticleController@delete')->name('adminArticleDelete');
    });

    Route::get('/login', 'Auth\LoginController@showLoginForm')->name('login');
    Route::post('/login', 'Auth\LoginController@login');
    Route::get('/logout', 'Auth\LoginController@logout')->name('logout');
    // 上传图片
    Route::get('/upload/image/parameters/{length?}', 'UploadController@qiniuImageParams')->name('getQiniuUploadImageParams');
});
