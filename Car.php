<?php
class Car
{
    private $make_model;
    private $price;
    private $miles;

    function __construct($car_model, $car_price, $car_miles)
    {
      $this->make_model = $car_model;
      $this->price = $car_price;
      $this->miles = $car_miles;
    }

    function getMakeModel()
    {
      return $this->make_model;
    }

    function setMakeModel($new_model)
    {
      $this->make_model = (string) $new_model;
    }

    function getPrice()
    {
      return $this->price;
    }

    function setPrice($new_price)
    {
      $this->price = (integer) $new_price;
    }

    function getMiles()
    {
      return $this->miles;
    }

    function setMiles()
    {
      $this->miles = (integer) $new_miles;
    }
}

$porsche = new Car("2014 Porsche 911", 114991, 7864);
$ford = new Car("2011 Ford F450", 55995, 14241);
$lexus = new Car("2013 Lexus RX 350", 44700, 20000);
$mercedes = new Car("Mercedes Benz CLS550", 39900, 37979);

$cars = array($porsche, $ford, $lexus, $mercedes);

$cars_matching_search = array();
foreach ($cars as $car) {
    if ($car->getPrice() < $_GET["price"] && $car->getMiles() < $_GET["miles"]) {
        array_push($cars_matching_search, $car);
    }
}

?>

<!DOCTYPE html>
<html>
<head>
    <title>Your Car Dealership's Homepage</title>
</head>
<body>
    <h1>Your Car Dealership</h1>
    <ul>
        <?php
            foreach ($cars_matching_search as $car) {
                $new_car_price = $car->getPrice();
                $new_car_model = $car->getMakeModel();
                $new_car_miles = $car->getMiles();
                echo "<li> $new_car_model </li>";
                echo "<ul>";
                  echo "<li> $$new_car_price </li>";
                  echo "<li> Miles: $new_car_miles </li>";
                echo "</ul>";
            }
        ?>
    </ul>
</body>
</html>
