<?php

namespace RichardRodriguez21\SmallErp\Shared\Domain;

class StringValueObject
{
    public function __construct(protected string $value)
    {
    }

    public function value(): string
    {
        return $this->value;
    }


}