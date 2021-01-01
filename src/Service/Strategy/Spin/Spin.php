<?php

namespace Service\Strategy\Spin;

use Service\Strategy\Parameters;

class Spin
{
    protected static $strategy = [];

    public static function init(): void
    {
        self::registerStrategy(new SpinLeft());
        self::registerStrategy(new SpinRight());
    }

    /**
     * @param SpinStrategyInterface $spin
     */
    protected static function registerStrategy(SpinStrategyInterface $spin): void
    {
        self::$strategy[$spin->getInstruction()] = $spin;
    }

    public static function makeSpin(Parameters $parameters): string
    {
        self::init();

        return self::getStrategy($parameters->getInstruction())->makeSpin($parameters->getZ());
    }

    public static function getStrategy(string $instruction): SpinStrategyInterface
    {
        return self::$strategy[$instruction];
    }
}