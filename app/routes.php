<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

if(App::environment() == 'local') {
    Route::controller('legacy/sql', 'Legacy\SqlController');
}

Route::get('/article-{articleId}.html', 'ArticleController@articleId');
//Route::get('/product-new-{shopProduct}.html', 'ShopProductController@showProduct');
