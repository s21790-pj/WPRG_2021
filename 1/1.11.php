<?php
$alphabet = "a b c d e f g h i j k l m n o p q r s t u v w x y z";
$isPanagram = false;
$chars = explode(" ", $alphabet);

$x = readline("Enter the sentence: ");
$x_arr = str_split($x);

foreach ($x_arr as $char){
    if(ctype_alpha($char)){
        if(ctype_upper($char)){
            $char = strtolower($char);
        }
        $key=array_search($char, $chars);
        if($key !== false){
            unset($chars[$key]);
        }
    }
}

if(!$chars){
    $isPanagram = true;
}

if($isPanagram == true){
    print('The sentence is a paragram');
}else{
    print('The sentence is not a paragram');
}

