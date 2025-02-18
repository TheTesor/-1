<?php
$monthNumber = -1;
echo "Введите номер вашего месяца: ";
while ($monthNumber < 1 || $monthNumber > 12) {
   echo "Неверный номер месяца. Попробуйте снова: ";
   $monthNumber = readline();
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
