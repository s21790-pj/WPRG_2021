<?php
$a = readline('Enter number A: ');
$b = readline('Enter number B: ');

while ($a <= 0 || $b <=0){
    $a = readline('Enter number A: ');
    $b = readline('Enter number B: ');
}

print('Addition: ' . ($a + $b)."\n");
print('Subtraction: ' . ($a - $b)."\n");
print('Multiplication: ' . $a*$b."\n");
print('Modulo division: ' . $a%$b);





