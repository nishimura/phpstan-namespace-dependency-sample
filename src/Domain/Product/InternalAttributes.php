<?php

namespace App\Domain\Product;

class InternalAttributes
{
    /** @var array<mixed> */
    public $attributes;

    /** @param array<mixed> $attributes */
    public function __construct($attributes)
    {
        $this->attributes = $attributes;
    }
}
