<?php
// 1. Определение переменных и констант
// Объявляем переменные разных типов данных
$stringVariable = "Привет, мир!"; // строка
$intVariable = 37; // число
$boolVariable = true; // булево значение

// Создаем константу для хранения имени сайта
define("SITE_NAME", "MySite.ru");

// Выводим значения переменных и констант
echo "Строка: " . $stringVariable . "<br>";
echo "Число: " . $intVariable . "<br>";
echo "Булево значение: " . ($boolVariable ? 'true' : 'false') . "<br>";
echo "Имя сайта: " . SITE_NAME . "<br>";

// Альтернативный вывод с использованием print
print "Строка: " . $stringVariable . "\n";
print "Число: " . $intVariable . "\n";
print "Булево значение: " . ($boolVariable ? 'true' : 'false') . "\n";
print "Имя сайта: " . SITE_NAME . "\n";

// 2. Преобразование типов
// Создаем переменную, содержащую строковое представление числа
$stringNumber = "123.45";

// Преобразуем строку в число
$number = (float)$stringNumber;

// Выводим результат преобразования
echo "Результат преобразования: " . $number . "\n";

// Выводим тип переменной
echo "Тип переменной: " . gettype($number) . "\n";

// 3. Использование операторов

// Создаем несколько переменных с числами
$a = 10;
$b = 5;
$c = 20;

// Выполняем арифметические операции
$sum = $a + $b;           // Сложение
$difference = $a - $b;    // Вычитание
$product = $a * $b;       // Умножение
$quotient = $a / $b;      // Деление

// Выводим результаты арифметических операций
echo "Сложение: $a + $b = $sum\n";
echo "Вычитание: $a - $b = $difference\n";
echo "Умножение: $a * $b = $product\n";
echo "Деление: $a / $b = $quotient\n";

// Используем операторы сравнения
$isEqual = $a == $b;          // Проверка на равенство
$isGreater = $c > $a;         // Проверка, больше ли c, чем a
$isLesserOrEqual = $b <= $a;  // Проверка, меньше или равно ли b, чем a

// Выводим результаты сравнения
echo "a равно b: " . ($isEqual ? 'true' : 'false') . "\n";
echo "c больше a: " . ($isGreater ? 'true' : 'false') . "\n";
echo "b меньше или равно a: " . ($isLesserOrEqual ? 'true' : 'false') . "\n";

// Реализуем простое логическое выражение с помощью операторов && и ||
$logicalExpression1 = ($a > 0 && $b > 0); // true, если оба больше 0
$logicalExpression2 = ($a > 15 || $b < 10); // true, если хотя бы одно условие истинно

// Выводим результаты логических выражений
echo "Оба числа положительные: " . ($logicalExpression1 ? 'true' : 'false') . "\n";
echo "Хотя бы одно условие истинно: " . ($logicalExpression2 ? 'true' : 'false') . "\n";

// 4. Суперглобальная переменная $_SERVER

// Выводим информацию о браузере пользователя
$browser = $_SERVER['HTTP_USER_AGENT'];
echo "Браузер пользователя: $browser<br>";

// Выводим IP адрес пользователя
$userIP = $_SERVER['REMOTE_ADDR'];
echo "IP адрес пользователя: $userIP<br>";

// Выводим адрес текущей страницы
$currentPage = $_SERVER['PHP_SELF'];
echo "Текущая страница: $currentPage<br>";

// Выводим информацию о сервере
$serverName = $_SERVER['SERVER_NAME'];
echo "Имя сервера: $serverName<br>";

$serverSoftware = $_SERVER['SERVER_SOFTWARE'];
echo "Программное обеспечение сервера: $serverSoftware<br>";

$serverProtocol = $_SERVER['SERVER_PROTOCOL'];
echo "Протокол сервера: $serverProtocol<br>";

?>