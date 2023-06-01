<?php
echo "Hello World <br>";

$myNameIs = "My name is";
$myNameIs.= " Dima";
echo $myNameIs . '<br>';


$person = array(
    'name' => 'John',
    'age' => 30,
    'city' => 'New York'
);

$person['age'] = 31;
$person['city'] = 'San Francisco';

echo $person['name'] . '<br>';
echo $person['age'] . '<br>';
echo $person['city'] . '<br>';

foreach ($person as $key => $value) {
    echo $key . ': ' . $value . '<br>';
}

$fruitsStr = "apple,banana,orange";
$fruits = explode(",", $fruitsStr);
print_r($fruits);
$fruitsStr2 = implode(", ", $fruits);

echo "<br>" . $fruitsStr2 . "<br>";


// Розіменування масиву та виведення його елементів
$numbers_array = array(1, 2, 3);
list($number1, $number2, $number3) = $numbers_array;
echo $number1 . "<br>";
echo $number2 . "<br>";
echo $number3 . "<br>";

$zero = 0;
$null = null;

echo "<br>Приведення типів:<br>";
// Порівняння змінних з приведенням типів
if ($zero == $null) {
    echo $zero . " та " . $null . " рівні<br>";
} else {
    echo $zero . " та " . $null . " не рівні<br>";
}


$null_int = (int)$null;
echo "Null в цілочисельному типі: " . $null_int . "<br>";

class Rectangle {

    private $width;
    private $height;

    public function __construct($width, $height) {
        $this->width = $width;
        $this->height = $height;
    }

    public function getArea() {
        return $this->width * $this->height;
    }
    public function calcArea() {
        echo "Площа прямокутника: " . $this->width * $this->height  . ".<br>";
    }

    public function calcPerimeter() {
        echo "Периметр прямокутника: " . ($this->width + $this->height) * 2 . "<br>";
    }
}

$yard = new Rectangle(3, 5);

$yard->calcArea();
$yard->calcPerimeter();

class Cube extends Rectangle {

    private $length;

    public function __construct($width, $height, $length) {
        parent::__construct($width, $height);
        $this->length = $length;
    }

    public function calcVolume() {
        echo "Об'єм куба: " . $this->getArea() * $this->length  . ".<br>";
    }
}

$box = new Cube(3, 5, 8);
$box->calcArea();
$box->calcVolume();


class Singleton {
private static $instance;

private function __construct() {}

private function __clone() {}

public static function getInstance() {
    if (!isset(self::$instance)) {
        self::$instance = new self;
    }
    return self::$instance;
}
}

$singl1 = Singleton::getInstance();

$singl2 = Singleton::getInstance();

if ($singl1 === $singl2) {
    echo "<br> Це один і той же об'єкт. <br>";
} else {
    echo "<br> Це різні об'єкти.<br>";
}