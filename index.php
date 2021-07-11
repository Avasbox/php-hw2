<?php

echo 'Задание 1 <br />';

$a = array (1, 3, -3, 0, null, true, '', '0');


foreach ($a as $value) {
    if(isset($value))
        echo 'верно <br />';
    else
        echo 'не верно <br />';
}
echo '<hr />';
echo 'Задание 2 <br />';

$b = 123;
$b .= ''; // переменная содержит строку
$b[1] = 0;
echo $b;
echo '<br />';
var_dump($b);

echo '<hr />';
echo 'Задание 3 <br />';

$a = 3;
$b = 5;

if ($a <= 1 && $b >= 3) {
    echo $a + $b;
} else {
    echo $a - $b;
}

echo '<hr />';
echo 'Задание 4 <br />';

$a = 'abcde';
$b = $a[0] == 'a' ? 'да' : 'нет';
echo $b;

echo '<hr />';
echo 'Задание 5 <br />';

$d = 213213;
$a1 = $d[0];
$a2 = $d[1];
$a3 = $d[2];
$a4 = $d[3];
$a5 = $d[4];
$a6 = $d[5];

if (($a1 + $a2 + $a3) == ($a4 + $a5 + $a6)) {
    echo 'да';
} else {
    echo 'нет';
}

echo '<hr />';
echo 'Задание 6 <br />';

$c = 80;
echo 'Прошло ' . round(((24 / 360) * $c), 0) . 'ч.';

echo '<hr />';
echo 'Задание 7 <br />';

$a = 20;
$b = 200;
$sum = 0;

for($i = $a; $i <= $b; $i++) {
    if(fmod($i, 5) == 0) { // возвращает дробный остаток
        $sum += $i;
    }
}

echo $sum;

echo '<hr />';
echo 'Задание 8 <br />';

$f = 12345;
$f .= '';
$f[1] = 0;
$f[3] = 0;

echo $f;
echo '<hr />';
echo 'Задание 9 <br />';

$n = 1000;
$num = 0;
$c = 50;
for ($n = 1000; $n >= $c; $num++) {
    $n=$n/2;
}
echo 'Количество итераций: '. $num . '<br />';
echo 'Число < '.$c.' = '. $n;
echo '<hr />';

$h = 1000;
$num = 0;
$c = 50;

while ($h >= $c) {
    $h = $h/2;
    $num++;
}

echo 'Количество итераций: '. $num . '<br />';
echo 'Число < '.$c.' = '. $h;

echo '<hr />';
echo 'Задание 10 <br />';

$v = 6;
$g = 10;

for ($i = 0; $i <= $v; $i++) {
    for ($j = 0; $j <= $g; $j++) {
        echo '* ';
    }
    echo '<br />';
}

