<?php

declare(script_types=1);

namespace Willi\Td2;

use DateTime;

class Api
{
    public function getRandomNumber(): int
    {
        return rand(0, 100);
    }

    public function getDate(): \DateTime
    {  
        return new DateTime();
    }

}
