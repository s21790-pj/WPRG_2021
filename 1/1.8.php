<?php
$a = readline('Enter number A: ');
$b = readline('Enter number B: ');
$c = readline('Enter number C: ');

while ($a <= 0 || $b <=0){
    $a = readline('Enter number A: ');
    $b = readline('Enter number B: ');
    $c = readline('Enter number C: ');
}

function replace(&$x, &$y){
    $tmp = $x;
    $x = $y;
    $y = $tmp;
}

if($a > $b) replace($a, $b);
if($b > $c) replace($b, $c);
if($a > $b) replace($a, $b);
print($a.' '.$b.' '.$c."\n");
print($c.' '.$b.' '.$a);

