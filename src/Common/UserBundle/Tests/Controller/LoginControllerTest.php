<?php

namespace Common\UserBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class LoginControllerControllerTest extends WebTestCase
{
    public function testLogin()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/');

        $form = $crawler->selectButton('login[save]')->form();
        $form['login[username]'] = 'macq';
        $form['login[password]'] = '123';

        $crawler = $client->submit($form);
    }


}
