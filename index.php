<!DOCTYPE html>
<html lang="ru">
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .nav {
            list-style-type: none;
            display: flex;
            margin: auto;
            width: 1200px;
        }
        .nav li {
            margin-right: 20px;
            margin: auto;
        }
        .nav li a {
            font-family: sans-serif;
            font-size: 30px;
            text-decoration: none;
            color: lightseagreen;
            text-transform: uppercase;
        }
    </style>

</head>
<body>

<?php

// Задание 1

echo 'Задание 1. Первые буквы слов перевести в верхний регистр <br><br>';

$string_1 = 'london is the capital of great britain';

echo ucwords($string_1);

// Задание 2

echo '<hr> Задание 2. Удалить теги из строки. Слова добавить в массив <br><br>';

$string_2 = 'html <b>css</b> php';

print_r(explode(' ', strip_tags($string_2)));

// Задание 3

echo '<hr> Задание 3. Перемешать элементы строки <br><br>';

$string_3 = 'Lorem ipsum dolor sit amet.';

echo str_shuffle($string_3);

// Задание 4

echo '<hr> Задание 4. Количество дней в текущем месяце <br><br>';

echo date('t');

// Задание 5

echo '<hr> Задание 5. Текущая дата и время в разных форматах <br><br>';

echo date('Y-m-d') . '<br>';
echo date('d.m.Y') . '<br>';
echo date('d.m.y') . '<br>';
echo date('H:i:s') . '<br>';
echo time();

// Задание 6

echo '<hr> Задание 6. Работа с датой <br><br>';

$date = date('Y-m-d');

echo date('Y-m-d', strtotime('+2 day', strtotime($date))) . '<br>';
echo date('Y-m-d', strtotime('+1 month 3 day', strtotime($date))) . '<br>';
echo date('Y-m-d', strtotime('+1 year', strtotime($date))) . '<br>';
echo date('Y-m-d', strtotime('-3 day', strtotime($date)));

// Задание 7

echo '<hr> Задание 7. Удалить цифры из строки <br><br>';

$string_7 = 'h3l8d9k37f8d03k3';

$string_7 = preg_replace('/\d/', '', $string_7);

echo $string_7;

// Задание 8

echo '<hr> Задание 8. Найти минимально и максимальное число <br><br>';

$array_8 = [4, -2, 5, 19, 130, 0, 10];

echo 'Минимальное: ' . min($array_8) . '<br>';

echo 'Максимальное: ' . max($array_8);

// Задание 9

echo '<hr> Задание 9. Случайное число от 0 до 100 <br><br>';

echo rand(0, 100);

// Задание 10

echo '<hr> Задание 10. Текущий день недели <br><br>';

$array_10 = [
    1 => 'Понедельник',
    2 => 'Вторник',
    3 => 'Среда',
    4 => 'Четверг',
    5 => 'Пятница',
    6 => 'Суббота',
    7 => 'Воскресенье',
];

$key = date('w');

if ($key == 0) echo 'Сегодня ' . $array_10[7]; 
else echo 'Сегодня ' . $array_10[$key];

// Задание 11

echo '<hr> Задание 11. Сумма элементов массива <br><br>';

$array_11 = [[12, 32], [54,8], [3, 21]];
$sum_11 = 0;

foreach($array_11 as $value) {
    $sum_11 += array_sum($value);
}
echo 'Итог: ' . $sum_11;

// Задание 12

echo '<hr> Задание 12. Вывести цифры из массива без повторений <br><br>';

$array_12 = array(1, 1, 1, 2, 2, 2, 2, 3);
$value = 0;

for ($i = 0; $i < count($array_12); $i++) {
    if ($array_12[$i] != $value) echo $array_12[$i] . ', ';
    $value = $array_12[$i];
}

// Задание 13

echo '<hr> Задание 13. Навигационное меню <br><br>';

$array_13 = [
    'index' => 'Home',
    'about' => 'About',
    'services' => 'Services',
    'catalog' => 'Catalog',
    'contacts' => 'Contacts',
];

echo '<ul class="nav">';
foreach ($array_13 as $key => $item) {
    echo '<li><a href="' . $key . '.php">' . $item . '</a>';
}
echo '</ul><br>';

// Задание 14

echo '<hr> Задание 14. Красные квадраты <br><br>';

echo '<div style="display:grid;grid-template-columns:1fr 1fr 1fr 1fr 1fr 1fr 1fr 1fr 1fr 1fr;background-color:black;width:100%;height:50vw;margin:auto;overflow:hidden;">';
for ($i = 1; $i <= 50; $i++) {
    $random_14 = rand(1, 80);
    $rand = rand(0, 1);
    $randTwo = rand(0, 1);
    if ($rand == 1) {
        if ($randTwo == 1) {
            echo '<div style="width:' . ($random_14 * 1.5) . '%;height:' . ($random_14 * 1.5) . '%;margin-left:' . rand(0, 50) . '%;margin-top:' . rand(0, 50) . '%;background-color:red;"></div>';
        }
        else echo '<div style="width:' . $random_14 . '%;height:' . $random_14 . '%;margin-left:' . rand(0, 50) . '%;margin-top:' . rand(0, 50) . '%;background-color:red;"></div>';
    }
    else echo '<div style="width:' . $random_14 . '%;height:' . $random_14 . '%;margin-left:' . rand(0, 50) . '%;margin-top:' . rand(0, 50) . '%;"></div>';
}
echo '</div>';

// Задание 15

echo '<hr> Задание 15. Навигационное меню <br><br>';
?>

</body>
</html>