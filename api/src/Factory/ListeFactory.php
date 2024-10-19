<?php

namespace App\Factory;

use App\Entity\Liste;
use Zenstruck\Foundry\Persistence\PersistentProxyObjectFactory;
use function Zenstruck\Foundry\lazy;
use function Zenstruck\Foundry\faker;
/**
 * @extends PersistentProxyObjectFactory<Liste>
 */
final class ListeFactory extends PersistentProxyObjectFactory
{
    /**
     * @see https://symfony.com/bundles/ZenstruckFoundryBundle/current/index.html#factories-as-services
     *
     * @todo inject services if required
     */
    public function __construct()
    {
    }

    public static function class(): string
    {
        return Liste::class;
    }

    /**
     * @see https://symfony.com/bundles/ZenstruckFoundryBundle/current/index.html#model-factories
     *
     * @todo add your default values here
     */
    protected function defaults(): array|callable
    {
        return [
            'category' => ListeCategoryFactory::new(),
            'name' => self::faker()->name(),
            'status' => self::faker()->randomNumber(1),
        ];
    }

    /**
     * @see https://symfony.com/bundles/ZenstruckFoundryBundle/current/index.html#initialization
     */
    protected function initialize(): static
    {
        return $this
            // ->afterInstantiate(function(Liste $liste): void {})
        ;
    }
}
