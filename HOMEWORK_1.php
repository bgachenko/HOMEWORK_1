<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Home-work-2</title>
</head>
<body>
<?php
//Tasks 1-4
$name = 'Богдан';
$age = 27;
echo "Меня зовут: $name.</br>" ;
echo "Мне: $age лет. <br />";

//------Tasks 5-8
if ($age >= 18 and $age <=59) {
    echo 'Вам еще работать и работать';
}
elseif ($age > 59) {
    echo 'Вам пора на пенсию';
}
elseif ($age >= 0 and $age <= 17) {
    echo 'Вам еще рано работать';
}
else {
    echo 'Неизвестный возраст';
}
echo '<br />';

//------Tasks 9-12
$day = 6;

switch ($day) {
    case 1:
    case 2:
    case 3:
    case 4:
    case 5:
        print 'Это рабочий день';
    break;
    case 6:
    case 7:
        print 'Это выходной день';
        break;
    default:
        print 'Неизвестный день';
        break;


        echo '<br />';}
//------Task 13
$s = 150;
$t = 3;
$v = $s / $t;
$v_sec = ($s * 1000) / ($t * 3600);
echo "Скорость автомобиля = $v км/час <br />";
echo "Скорость автомобиля = $v_sec м/сек <br />";
//------Task 14
$foo = 'bar';
$bar = 10;
echo $$foo;
echo '<br />';
?>

<!------Task 15-->
<form method=POST action=''>
        <div>
                <label>Введите число a: </label>
                <input type=text name=a>
        </div>
        <div>
                <label>Введите число b: </label>
                <input type=text name=b>
        </div>
        <div>
                Выберите действие:
                <select name=action>
                        <option value="+">a+b</option>
                        <option value="-">a-b</option>
                        <option value="*">a*b</option>
                        <option value="/">a/b</option>
                </select>
        </div>
        <div>
                <input type=submit name=submit value=Посчитать>
        </div>
</form>

<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST'){
        $operation = $_POST ['action'];
        $a = $_POST ['a'];
        $b = $_POST ['b'];
        if ($_POST['submit']) {
                if ($operation == '+') {
                        $c = $a + $b;
                        echo "Сумма=" . $c . '<br>';
                } elseif ($operation == '-') {
                        $d = $a - $b;
                        echo "Разность=" . $d . '<br>';
                } elseif ($operation == '*') {
                        $e = $a * $b;
                        echo "Произведение=" . $e . '<br>';
                } elseif ($operation == '/' && $b != 0) {
                        $f = $a / $b;
                        echo "Деление=" . $f;
                } elseif ($operation == '/' && $b == 0) {
                        echo "На 0 делить нельзя!";
                } else {
                        echo "Операция не определена";
                }
        }
        echo '<br />';
        echo '<br />';
}
?>


<?php
//------Task 16
$a = 4;
$b = 12;
$c = array($a, $b);
echo max($c);
echo '<br />';

//------Task 17
$a = '78';
$b = 78;

if ($a == $b) {
        echo "Равны";
} else {echo "Не равны";}
echo '<br />';

//------Task 18
$a = '78';
$b = 78;
if ($a === $b) {
        echo 'Эквивалентны';
}
else {echo 'Не эквивалентны';}
echo '<br />';

//------Task 19
$a = '78';
$b = 78;
if ($a == $b) {
        var_dump($a, $b);
}
else {var_dump($a, $b);}
echo '<br />';

//------Task 20
var_dump((bool)$a);
/*булевое число рассматривается как логическое выражение true или false
 как false рассматриваются только: сам false, 0, 0.0, массива в 0-элементами,
объект с 0-перемеными, NULL
все остальное рассматривается как true, соответственно 20 - true*/
echo '<br />';

//------Task 21
$a = 0;
var_dump((bool)$a);
/*булевое число рассматривается как логическое выражение true или false
 как false рассматриваются только: сам false, 0, 0.0, массива в 0-элементами,
объект с 0-перемеными, NULL
соответственно 0 - false*/
echo '<br />';
//------Task 22
$a = -20;
var_dump((bool)$a);
/*любое ненулевое число (отрицательное или положительное) при приведении в булевое
рассматривается как true*/
echo '<br />';
//------Task 23
$a = 'String 1';
$b = array ('String', 2);
$c = 'String 3';
echo $a ;
echo '<br />';
print_r($b);
echo '<br />';
var_dump($c);
echo '<br />';
//------Task 24
//Комментарий однострочный
/*Комментарий
многострочный*/
#Комментарий в стиле оболочки Unix
?>

<?php
//------Task 25
echo 'Вывод на экран через эхо';
echo '<br />';
?>
<?= 'Альтернативный вывод на экран';
?>

<?php
//------Task 26
echo '<br />';
define('DAYS_COUNT', 7);
echo DAYS_COUNT;
echo '<br />';
const MONTH_COUNT = 12;
echo MONTH_COUNT;
echo '<br />';
?>
</body>
</html>
