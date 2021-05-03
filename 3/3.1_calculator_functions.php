<?php
function addition($first_number, $second_number) {
    return $first_number + $second_number;
}

function subtraction($first_number, $second_number) {
    return $first_number - $second_number;
}

function multiplication($first_number, $second_number) {
    return $first_number * $second_number;
}

function division($first_number, $second_number) {
    if ($second_number == 0){
        print_r("Don't divide by zero");
    } else {
        return $first_number / $second_number;
    }
}