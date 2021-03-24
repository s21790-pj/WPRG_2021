<?php
$a = readline('Enter number A: ');
$b = readline('Enter number B: ');

while ($a <= 0 || $b <=0){
    $a = readline('Enter number A: ');
    $b = readline('Enter number B: ');
}

echo 'Addition: ' . ($a + $b)."\n";
echo 'Subtraction: ' . ($a - $b)."\n";
echo 'Multiplication: ' . $a*$b."\n";
echo 'Modulo division: ' . $a%$b;





