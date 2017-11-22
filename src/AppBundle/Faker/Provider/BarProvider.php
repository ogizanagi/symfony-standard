<?php

namespace AppBundle\Faker\Provider;

use Faker\Generator;

class BarProvider
{
    /** @var Generator */
    private $faker;

    public function __construct(Generator $faker)
    {
        $this->faker = $faker;
    }
}
