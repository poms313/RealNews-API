<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use App\Entity\News;
use DateTime;

class NewsFixture extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $news = new News();
        $news->setTitle('test');
        $news->setLink('test');
        $news->setResume('test');
        $news->setPublicationDate(new DateTime());
        $manager->persist($news);
        $manager->flush();
    }
}
