<?php
namespace App;

require_once "trait.php";

//$animal = new Animal('Муся');
//$animal->sayHi();
//echo $animal->skills;
//echo Animal::$names;

class Animal
{
    use Export;
    use Export2;
    public static $names = 'asd';
    public $name;
    protected $poroda = "nyasha";
    private $skills = 'bite';

    public function __construct($name)
    {
        $this->name = $name;
    }

    public static function getPoroda()
    {
        return "asdasdasd";
    }

    public function getSkills()
    {
        return $this->skills;
    }

    public function setSkills($skills)
    {
        $this->skills = $skills;
    }

    public function move()
    {
        echo $this->name . " походил";
    }

    public function sayHi($what = null)
    {
        if (!empty($what)) {
            echo $what;
        } else {
            echo "Бур-бур";
        }
    }
}


//namespace =>> class =>> function => variables