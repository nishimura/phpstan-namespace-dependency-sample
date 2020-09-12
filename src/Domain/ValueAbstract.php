<?php

namespace App\Domain;

/**
 * @template T
 */
abstract class ValueAbstract
{
    /** @var T */
    protected $value;

    /** @param T $value */
    public function __construct($value)
    {
        if (!$this->validate($value))
            throw new \Exception('invalid value');
            //throw new DomainException('invalid value');

        $this->value = $value;
    }

    /** @return T */
    public function value()
    {
        return $this->value;
    }

    /** @param T $value */
    protected function validate($value): bool
    {
        return true;
    }
}
