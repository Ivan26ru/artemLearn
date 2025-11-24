<?php

class CalculatorSumGeometricProgression
{
    private int $q;
    private int $b;

    public function __construct(int $q, int $b)
    {
        $this->q = $q;
        $this->b = $b;
    }

    public function getQ() : int
    {
        return $this->q;
    }
    public function getB() : int
    {
        return $this->b;
    }

    public function calculateSumGeometricProgression() : string
    {
        $SGP = $this->b * 1 - $this->b * $this->q / 1 - $this->q;
        return "Сумма геометрической прогрессии= " . $SGP;
    }
}

$SGP = new CalculatorSumGeometricProgression(6, 8);
echo "b=" . $SGP->getB() . "<br>";
echo "q=" . $SGP->getQ() . "<br>";
echo $SGP->calculateSumGeometricProgression();