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

Route::model('article_id', 'Article');

Route::get('/article-{article_id}.html', 'ArticleController@showArticle');
/*Route::get('/article-{id}.html', function ($id) {

        $article = Article::find($id);
        var_dump($article); die();
        return View::make('article.base')->with('article', $article);
    }
);
*/
