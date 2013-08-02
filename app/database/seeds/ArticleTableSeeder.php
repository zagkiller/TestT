<?php


class ArticleTableSeeder extends Seeder {
    public function run()
    {
        Article::truncate();
        Article::create(array(
            'article_id' => '1',
            'author_id' => '666136',
            'title' => 'dsa fads fa70454411',
            'text' => 'ad fgads 0gfasdg dfa dasf asdf asd fasdf asd f',
        ));
    }
}
