<?php

namespace App;

use App\Service\Strategy\Movement\GoForward;
use App\Service\Strategy\Movement\Movement;
use App\Service\Strategy\Parameters;
use App\Service\Strategy\Spin\Spin;
use App\Service\Strategy\Spin\SpinLeft;
use App\Service\Strategy\Spin\SpinRight;

class RoverMovement
{
    public function moveAction($x, $y, $z, $instructions)
    {
        $parameters = self::buildParameters($x, $y, $z);

        foreach ($instructions as $instruction) {
            $parameters->setInstruction($instruction);

            if ($instruction === (SpinLeft::LEFT || SpinRight::RIGHT)) {
                $z = Spin::makeSpin($parameters);
            }

            if ($instruction === GoForward::MOVE) {
                [$x, $y, $z] = Movement::makeMove($parameters);
            }
        }
        return $x . $y . $z;
    }

    public static function buildParameters(?int $x, ?int $y, ?string $z): Parameters
    {
        return (new Parameters())
            ->setX($x)
            ->setY($y)
            ->setZ($z);
    }
}