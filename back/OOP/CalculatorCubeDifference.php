<?php

class CalculatorCubeDifference
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

    public function calculateCubeDifference(): string
    {
        $CD = $this->a * $this->a * $this->a - 3 * $this->a * $this->a * $this->b + 3 * $this->a * $this->b * $this->b - $this->b * $this->b * $this->b;
        return "Куб разницы=" . $CD;
    }
}

$CD = new CalculatorCubeDifference(6, 8);
echo "A=" . $CD->getA() . "<br>";
echo "B=" . $CD->getB() . "<br>";
echo $CD->calculateCubeDifference();