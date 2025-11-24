<?php

class CalculatorIdentity
{
    private int $b;
    private int $a;

    public function __construct(int $b, int $a)
    {
        $this->b = $b;
        $this->a = $a;
    }

    public function getB(): int
    {
        return $this->b;
    }

    public function getA(): int
    {
        return $this->a;
    }

    public function calculateIdentity(): string
    {
        $identity = $this->a * $this->a + 2 * $this->a * $this->b + $this->b * $this->b;
        return "Квадрат суммы=" . $identity;
    }
}

$identity = new CalculatorIdentity(4, 2);
echo "a=" . $identity->getB() . "<br>";
echo "b=" . $identity->getA() . "<br>";
echo $identity->calculateIdentity();