<?php
abstract class Animals
{
    public const COUNT_PAWS = 4;
    private const COUNT_HEALTH = 9;
    const MAX_ANIMAL_SIZE = 82;
    const MIN_ANIMAL_SIZE = 4;
    const ANIMAL_BOX_SIZE = 84;

    public $animalType;
    public $animalPaws;
    public $animalTail;
    public $animalFur;

    private array $animalHeart = [];
    private $animalSpine;
    private $animalLiver;
    private $animalKidneys;
    private $animalThyroid;

    public function __construct($animalType, $animalPaws, $animalFur, $animalTail)
    {
        $this->animalType = $animalType;
        $this->animalFur = $animalFur;
        $this->animalPaws =$animalPaws;
        $this->animalTail = $animalTail;
    }


    public function getHeartInfo()
    {
        return $this->animalHeart;
    }
    public function setHeartInfo($arg)
    {
        return $this->animalHeart = $arg;
    }
    public function getLiverInfo()
    {
        return $this->animalLiver;
    }
    public function setLiverInfo($arg)
    {
        return $this->animalLiver = $arg;
    }
    public function getKidneysInfo()
    {
        return $this->animalKidneys;
    }
    public function setKidneysInfo($arg)
    {
        return $this->animalKidneys = $arg;
    }
    public function getThyroidInfo()
    {
        return $this->animalThyroid;
    }
    public function setThyroidInfo($arg)
    {
        return $this->animalThyroid = $arg;
    }


    public function animalFeeding($food)
    {

    }
    public function animalStroking($hand)
    {

    }
    public function animalWalking($xCoord, $yCoord)
    {

    }
    private function animalDigestion($gastricJuice)
    {

    }
    private function  animalSecreteHormones(): int
    {

    }

    abstract public function checkPet($name);

}

class AnimalStatic
{
    public static $animalTable;
    public static $animalFormBlanks;
    public static $animalFrameView;

    public static function animalsPreview($previewColor)
    {
        echo $previewColor;
    }
    public static function animalsTypesCount()
    {
        echo 'Animal types ....';
    }

    public static function animalFrameAnimation()
    {
        return 'Naglyadnost -> ';
    }


}

abstract class Pets extends Animals
{
   public $petsType;

   public function __construct($animalType, $animalPaws, $animalFur, $animalTail)
   {
       parent::__construct($animalType, $animalPaws, $animalFur, $animalTail);
   }
   public function checkPet($name)
   {
       echo 'Hello' . $name;
   }


   abstract public function toiletTeach();
}

class Cat extends Pets
{
    public $catBreed;
    public $catName;
    public $catDiet = 'kolbasa kalinka';
    public function __construct($catName, $catBreed, $animalType,
                                $animalPaws, $animalFur, $animalTail)
    {
        parent::__construct( $animalType, $animalPaws, $animalFur, $animalTail);

        $this->catBreed = $catBreed;
        $this->catName = $catName;
    }

    private $catHealth = 9;

    public function catIsLive()
    {
        if ($this->catHealth > 0)
        {
            echo 'the cat is alive';
        }else {
            echo 'the cat is die';
        }

    }
    public  function catCalling($name)
    {

    }
    public function toiletTeach()
    {
        return 'Scr Scr Scr ......';
    }
    public function catClaws()
    {
        return Cat::COUNT_PAWS*5;
    }
}
$fox = new Cat('Sunny', 'Seam', 'cat',
    2,'long', 'cat tail');
echo $fox->catBreed;
?>
