<?php

namespace AppBundle\Faker\Provider;

use Faker\Generator;

class FooProvider
{
    /** @var Generator */
    private $faker;

    public function __construct(Generator $faker)
    {
        $this->faker = $faker;
    }
}
