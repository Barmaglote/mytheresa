<?php

namespace App\DataFixtures;

use App\Entity\Book;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        for ($i = 0; $i < 200; $i++) {
            $book = new Book();
            $book->setTitle('Book '.mt_rand(10000, 90000));
            $book->setAuthor('Author '.mt_rand(10000, 90000));
            $book->setStatus(mt_rand(1, 100) < 90);
            $book->setCover(mt_rand(1000, 2000).'.png');
            $manager->persist($book);
        }

        $manager->flush();
    }
}
