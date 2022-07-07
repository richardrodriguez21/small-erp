<?php

namespace RichardRodriguez21\SmallErp\Orders\Domain;

use RichardRodriguez21\SmallErp\Shared\Domain\StringValueObject;
use \Exception;

class ProductCode extends StringValueObject
{
    public function __construct(protected string $value)
    {
        if(!preg_match("/^MCMP-[0-9]{10}$/", $value)){
            throw new Exception('Invalid Product Code.');
        }
        parent::__constructor($value);
    }
}