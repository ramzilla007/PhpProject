<?php

/* 
 * To change this license header, choose License Headers in Project Properties. 
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

$weather = $_GET["weather"];
$temp = $_GET["temperature"];

if ($weather == "sunny" && $temp > 70){
    echo 'Hello World!! :):):):):):)';
}
else if ($weather == "sunny" && $temp <= 70){
    echo 'Hello World!! :):)';
}
else if ($weather == "cloudy"){
    echo 'Hello World!! :|';
}
else {
    echo 'Hello World :(';
}
echo "<br>";
$foods = array("fruit" => "apple", "vegetable" => "broccoli", "nut" => "cashew");

foreach ($foods as $food => $name){
    echo "$food: $name <br>";
}

echo "<pre>";
print_r($foods);
var_dump($foods);



?>