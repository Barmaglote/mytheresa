<?php
namespace App\Tests\Book;

use App\Repository\BookRepository;
use PHPUnit\Framework\TestCase;
use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class BookFunctionalTest extends WebTestCase
{
    /**
     * @dataProvider urlProvider
     */    
    public function testfindAllPaginated($url)
    {
        $client = self::createClient();
        $client->request('GET', $url);

        $this->assertResponseIsSuccessful();
    }

    public function urlProvider()
    {
        yield ['/'];
        yield ['/?page=2'];
        yield ['/?page=3'];
        yield ['/login'];
    }    
}