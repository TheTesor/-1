<?php
function getTriangleType($a, $b, $c)
{
    if ($a + $b <= $c || $a + $c <= $b || $b + $c <= $a) {
        return "Не треугольник";
    }

    $type = ($a === $b && $b === $c) ? "Равносторонний" : (($a === $b || $b === $c || $a === $c) ? "Равнобедренный" : "Разносторонний");

    return $type;
}

$a = (int) readline("Введите сторону A: ");
$b = (int) readline("Введите сторону B: ");
$c = (int) readline("Введите сторону C: ");

echo "Тип треугольника: " . getTriangleType($a, $b, $c) . "\n";
