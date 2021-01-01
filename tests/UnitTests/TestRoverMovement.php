<?php

use App\RoverMovement;
use App\Tests\TestCase;

/**
 * Class TestRoverMovement
 * @coversDefaultClass RoverMovement
 */
class TestRoverMovement extends TestCase
{
    /**
     * @covers ::moveAction
     */
    public function testMoveAction()
    {
        $roverMovement = new RoverMovement();

        [$x1, $y1, $z1] = $this->getStartingPoints()[0];
        [$x2, $y2, $z2] = $this->getStartingPoints()[1];

        $instructionsRoverOne = str_split($this->getInstructions()[0]);
        $instructionsRoverTwo = str_split($this->getInstructions()[1]);

        $this->assertEquals('13N', $roverMovement->moveAction($x1, $y1, $z1, $instructionsRoverOne));
        $this->assertEquals('51E', $roverMovement->moveAction($x2, $y2, $z2, $instructionsRoverTwo));
    }

    public function getInstructions(): array
    {
        return ['LMLMLMLMM', 'MMRMMRMRRM'];
    }

    public function getStartingPoints(): array
    {
        return [
            [1, 2, 'N'],
            [3, 3, 'E']
        ];
    }
}