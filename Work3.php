<?php
$monthNumber = 0;

while ($monthNumber < 1 || $monthNumber > 12) {
    echo "Введите номер вашего месяца (1-12): ";
    $monthNumber = (int) readline();
    
    if ($monthNumber < 1 || $monthNumber > 12) {
        echo "Неверный номер месяца. Попробуйте снова.\n";
    }
}

$daysInMonth = [
    1 => 31,
    2 => 28,
    3 => 31,
    4 => 30,
    5 => 31,
    6 => 30,
    7 => 31,
    8 => 31,
    9 => 30,
    10 => 31,
    11 => 30,
    12 => 31
];

echo "В вашем месяце " . $daysInMonth[$monthNumber] . " дней." . PHP_EOL;
