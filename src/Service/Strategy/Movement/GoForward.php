<?php

namespace App\Service\Strategy\Movement;

class GoForward implements MovementStrategyInterface
{
    public function makeMove($x, $y, $z): array
    {
        switch ($z) {
            case self::EAST:
                return [$x + 1, $y, $z];
            case self::NORTH:
                return [$x, $y + 1, $z];
            case self::WEST:
                return [$x - 1, $y, $z];
            case self::SOUTH:
                return [$x, $y - 1, $z];
            default:
                return [$x, $y, $z];
        }
    }

    public function getInstruction(): string
    {
        return self::MOVE;
    }
}