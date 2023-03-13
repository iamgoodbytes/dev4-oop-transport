<?php
    include_once("bootstrap.php");

    $car = new Car();
    $car->setBrand("Tesla");
    $car->setYear("2023");
    $car->setDoors("5");
    $car->book();   // this should print 'booked a car' (or save the booing to the database)
    echo $car;      // this should print 'Tesla 2023 with 5 doors'

    $bike = new Bike();
    $bike->setBrand("Merckx");
    $bike->setYear("2020");
    $bike->setBattery("700");
    $bike->book();   // this should print 'booked a bike' (or save the booing to the database)
    echo $bike;      // this should print 'Merckx 2020 with 700 battery'


    // todo: add the Truck
    // todo: make the book() function save data to the database
    // todo: create a load() function that loads the data from the database


?>