<?php

namespace miukoba\TDD;

class Dollar extends Money
{
    public function times($multiplier)
    {
        return Money::dollar($this->amount * $multiplier);
    }
}
