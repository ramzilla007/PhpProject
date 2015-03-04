<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


$monthlist = array("January"=>31, "February"=>28, "March"=>31, "April"=>30, "May"=>31, "June"=>30, "July"=>31, "August"=>31, "September"=>30, "October"=>31, "November"=>30, "December"=>31);
function dayLookup($days){
	global $monthlist;
	foreach ($monthlist as $month => $day){
            if ($day == $days){
                    $string .= "$month, ";
            }
        }
	return $string;
}
$string = "30 days has ".dayLookup(30)." all the rest (".dayLookup(31).") have 31, except ".dayLookup(28)."which has 28.";
echo $string;


