<?php

namespace RichardRodriguez21\SmallErp\Orders\Domain;

use Symfony\Component\Uid\Uuid;

class OrderLine
{

    public function __construct(private Uuid $orderId,  )
    {
    }

}