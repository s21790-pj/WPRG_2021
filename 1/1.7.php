<?php
$a=readline('Enter number between 1-12: ');
if($a < 0 || $a > 12){
    while($a < 1 || $a > 12){
        echo 'BŁĄD'."\n";
        $a=readline('Enter number between 1-12: ');
    }
}
switch ($a){
    case 1:
    case 3:
    case 5:
    case 7:
    case 8:
    case 10:
    case 12: echo '31'; break;
    case 2: echo '28'; break;
    case 4:
    case 6:
    case 9:
    case 11: echo '30'; break;
}

