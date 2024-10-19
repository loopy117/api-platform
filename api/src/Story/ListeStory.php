<?php

namespace App\Story;
use App\Factory\ListeFactory;
use App\Factory\ListeCategoryFactory;
use App\Factory\UserFactory;
use Zenstruck\Foundry\Story;

final class ListeStory extends Story
{
    public function build(): void
    {
		ListeFactory::createMany(50,
		function() { // note the callback - this ensures that each of the 5 comments has a different Post
        return ['category' => ListeCategoryFactory::random(),
		'owner'=> UserFactory::random()]; // each comment set to a random Post from those already in the database
    });
    }
}
