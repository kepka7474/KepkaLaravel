Введение в классы и объекты в PHP<br>
<?php
class Hinge_hands {
    public $masterka_color;
    public $twist_by_hand;
    public $hand_rotation;
    public $twist_by_face;
    public $face_rotation;

    public function hinges_joints() {
        return $this->twist_by_hand;
    }
    public function evil_look($arg) {
        return $arg . 'RRRRRRRRRR HAU HAU HAU';

    }
    public function eat_sunflower_seeds(){

    }
    public function face_trading() {

    }
}
?>

<?php
$nash = new Hinge_hands();
$nash -> hand_rotation = 39;
$nash->face_trading();
echo $nash->evil_look('calculate the risks');
?><br>
<?php
class User {
    public $name;
    public $age;
    public function show($str) {
        return $str . '!!!';
    }
}
$user = new User;
$user->name = 'john'; // записываем имя в свойство name
$user->age = 25; // записываем возраст в свойство age

echo $user->name; // выводим записанное имя
echo $user->age; // выводим записанный возраст
echo $user->show('hey')
?><br>
<?php
class Employee {
    public $name;
    public $age;
    public  $salary;
    public function getName() {
        return $this->name;
    }
    public function getAge() {
        return $this->age;
    }
    public function getSalary(){
        return $this->salary;
    }
    public function checkAge(){
        if ($this->age>18) {
            return true;
        } else {
            return false;
        }
    }
}
$emp_1 = new Employee;
$emp_1->name = 'john';
$emp_1->age = 4;
$emp_1->salary = 350;
echo '!' . $emp_1->checkAge().'<br>';
echo $emp_1->name . ' - ' .$emp_1->age . ' - '. $emp_1->salary . '<br>';
echo "name: $emp_1->name, age: $emp_1->age, salary: $emp_1->salary".'<br>';
$emp_2 = new Employee;
$emp_2->salary = 130;
$emp_2->name ='Igor';
$emp_2->age = 32;
echo "name: $emp_2->name, age: $emp_2->age, salary: $emp_2->salary <br>";
echo ($emp_2->salary + $emp_1->salary).'<br>';
echo ($emp_2->age + $emp_1->age).'<br>';
echo $emp_1->getSalary() + $emp_2->getSalary();

?><br>
Обращение к свойствам класса через $this<br>
Запись свойств<br>
<?php
class User1 {
    public $name;
    public $age;
    public function setAge($age) {
        $this->age = $age;
    }
}
$usa = new User1;
$usa->name = 'joe';
$usa->age = 25;
$usa->setAge(30);
?><br>
<?php
class Employeee {
    public $name;
    public $salary;
    public function doubleSalary() {
        $this->salary *= 2;
    }
}
$woker = new Employeee;
$woker->salary = 450;
$woker->name = 'Ghost';
echo 'zp'.  ($woker->salary). '<br>';
$woker->doubleSalary();
echo $woker->salary.'<br>';
$woker->doubleSalary();
echo $woker->salary.'<br>';
?><br>

<?php
class Rectangle {
    public $width;
    public  $heigth;
    public function getSquare() {
        return ($this->width * $this->heigth);

    }
    public function getPerimeter() {
        return ($this->width*2 + $this->heigth*2);
    }
}
?><br>
Обращение к методам класса через $this<br>
<?php
class User_2
{
    public $name;
    public $age;
    public function isAgeCorrect($age){
        if ($age >= 18 and $age <=60) {
            return true;
        }else {
            return false;
        }
    }

    // Метод для изменения возраста юзера:
    public function setAge($age)
    {
        // Если возраст от 18 до 60:
        if ($this->isAgeCorrect($age)) {
            $this->age = $age;
        }
    }
    public function addAge($years) {
        $newAge = $this->age + $years;
        if ($this->isAgeCorrect($newAge))
            $this->age = $newAge;
    }
}
?><br>
<?php
class Ubuser
{
    public $name;
    public $age;

    public function setAge($age) {
        if ($this->isAgeCorrect($age)) {
            $this->age = $age;
        }
    }
    public function addAge($years) {
        $newAge = $this->age + $years;
        if ($this->isAgeCorrect($newAge)) {
            $this->age = $newAge;
        }
    }
    public function subAge($years) {
        $newAge = $this->age-$years;
        if ($this->isAgeCorrect($newAge)){
            $this->age=$newAge;
        }
    }
    private function isAgeCorrect($age){
        if ($age>=18 and $age<=60) {
            return true;
        }else {
            return false;
        }
    }
}
$usar = new Ubuser;
$usar->setAge(31);
echo 'usar'.$usar->age.'<br>';
$usar->setAge(11);
echo 'usar'.$usar->age.'<br>';
$usar->addAge(25);
echo 'usar'.$usar->age.'<br>';
$usar->addAge(1);
echo 'usar'.$usar->age.'<br>';
$usar->subAge(21);
echo 'usar'.$usar->age.'<br>';
$usar->subAge(12);
echo 'usar'.$usar->age.'<br>';

?><br>
<?php
class Student
{
    public $name;
    public $course;
    public function transferToNextCourse() {
        $t_c = $this->course;
        if ($this->isCourseCorrect()) {
            $this->course++;
        }

    }
    private function isCourseCorrect() {
        $co = $this->course;
        if ($co >= 1 and $co <5) {
            return true;
        }else {
            return false;
        }
    }

}
$studen = new Student;
$studen->course = 4;
echo ($studen->course) . '<br>';
$studen->transferToNextCourse();
echo ($studen->course) . '<br>';
$studen->transferToNextCourse();
echo ($studen->course) . '<br>';
?>

