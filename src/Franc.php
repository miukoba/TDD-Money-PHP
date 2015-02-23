<?php

namespace miukoba\TDD;

class Franc extends Money
{
    public function times($multiplier)
    {
        return Dollar::franc($this->amount * $multiplier);
    }
}
