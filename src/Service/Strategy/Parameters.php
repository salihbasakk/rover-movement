<?php

namespace Service\Strategy;

class Parameters
{
    /** @var null|string $x */
    private $x;
    /** @var null|string $y */
    private $y;
    /** @var null|string $z */
    private $z;
    /** @var null|string $instruction */
    private $instruction;

    /**
     * @return string|null
     */
    public function getX(): ?string
    {
        return $this->x;
    }

    /**
     * @param string|null $x
     *
     * @return Parameters
     */
    public function setX(?string $x): Parameters
    {
        $this->x = $x;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getY(): ?string
    {
        return $this->y;
    }

    /**
     * @param string|null $y
     *
     * @return Parameters
     */
    public function setY(?string $y): Parameters
    {
        $this->y = $y;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getZ(): ?string
    {
        return $this->z;
    }

    /**
     * @param string|null $z
     *
     * @return Parameters
     */
    public function setZ(?string $z): Parameters
    {
        $this->z = $z;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getInstruction(): ?string
    {
        return $this->instruction;
    }

    /**
     * @param string|null $instruction
     *
     * @return Parameters
     */
    public function setInstruction(?string $instruction): Parameters
    {
        $this->instruction = $instruction;
        return $this;
    }
}