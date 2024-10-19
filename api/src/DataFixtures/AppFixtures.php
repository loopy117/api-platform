<?php
namespace App\DataFixtures;
use App\Story\ListeCategoryStory;
use App\Story\ListeStory;
use App\Story\UserStory;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        // $product = new Product();
        // $manager->persist($product);
		ListeCategoryStory::load();
		UserStory::load();
		ListeStory::load();

        $manager->flush();
    }
}
