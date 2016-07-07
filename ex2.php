<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
$array = [];
for ($i = 1; $i <= 500; $i++) {
    $array[$i] = rand(1,500);
}
$originalarray = $array;

foreach ($array as $key => $element) {
    //determine arbitry element
    $value = rand(1, 500);
    echo  $value."==". $element. "<br/>";
    if($value == $element) {
        //remove this
        unset($array[$key]);
    }
}

echo "Missing Elements<br/>";
var_dump(array_diff($originalarray, $array));




