<?php

require_once 'Bicycle.php';
require_once 'Car.php';
require_once 'vehicle.php';
require_once 'Truck.php';


$bike = new Bicycle('red', 1);
var_dump($bike);
$bike->setCurrentSpeed(0);
var_dump($bike);

echo $bike->Forward();
echo '<br> Vitesse du vélo : ' . $bike->getCurrentSpeed() . 'km/h <br>';
echo $bike->Brake();
echo '<br> Vitesse du vélo : ' . $bike->getCurrentSpeed() . ' km/h';
echo $bike->Brake();


$tuture = new Car('blue', 5, 'diesel');
var_dump($tuture);






$bicycle = new Bicycle('blue', 1);
echo $bicycle->forward();
var_dump($bicycle);

var_dump(Car::ALLOWED_ENERGIES);


$truck1 = new Truck(16, 'yellow', 2, 'fuel');

echo $truck1->forward();
echo $truck1->brake();
echo $truck1->setStorage(16);
echo $truck1->isFull();

// echo $tuture->setParkBrake(true);
echo "<br><br><br>";
try {
    $tuture->setParkBrake(false);
} catch (Exception $hasParkBrake) {
    echo 'Exception received :' . $hasParkBrake->getMessage();
}finally{
    echo 'Fin!';
}


$volkswagen = new Car('black', 4, 'gasoline');
$volkswagen->setCurrentSpeed(0);
var_dump($volkswagen);
echo $volkswagen->start(false);
try {
    $volkswagen->setParkBrake(true);
} catch (Exception $hasParkBrake) {
    echo 'Exception received :' . $hasParkBrake->getMessage();
}finally{
    echo 'Ma voiture roule comme un donut';
}