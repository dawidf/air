<?php


namespace Air\BlogBundle\Tests\Controller;


use Symfony\Bundle\SecurityBundle\Tests\Functional\WebTestCase;

class PostsController extends WebTestCase{

    public function testIndex()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/');

    }
}