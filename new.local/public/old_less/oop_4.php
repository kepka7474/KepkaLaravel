Определение принадлежности объекта к классу
<?php
class Class1
{

}

class Class2
{

}
?><br>
Создадим объект первого класса:

<?php
$obj = new Class1;
$obj2 = new Class2;
?>
Проверим принадлежность объекта из переменной $obj первому классу и второму:
<br>
<?php
var_dump( $obj2 instanceof Class2);

?><br>
<?php
class Employee101
{
    public $name;
    public $salary;
    public function __construct($name, $salary)
    {
        $this->name = $name;
        $this->salary = $salary;
    }

}
class Student101
{
    public $name;
    public $scholarship;
    public function __construct($name, $scholarship)
    {
        $this->name = $name;
        $this->scholarship = $scholarship;
    }
}
$emp1 = new Employee101('Ghisha', 790);
$emp2 = new Employee101('Juli', 600);
$emp3 = new Employee101('John', 1290);
$stud1 = new Student101('Xseniya', 120);
$stud2 = new Student101('Mike', 90);
$stud3 = new Student101('Koly', 340);
$arr = [];
$arr[] = $emp2;
$arr[] = $emp3;
$arr[] = $stud2;
$arr[] = $emp1;
$arr[] = $stud3;
$arr[] = $stud1;
$sumEmp = 0;
$sumStud = 0;
foreach ($arr as $piop)
{

    if ($piop instanceof Employee101)
    {
        $sumEmp += $piop->salary;
        echo $piop->name . '<br>';

    }else {
        $sumStud += $piop->scholarship;
    }

}
echo $sumStud . " " . $sumEmp;
?><br>
<?php
class User102
{
    public $name;
    public $surname;
    public function __construct($name, $surname)
    {
        $this->name = $name;
        $this->surname = $surname;
    }
}
class Employee102 extends User102
{
    public $salary;
    public function __construct($name, $surname, $salary)
    {
        parent::__construct($name, $surname);
        $this->surname = $salary;
    }
}
class City102
{
    public $name;
    public $population;
    public function __construct($name, $population)
    {
        $this->name = $name;
        $this->population = $population;
    }
}
$user1 = new User102('Klod', 'Maloy');
$user2 = new User102('Fox', 'Ghorkiy');
$user3 = new User102('Fred', 'Steslish');
$student1 = new Employee102('Chack', 'Norris', 600);
$student2 = new Employee102('Arnold', 'Zvovskay', 1350);
$student3 = new Employee102('Jonny', 'Keyge', 7500);
$city1 = new City102('Ghorkay', 3000000);
$city2 = new City102('Moskow', 9000000);
$city3 = new City102('Kopeysk', 100000);
$arrey = [];
$arrey[] = $student2;
$arrey[] = $user1;
$arrey[] = $student1;
$arrey[] = $user2;
$arrey[] = $city2;
$arrey[] = $city3;
$arrey[] = $city1;
$arrey[] = $student3;

foreach ($arrey as $elem)
{
    if (!$elem instanceof User102)
    {
        echo $elem->name . '<br>';
    }
}
?><br>
<?php
class ArraySumHelper
{
    public static function getSum1($arr)
    {
        return self::getSum($arr, 1);
    }

    public static function getSum2($arr)
    {
        return self::getSum($arr, 2);
    }

    public static function getSum3($arr)
    {
        return self::getSum($arr, 3);
    }

    public static function getSum4($arr)
    {
        return self::getSum($arr, 4);
    }

    private static function getSum($arr, $power) {
        $sum = 0;

        foreach ($arr as $elem) {
            $sum += pow($elem, $power);
        }

        return $sum;
    }
}
echo 'hi' . ArraySumHelper::getSum4([1,2,3,4,5,6,7,8,9])
?><br>
<?php
class User
{
    private static $count = 0;
    public $name;
    public static $huyount = 0;

    public function __construct($name)
    {
        $this->name = $name;

        // Увеличиваем счетчик при создании объекта:
        self::$count++;
    }

    // Метод, возвращающий значение счетчика:
    public static function getCount()
    {
        // Выводим значение счетчика:
        return self::$count;
    }
}
?>
Проверим:<br>

<?php
$user1 = new User('user1'); // создаем первый объект класса
echo $user1::getCount() . '<br>'; //выведет 1
$user3 = new User('usar3');
$user2 = new User('user2'); // создаем второй объект класса
echo $user2::getCount() . '<br>'; //выведет 2
echo User::$huyount . '<br>';
User::$huyount = 100;
echo $user2::$huyount . '<br>';
?><br>
<?php
class Test
{
    // Задаем константу:
    const CONSTANT = 'teste';
}
?>
<?php
echo Test::CONSTANT; // выведет 'test'
?><br>
Константы<br>
<?php
class Circle
{
    const PI = 3.14; // запишем число ПИ в константу
    private $radius; // радиус круга

    public function __construct($radius)
    {
        $this->radius = $radius;
    }

    // Найдем площадь:
    public function getSquare()
    {
        return self::PI*$this->radius**2;// Пи умножить на квадрат радиуса
    }

    // Найдем длину окружности:
    public function getCircuit()
    {
        return 2 * self::PI * $this->radius;// 2 Пи умножить на радиус
    }
}
$ci = new Circle(50);
echo $ci->getCircuit() . ' ' . $ci->getSquare();
echo get_class($ci) . '<br>';

?><br>
<?php
class Test101
{
    public function method1()
    {

    }
    public function method2()
    {

    }
    public function method3()
    {

    }
}
var_dump(get_class_methods('Test101'));
var_dump(get_declared_classes());