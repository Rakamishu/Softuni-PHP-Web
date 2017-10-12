<?php 

include "Car.php";
include "Truck.php";

$car_info = trim(fgets(STDIN));
$truck_info = trim(fgets(STDIN));
$n = trim(fgets(STDIN));

list($car_fuel_quantity, $car_l_per_km) = $car_info;
list($truck_fuel_quantity, $truck_l_per_km) = $truck_info;

$car = new Car($car_fuel_quantity, $car_l_per_km);
$truck = new Truck($truck_fuel_quantity, $truck_l_per_km);

for($i = 0; $i < $n; $i++)
{
    $input = explode(" ", trim(fgets(STDIN)));
    list($command, $vehicle, $param) = $input;
    
        if($command == "Refuel" && $vehicle == "Car")
        {
            $car->refuel($param);
        }
        elseif($command == "Drive" && $vehicle == "Car")
        {
            echo $car;
        }
        elseif($command == "Refuel" && $vehicle == "Truck")
        {
            $truck->refuel($param);
        }
        elseif($command == "Drive" && $vehicle == "Truck")
        {
            echo $truck;
        }
}

echo "Car: {$car->getFuel()}" . PHP_EOL;
echo "Truck: {$truck->getFuel()}";

var_dump($car);