<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
for ($i = 1; $i <= 100; $i++) {
    if ($i % 3 == 0 && $i % 5 == 0) {
        echo "FizzBuzz" . "<br/>";
    } else if ($i % 3 == 0) {
        echo "Fizz" . "<br/>";
    } else if ($i % 5 == 0) {
        echo "Buzz" . "<br/>";
    } else {
        echo $i . "<br/>";
    }
}

