<?php

namespace MyApp;

use InvalidArgumentException;
use MyApp\Operations\SumOperation;
use MyApp\Operations\MultiplyOperation; 
use MyApp\Operations\DivisionOperation;
use MyApp\Operations\SubOperation;

class OperationFactory
{
    private const VALID_TYPES = [
        'sum' => SumOperation::class,
        'multiply' => MultiplyOperation::class,
        'sub' => SubOperation::class,
        'division' => DivisionOperation::class,
    ];

    /**
     * @var string
     */
    private string $type;

    public function __construct(string $type)
    {
        // Validar se o type é valido 
        if(!array_key_exists($type, self::VALID_TYPES)){
            throw new InvalidArgumentException("The given {$type} is not valid!");
        }

        // fazer set da propriedade da class
        $this->type = self::VALID_TYPES[$type];
    }

    

    public function instantiate(int|float $valueOne, int|float $valueTwo): IOperation
    {
        return new $this->type($valueOne, $valueTwo);
    }
}
