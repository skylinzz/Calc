<?php

namespace MyApp\Operations;

class BaseOperation
{

    /**
     * @var int|float $valueOne
     */
    protected int|float $valueOne;

    /**
     * @var int|float $valueTwo
     */
    protected int|float $valueTwo;

    /**
     * SumOperation constructor.
     *
     * @param float|int $one
     * @param float|int $two
     */
    public function __construct(float|int $one, float|int $two)
    {
        $this->valueOne = $one;
        $this->valueTwo = $two;
    }
}
