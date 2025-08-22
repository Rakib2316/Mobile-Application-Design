<?php 
echo "Hello world","<br>";
echo 25,"<br>";
echo "OK","<br>";
$color="red";
echo $color;
$num = 20;
echo "<br>My favourite color is $color and ",$num;

$x = 25;
$y = 30;
function myTest(){
    echo "<p> My age is:  $x </p>";
}

myTest();
echo "<p> My roll is:  $x </p>";

function test(){
    global $x, $y;
    $y = $x+$y;
}

test();
echo $y,"<br>";

function mob(){
    static $m=0;
    echo $m;
    $m++;
}

mob();
echo "<br>";
mob();
echo "<br>";

$car = array("Mobile", 25, true, 1);
print_r($car);

// php object

Class car {
    public $color;
    public $model;

    public function __construct($color,$model){
        $this->color = $color;
        $this->model = $model;
    }
    public function message(){
        echo "<br>Car Name : $this->model ."," Car Color: $this->color";
    }
    
}

$mycar = new Car("green","BMW");
$mycar->message();

$z;
var_dump($z);

$t = 5;
$t = (string)$t;
var_dump($t);

echo(rand());
echo("<br>");
define("Name","Dipti");
echo Name;

$Num=45;
echo "<br>","<br>";
if($Num>=40 and $Num<=50){
    echo "Passed";
}

else if ($Num>60 && $Num<=100){
    echo "First Class";
}

else if($Num<40){
    echo "Failed";
}

else
    echo "Invalid number";



$i = 0;
echo "<br>";
while($i<10){
    $i++;
    if($i==5){
        continue;
    }
    echo "$i<br>";
 
}

for($x=10; $x<=100; $x = $x + 10){
    echo "<b>The number is $x </b> <br>";
}

$colors = array("red", "green", "blue", "yellow");

foreach ($colors as $x)
{
    echo "$x <br>";
}


$member =array("Peter"=>"35", "Ben"=>"30", "Joe"=>"43");
foreach($member as $x => $y){
    echo "$x : $y <br>";
}

function sum(...$x){
    $n = 0;
    $len = count($x);

    for($i=0; $i<$len; $i++)
    {
        $n += $x[$i];
    }
    return $n;
}

$a = sum(10,20,30,40);
echo($a);
echo "<br>";
$cars = array("Volvo", "BMW", "Toyota");
echo count($cars);
array_push($cars, "Food");
print_r($cars);
$car = array("brand"=>"Ford", "model"=>"Mustang", "year"=>1964);
echo $car["model"];
$car["year"] = 2024;
print_r($car);

$arr = ["BMW", 25];
print_r($arr);
echo "<br>";
echo "<br>";
$cars = array("Volvo", "BMW", "Toyota");
print_r($cars[0]);
echo $cars[2];
array_splice($cars, 0, 1);
print_r($cars);
$vehicle = array("Volvo", "BMW", "Toyota");
unset($vehicle[1]);
print_r($vehicle);

$cars = array(
    array("Volvo",22,18),
    array("BMW",15,13),
    array("Saab",5,2),
    array("Land Rover",17,15)
);
echo "<br>";
echo $cars[0][0], ": Stock= ", $cars[0][1], ", Sold = ", $cars[0][2];

//echo $cars[0][0].": In stock: ".$cars[0][1].", sold: ".$cars[0][2].".<br>";



?>


