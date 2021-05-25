<?php

namespace MyApp\Operations;

use MyApp\IOperation;

class SubOperation extends BaseOperation implements IOperation
{
    /**
     * Perform the sum
     *
     * @return int|float
     */
    public function calculate(): int|float
    {
        return $this->valueOne - $this->valueTwo;
    }
}
