Конструктор объекта в ООП на PHP<br>
<?php
class Employee
{
    public $name;
    public $age;
    public $salary;
    public function __construct($name, $age, $salary)
    {
        $this->name = $name;
        $this->age = $age;
        $this->salary = $salary;
    }
}
$emp = new Employee('Eric', 25,1005);
$emp2 = new Employee('Kyle', 34,1456);
echo $emp->salary + $emp2->salary;
?><br>
Работа с геттерами и сеттерами в ООП на PHP<br>
<?php
class Employee1
{
    private $name;
    private $age;
    private $salary;
    public function __construct($name, $age, $salary)
    {
        $this->name = $name;
        $this->age = $age;
        $this->salary = $salary;
    }
    public function isAgeCorrect($age) {
        if ($age>=1 and $age<=100) {
            return true;
        }else {
            return false;
        }
    }
    public function getAge() {
        return $this->age;
    }
    public function getName() {
        return $this->name;
    }
    public function getSalary() {
        return ($this->salary).'$';
    }
    public function setAge($age) {
        if ($this->isAgeCorrect($age)) {
            $this->age = $age;
        }
    }
    public function setName($name) {

        $this->name = $name;
    }
    public function setSalary($salary) {
        $this->salary = $salary;
    }
}
$emp = new Employee1('Eric', 25,1005);
$emp2 = new Employee1('Kyle', 34,1456);
echo ($emp->getName()) . '-'. ($emp->getAge()) .'-'. ($emp->getSalary()).'<br>';
$emp->setAge(90);
echo $emp->getAge()
?><br>
Свойства только для чтения в ООП на PHP<br>
<?php
class Employee2
{
    private $name;
    private $surname;
    private $salary;

    public function __construct($name, $surname, $salary)
    {
        $this->name =$name;
        $this->surname =$surname;
        $this->salary =$salary;
    }
    public function getName() {
        return $this->name;
    }
    public  function  getSurname() {
        return $this->surname;
    }
    public function getSalary() {
        return $this->salary;
    }
    public function setSalary($salary) {
        $this->salary = $salary;
    }
}
$emp_1 = new Employee2('gosha',36,700);
echo $emp_1->getName();
echo $emp_1->getSalary();
$emp_1->setSalary(60);
echo $emp_1->getSalary();
?><br>
<?php
$usr = new User123('John', 25);
$usr2 = new User123('Judie', 32);
$usr3 = new User123('Hoolie', 20);
$users[] = $usr;
$users[] = $usr2;
$users[] = $usr3;
var_dump($users);
?><br>
Здесь также можно избавится от промежуточных переменных:

<?php
$users = [
    new User123('john', 21),
    new User123('eric', 22),
    new User123('kyle', 23)
];

var_dump($users);
?><br>
<?php
$city1 = new City('Chelyabinsk', 1150000);
$city2 = new City('Chelrnigov', 465000);
$city3 = new City('Melburn', 2310000);
$city4 = new City('Paris', 4670000);
$city5 = new City('London', 8195000);

$arr_cities = [$city1, $city2, $city3, $city4, $city5];

foreach ($arr_cities as $city) {
    echo ($city->name) .' '. ($city->population) . '<br>';
}
?>
Начальные значения свойств в конструкторе<br>
<?php
class Student
{
    private $name;
    private $course;
    public function __construct($name)
    {
        $this->name = $name;
        $this->course = 1;
    }

    public function getName() {
        return $this->name;
    }
    public function getCourse() {
        return $this->course;
    }
    public function transferToNextCourse() {
        if ($this->isCourseCorrect()) {
            $this->course++;
        }
    }
    private function isCourseCorrect() {
        if ($this->course>0 and $this->course<5) {
            return true;
        }else {
            return false;
        }
    }
}
?><br>
Начальные значения свойств в конструкторе<br>
<?php
class Arr
{
    public $numbers = [];
    public function addNum($arr){
        $this->numbers = $arr;
    }
    public function getSum() {
        return array_sum($this->numbers);
    }

}
$ar = new Arr();
$ar->addNum([1,2,4]);
echo $ar->getSum()
?><br>
Переменные названия свойств объектов в PHP<br>
<?php
class User
{
    public $name;
    public $age;

    public function __construct($name, $age)
    {
        $this->name = $name;
        $this->age = $age;
    }
}


$user = new User('john', 21);

$prop = 'name';
echo $user->$prop; // выведет 'john'
?>