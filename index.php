<?php
/**
 * Created by PhpStorm.
 * User: osvgud
 * Date: 2018-10-14
 * Time: 13:16
 */

require 'vendor/autoload.php';

$machine = new \osvgud\Machine();
$robot = new \osvgud\Robot();
echo $machine->speak(); // super class function when nulls are given
echo $robot->speak(function () {  // test callable type
    return "Callable test";
});
echo $robot->speak(); // subclass function when nulls are given
echo $robot->speakrobot(); // function when nulls are given
echo $robot->speakrobot("robot can speak", 7, 8, 9, 10, 25, 36, 4); //variadic function
echo $machine->languagecheck(); // PHP-AI method