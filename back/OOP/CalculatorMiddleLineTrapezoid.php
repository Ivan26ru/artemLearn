<?php

class CalculatorMiddleLineTrapezoid
{
    private int $a;
    private int $b;

    public function __construct(int $a, int $b)
    {
        $this->a = $a;
        $this->b = $b;
    }

    public function getA(): int
    {
        return $this->a;
    }

    public function getB(): int
    {
        return $this->b;
    }

    public function calculateMiddleLineTrapezoid(): string
    {
        $l = $this->a + $this->b / 2;
        return "Средняя линии трапеции=" . $l;
    }
}

$l = new CalculatorMiddleLineTrapezoid(8, 2);
echo "A=" . $l->getA() . "<br>";
echo "B=" . $l->getB() . "<br>";
echo $l->calculateMiddleLineTrapezoid();