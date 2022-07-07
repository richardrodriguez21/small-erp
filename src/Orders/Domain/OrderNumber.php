<?php

namespace RichardRodriguez21\SmallErp\Orders\Domain;
use \Exception;
use RichardRodriguez21\SmallErp\Shared\Domain\StringValueObject;

final class OrderNumber extends StringValueObject
{
    public function __construct(protected string $value)
    {
        if(!preg_match("/^[0-9]{8}$/", $value)){
            throw new Exception('Invalid Order number format.');
        }

        parent::__constructor($value);
    }



}