<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class car{
    private $year = 2015;
    private $model;
    private $make;
    private $color;
    private $lights = "off";
    
    function turnLightsOn(){
        $this->lights = "on";
    }
    function checkLights(){
        return $this->lights;
    }
    function getModelYear(){
        return $this->year;
    }
}

