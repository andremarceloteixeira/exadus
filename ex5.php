<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

$rand = (float) rand() / (float) getrandmax();
var_dump($rand);
if ($rand > 0.5) {
    include("design1.php");
} elseif (($rand > 0.25) && ($rand < 0.5)) {
    include("design2.php");
} else {
    include("design3.php");
};
