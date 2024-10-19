<?php

namespace App\Story;
use App\Factory\ListeCategoryFactory;
use Zenstruck\Foundry\Story;

final class ListeCategoryStory extends Story
{
    public function build(): void
    {
		ListeCategoryFactory::createMany(10,
		    static function(int $i) {
        return ['name' => "Catégorie $i"]; // "Title 1", "Title 2", ... "Title 5"
    });
    }
}
