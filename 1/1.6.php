<?php
$a = readline('Enter length A: ');
$b = readline('Enter length B: ');
$c = readline('Enter length C: ');

if ($a+$b>$c && $a+$c>$b && $b+$c>$a){
    print('You can build a triangle out of these values');
}else{
    print('BŁĄD');
}