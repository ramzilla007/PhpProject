<?php
setcookie("class1", "php");
?>
<html>
<pre>
<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

print_r($_SERVER);
print_r($_GET);
print_r($_POST);
print_r($_FILES);
print_r($_COOKIE);
print_r($_SESSION);
print_r($_REQUEST);
print_r($_ENV);

$class1 = $_COOKIE['class1'];

function weirdfunction($x, $y, $z, $a='', $b='', $c=''){
    echo $a;
}

weirdfunction($x, $y, $z, $a='', $b);
