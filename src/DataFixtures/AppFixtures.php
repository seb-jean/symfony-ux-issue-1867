<?php

namespace App\DataFixtures;

use App\Factory\BookFactory;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        BookFactory::truncate();

        BookFactory::createMany(20);
    }
}
