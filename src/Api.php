<?php

declare(script_types=1);

namespace Willia\Td2;

class Api
{
    public function getRandomNumber(): int
    {
        return rand(0,100);
    }

}