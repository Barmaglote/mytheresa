<?php
namespace App\Tests\Book;

use App\Repository\BookRepository;
use App\Entity\Book;
use PHPUnit\Framework\TestCase;

class BookTest extends TestCase
{
    public function testBookCreate()
    {
        $book = new Book();
        $book->setTitle('Title');
        
        $this->assertEquals('Title', $book->getTitle());
    }
}