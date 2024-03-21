<?php

require_once 'SchoolTripList.php';

$schoolTripList = new SchoolTripList();
$schoolTripList->addStudent(new Student('Koningstein', '', '', ''));
$schoolTripList->addStudent(new Student('', 'Alex', 'sod2a', 'Nee'));
$schoolTripList->addStudent(new Student('', 'Gerard', 'sod2a', 'Ja'));
$schoolTripList->addStudent(new Student('', 'Liam', 'sod2b', 'Ja'));
$schoolTripList->addStudent(new Student('Brugge', '', '', ''));
$schoolTripList->addStudent(new Student('', 'Yadira', 'sod2b', 'Ja'));
$schoolTripList->addStudent(new Student('', 'Omar', 'sod2a', 'Nee'));
$schoolTripList->addStudent(new Student('', 'Isabella', 'sod2b', 'Ja'));
$schoolTripList->addStudent(new Student('Drimmelen', '', '', ''));
$schoolTripList->addStudent(new Student('', 'Lucas', 'sod2b', 'Nee'));
$schoolTripList->addStudent(new Student('', 'Chardy', 'sod2a', 'Ja'));


$schoolTripList->render();