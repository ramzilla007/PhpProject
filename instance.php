<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

include 'classes.php';

$newcar = new car();
$newcar1 = new car();

echo "<br>";
echo $newcar->checkLights();
//var_dump($newcar);
$newcar->turnLightsOn();

echo "<br>";
echo $newcar->checkLights();

echo "<br>";
echo $newcar->getModelYear();
//echo $newcar->lights;
//var_dump($newcar);