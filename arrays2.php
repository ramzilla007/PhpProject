<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

define("PI", "3.14");
echo PI;


$monthlist = array("January"=>31, "February"=>28, "March"=>31, "April"=>30, "May"=>31, "June"=>30, "July"=>31, "August"=>31, "September"=>30, "October"=>31, "November"=>30, "December"=>31);
$string = "30 days has ";
foreach ($monthlist as $month => $day){
	if ($day == 30){
		$string .= "$month, ";
        }
}
$string .= " all the rest (";
foreach ($monthlist as $month => $day){
	if ($day == 31){
		$string .= "$month, ";
        }
}
$string .= ") have 31, except ";

$keys = array_keys($monthlist);
$values = array_values($monthlist);
//echo "keys: $keys[1], ";
//echo "value: $values[1]";

foreach ($monthlist as $month => $day){
	if ($day == 28){
		$string .= "$month, ";
        }
}

$string .= "which has 28";
echo $string;