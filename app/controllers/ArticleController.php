<?php

class ArticleController extends BaseController{

    protected $layout = 'article.base';

    public function showArticle(article $article)
    {
        var_dump($article,111);
        $this->layout->content = View::make('article.show')->with('article', $article);
    }

}