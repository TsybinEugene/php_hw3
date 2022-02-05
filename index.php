<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<?php

echo '1. Сделайте функцию, которая возвращает куб числа. Число передается параметром.' . '<br/>';

function cube($num) {
    return $num ** 3;
}

echo "Куб числа = " . cube(4) . "<br/>";

//----------------------------------------------------------------------------------------------------------

echo '<br/>' . '2. Сделайте функцию, которая возвращает сумму двух чисел. Числа передаются параметрами функции.' . '<br/>';

function getSum($a, $b) {
    return $a + $b;
}

echo "Сумма двух чисел = " . getSum(9, 3) . "<br/>";

//----------------------------------------------------------------------------------------------------------

echo '<br/>' . '3. Сделайте функцию, которая принимает параметром число от 1 до 7, а возвращает день недели на русском языке.' . '<br/>';

function dayWeek($dayNumber) {
    $week = ['Понедельник', 'Вторник', 'Среда', 'Четверг', 'Пятница', 'Суббота', 'Воскресенье'];
    return $week[$dayNumber - 1];
}

echo "День недели: " . dayWeek(2) . "<br/>";

//----------------------------------------------------------------------------------------------------------

echo '<br/>' . '4. Сделайте функцию, которая параметром принимает число и проверяет - отрицательное оно или нет. Если отрицательное - пусть функция вернет true, а если нет - false.' . '<br/>';

function negative($num) {
    return ($num < 0) ? true : false;
}

var_dump(negative(45));
echo "<br />";

//----------------------------------------------------------------------------------------------------------

echo '<br/>' . '5. Сделайте функцию getDigitsSum (digit - это цифра), которая параметром принимает целое число и возвращает сумму его цифр.' . '<br/>';

function getDigitsSum($num) {
    settype($num, "string");
    $sum = 0;
    for ($i = 0; $i < strlen($num); $i++) {
        $sum += $num[$i];
    }
    return $sum;
}

echo "Сумма цифр числа = " . getDigitsSum(1537);
echo "<br />";

//----------------------------------------------------------------------------------------------------------

echo '<br/>' . '6. Найдите все года от 1 до 2020, сумма цифр которых равна 13. Для этого используйте вспомогательную функцию getDigitsSum из предыдущей задачи.' . '<br/>';

function getYearsDigits() {
    for ($i = 1; $i <= 2020; $i++) {
        $years[] = $i;
    }

    foreach ($years as $year) {
        if (getDigitsSum($year) == 13) {
            $suitableYears[] = $year;
        }
    }
    return $suitableYears;
}
echo "<pre>";
print_r(getYearsDigits());
echo "</pre>";

//----------------------------------------------------------------------------------------------------------

echo '<br/>' . '7. Сделайте функцию isEven() (even - это четный), которая параметром принимает целое число и проверяет: четное оно или нет. Если четное - пусть функция возвращает true, если нечетное - false.' . '<br/>';

function isEven($num) {
    return (!($num % 2)) ? true : false;
}

var_dump(isEven(12));
echo "<br />";

//----------------------------------------------------------------------------------------------------------

echo '<br/>' . '8. Сделайте функцию, которая принимает строку на русском языке, а возвращает ее транслит.' . '<br/>';

function translit($str) {
    $russian = ['А', 'Б', 'В', 'Г', 'Д', 'Е', 'Ё', 'Ж', 'З', 'И', 'Й', 'К', 'Л', 'М', 'Н', 'О', 'П', 'Р', 'С', 'Т', 'У', 'Ф', 'Х', 'Ц', 'Ч', 'Ш', 'Щ', 'Ъ', 'Ы', 'Ь', 'Э', 'Ю', 'Я', 'а', 'б', 'в', 'г', 'д', 'е', 'ё', 'ж', 'з', 'и', 'й', 'к', 'л', 'м', 'н', 'о', 'п', 'р', 'с', 'т', 'у', 'ф', 'х', 'ц', 'ч', 'ш', 'щ', 'ъ', 'ы', 'ь', 'э', 'ю', 'я'];

    $translit = ['A', 'B', 'V', 'G', 'D', 'E', 'E', 'Zh', 'Z', 'I', 'Y', 'K', 'L', 'M', 'N', 'O', 'P', 'R', 'S', 'T', 'U', 'F', 'H', 'C', 'Ch', 'Sh', 'Sch', '', 'Y', '\'', 'Ye', 'Yu', 'Ya', 'a', 'b', 'v', 'g', 'd', 'e', 'e', 'zh', 'z', 'i', 'y', 'k', 'l', 'm', 'n', 'o', 'p', 'r', 's', 't', 'u', 'f', 'h', 'c', 'ch', 'sh', 'sch', '', 'y', '\'', 'ye', 'yu', 'ya'];

    return str_replace($russian, $translit, $str);
}

echo translit('Немного текста для проверки транслита');

echo "<br />";

//----------------------------------------------------------------------------------------------------------

echo '<br/>' . '9. Сделайте функцию, которая возвращает множественное или единственное число существительного. Пример: 1 яблоко, 2 (3, 4) яблока, 5 яблок. Функция первым параметром принимает число, а следующие 3 параметра — форма для единственного числа, для чисел два, три, четыре и для чисел, больших четырех, например, func(3, "яблоко", "яблока", "яблок").' . '<br/>';

function wordForm($num, $sing, $plur234, $plur) {
    $num = abs($num) % 100;
    $num_x = $num % 10;
    if ($num > 10 && $num < 20) return $plur;
    if ($num_x > 1 && $num_x < 5) return $plur234;
    if ($num_x == 1)
        return $sing;
    return $plur;
}

$num = 16;
echo $num . ' ' . wordForm($num, 'вишня', 'вишни', 'вишен');

echo "<br />";

//----------------------------------------------------------------------------------------------------------

echo '<br/>' . '10. Дан массив с числами. Выведите последовательно его элементы используя рекурсию и не используя цикл.' . '<br/>';

$arrRec = [2, 8, 0, 84, 11, -15, 159, 3];

function printArr($arr, $i = 0) {
    if ($i < count($arr)) {
        echo $arr[$i] . ' ';
        printArr($arr, $i + 1);
    }
}

printArr($arrRec);

echo "<br />";

//----------------------------------------------------------------------------------------------------------

echo '<br/>' . '11. Дано число. Сложите его цифры. Если сумма получилась более 9-ти, опять сложите его цифры. И так, пока сумма не станет однозначным числом (9 и менее).' . '<br/>';

$num = 357986425810587;
echo $num . "<br />";

function getSingleNum($num) {
    if ($num > 9) {
        $num = $num . '';
        $sum = 0;
        for ($i = 0; $i < strlen($num); $i++) {
            $sum += $num[$i];
        }
        getSingleNum($sum);
    } else echo $num;
}

getSingleNum($num);

echo "<br />";

//----------------------------------------------------------------------------------------------------------

echo '<br/>' . '12. Рассчитать скорость движения машины и выведите её в удобочитаемом виде. Осуществить возможность вывода в км/ч, м/c. Представить решение задачи с помощью одной функции.' . '<br/>';

function getCarSpeed($t, $l, $unit = 'km') {
    echo "Время: $t ч.<br/>";
    echo "Расстояние: $l км.<br/>";
    if ($unit == 'km') {
        $v = $l / $t;
        echo "Скорость: $v км/ч";
    } else {
        $v = ($l * 1000) / ($t * 3600);
        echo "Скорость: $v м/c";
    }
}

getCarSpeed(3, 150, 'm');

echo "<br />";

//----------------------------------------------------------------------------------------------------------

echo '<br/>' . '13. Даны 2 слова, определить можно ли из 1ого слова составить 2ое, при условии что каждую букву из строки 1 можно использовать только один раз.' . '<br/>';

function wordCheck($a, $b)
{
    $a = str_split($a);
    $b = str_split($b);

    sort($b);
    sort($a);

    $intersec = array_intersect($b, $a);

    for ($i = 0; $i < count($b); $i++) {
        if ($b[$i] != $intersec[$i]) {
            return 'слово №2 нельзя сложить из букв слова №1';
        }
    }
    return "можно сложить";
}
$a = 'синхрофазатрон';
$b = 'авто';
echo 'Слово №1: ' . $a . '<br/>';
echo 'Слово №2: ' . $b . '<br/>';
echo wordCheck($a, $b);

echo '<br />';

echo '<br/>' . '14. Палиндромом называют последовательность символов, которая читается как слева направо, так и справа налево. Напишите функцию по определению палиндрома по переданному параметру.' . '<br/>';

function polindrom($str) {

    $str = mb_strtolower($str);

    function mb_strrev($str) {
        $r = '';
        for ($i = mb_strlen($str); $i >= 0; $i--) {
            $r .= mb_substr($str, $i, 1);
        }
        return $r;
    }

    $reverce = mb_strrev($str);

    if ($str == $reverce) return 'Полиндром';
    else return "Не полиндром";
}

echo polindrom('Довод') . '<br />';

echo '<br/>' . '15. Создание функцию создания таблицы умножения в HTML-документе в виде таблицы с использованием соотв. тегов.' . '<br/>';

function miltiTable() {
    echo '<table style = "border-spacing: 30px 0px">';
    for ($j = 1; $j <= 10; $j++) {
        echo '<tr>';
        for ($i = 1; $i <= 10; $i++) {
            echo '<td style = "padding: 10px"> ' . $j . ' x ' . $i . ' = ' . $i * $j . '</td>';
        }
        echo '</tr>';
    }
    echo '</table>';
}

miltiTable();

echo '<br/>' . '16. Дана строка с текстом. Напишите функцию определения самого длинного слова.' . '<br/>';

function maxWordLength($str) {

    $strArr = explode(" ", $str);
    $maxLength = $strArr[0];

    for ($i = 1; $i < count($strArr); $i++) {
        if (strlen($maxLength) > strlen($strArr[$i])) $maxLength = $maxLength;
        else $maxLength = $strArr[$i];
    }
    return $maxLength;
}
echo maxWordLength('Поиск последнего вхождения одной строки в другую, нечувствительный к регистру');

echo '<br />';

echo '<br/>' . '17. Напишите функцию определения суммарного количества единиц в числах от 1 до 100.' . '<br/>';

function sumOnes() {

    $arrNum = [];

    for ($i = 1; $i <= 100; $i++) {
        array_push($arrNum, $i);
    }
    $arrNum = implode('', $arrNum);
    return substr_count($arrNum, '1');
}

echo sumOnes() . '<br />';

echo '<br/>' . '18. Напишите функцию, которая разбивает длинную строку тегами < br> так, чтобы длина каждой подстроки была не более N символов. Новая подстрока не должна начинаться с пробела.' . '<br/>';

function strcolumn($str, $count = 10) {
    $newStr = '';
    $index = 0;

    $part = ceil(strlen($str) / $count);

    for ($i = 0; $i <= $part; $i++) {
        $substr = trim(substr($str, $index, $count));

        if (strlen($substr) != $count) {
            $char = $str[$index + $count];

            $substr .=  $char;
            $index++;
        }

        $newStr .=  $substr . " (" . strlen($substr) . ")" . '<br>';
        $index += $count;
    }

    echo $newStr;
}

$str = 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Numquam, mollitia, aliquid harum cum iusto delectus sapiente ut officiis deleniti obcaecati voluptatibus odio exercitationem repellat vitae illum voluptatem molestias deserunt suscipit.';

strcolumn($str);

?>

</body>
</html>