<?php
$num_rows = readline('Enter number of rows: ');
$num_columns = readline('Enter number of columns: ');
$matrix = array(array());

if($num_rows <= 0 or $num_columns <= 0 ){
    print ('BŁĄD');
}

for($i=0; $i<$num_rows; $i++){
    for($j=0; $j<$num_columns; $j++){
        $matrix[$i][$j] = readline('Enter the value: ');
    }
}

print ('Before: '."\n");
for($i=0; $i<$num_rows; $i++){
    for($j=0; $j<$num_columns; $j++){
        print($matrix[$i][$j]." ");
    }
    print("\n");
}

print ('After: '."\n");
for($i=0; $i<$num_columns; $i++){
    for($j=0; $j<$num_rows; $j++){
        print($matrix[$j][$i]." ");
    }
    print("\n");
}
