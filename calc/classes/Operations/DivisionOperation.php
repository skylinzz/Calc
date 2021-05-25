<?php

namespace MyApp\Operations;

use MyApp\IOperation;

class DivisionOperation extends BaseOperation implements IOperation
{
    /**
     * Perform the sum
     *
     * @return int|float
     */
    public function calculate(): int|float
    {
        return $this->valueOne / $this->valueTwo;
    }
}
