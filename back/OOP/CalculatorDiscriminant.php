<?php

namespace MyProject\Calculator;

use LogsExample\LogConsole;
use LogsExample\LogHtml;
use LogsExample\LogInterface;
use LogsExample\LogText;

require_once "LogsExample/LogInterface.php";
require_once "LogsExample/LogConsole.php";
require_once "LogsExample/LogHtml.php";
require_once "LogsExample/LogText.php";

class CalculatorDiscriminant extends LogConsole
{
    private int $a;
    private int $b;
    private int $c;
    private int $discriminant;

    private LogInterface $logger;

    public function __construct(int $a, int $b, int $c)
    {
        $this->a = $a;
        $this->b = $b;
        $this->c = $c;

        $this->logger = new LogText();
    }

    public function loggerResult(): void
    {
        $this->logger::info(
            $this->calculateFormula()
        );
    }

    static  function create(int $a, int $b, int $c): CalculatorDiscriminant
    {
        return new self($a, $b, $c);
    }

    public function calculateFormula(): string
    {
        $this->calculateDiscriminant();
        if ($this->getDiscriminant() < 0) {
            $result = $this->calculateXLessZeroD();
        } elseif ($this->getDiscriminant() == 0) {
            $result = $this->calculateDEquallyZero();
        } else {
            $result = $this->calculateDMoreZero();
        }
        return $result;
    }

    private function calculateDiscriminant(): void
    {
        $this->discriminant = $this->b * $this->b - 4 * $this->a * $this->c;

    }

    public function getDiscriminant(): int
    {
        return $this->discriminant;
    }

    private function calculateXLessZeroD(): string
    {
        return "Корней нет <br>";
    }

    private function calculateDEquallyZero(): string
    {
        $x = -$this->b / 2 * $this->a;
        return "1 корень, x=" . $x . "<br>";
    }

    private function calculateDMoreZero() : string
    {
        $x1 = -$this->b + sqrt($this->discriminant) / 2 * $this->a;
        $x2 = -$this->b - sqrt($this->discriminant) / 2 * $this->a;

        return "x1=" . $x1 . "<br>" . "x2=" . $x2 . "<br>";
    }

}


//CalculatorDiscriminant::info('Какой то наш текст, который логируем');
$discriminant = new CalculatorDiscriminant(1, 10, 1);

$discriminant->loggerResult();

//echo $discriminant->calculateFormula();
//
////$d2 = new CalculatorDiscriminant(11, 3, 1);
////echo $d2->calculateFormula();
//
//echo "Дискриминат равен " . $discriminant->getDiscriminant() ;
//
//$discriminant3 = CalculatorDiscriminant::create(2, 10, 1);
//echo $discriminant3->calculateFormula()