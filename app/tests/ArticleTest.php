<?php

class ArticleTest extends TestCase
{

    public function testShowArticle()
    {

        $url = action('BaseController@showArticle', array(1));
        $crawler = $this->client->request('GET', $url);

        $this->assertResponseOk();
        $this->assertContains('Первая', $crawler->filter('div.title')->text());
    }
}