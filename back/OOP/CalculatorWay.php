<?php

class CalculatorWay
{
    private int $speed;
    private int $time;

    public function __construct(int $speed, int $time)
    {
        $this->speed = $speed;
        $this->time = $time;

    }

    public function getTime(): int
    {
        return $this->time;
    }

    public function getSpeed(): int
    {
        return $this->speed;
    }

    public function calculateWay(): string
    {
        $way = $this->speed * $this->time;
        return "Путь=" . $way;
    }
}

$way = new CalculatorWay(60, 3 );
echo "Время=" . $way->getTime() . "ч<br>";
echo "Скорость=" . $way->getSpeed() . "км/ч<br>";
echo $way->calculateWay();
