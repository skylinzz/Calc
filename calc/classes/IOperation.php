<?php

namespace MyApp;

interface IOperation
{
    /**
     * IOperation constructor.
     *
     * @param int|float $one
     * @param int|float $two
     */
    public function __construct(int|float $one, int|float $two);

    /**
     * Perform the calculation
     *
     * @return int|float
     */
    public function calculate(): int|float;
}
