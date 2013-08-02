<?php

class ArticleController extends BaseController
{

    protected $layout = 'article.article_base';

    public function showArticle(Article $article)
    {
        View::share('article', $article);
        return View::make('article.article_base')->with('article', $article);
    }

}