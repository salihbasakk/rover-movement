<?php

namespace Service\Strategy\Movement;

use Service\Strategy\Parameters;

class Movement
{
    protected static $strategy = [];

    public static function init(): void
    {
        self::registerStrategy(new GoForward());
    }

    /**
     * @param MovementStrategyInterface $movement
     */
    protected static function registerStrategy(MovementStrategyInterface $movement): void
    {
        self::$strategy[$movement->getInstruction()] = $movement;
    }

    public static function makeMove(Parameters $parameters)
    {
        self::init();
        
        return self::getStrategy($parameters->getInstruction())->makeMove($parameters->getX(),
            $parameters->getY(), $parameters->getZ());
    }

    public static function getStrategy(string $instruction): MovementStrategyInterface
    {
        return self::$strategy[$instruction];
    }
}