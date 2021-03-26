<?php
$arr1 = [];
$arr2 = [];
$arr1_len = readline('Enter length of array 1: ');
$arr2_len = readline('Enter length of array 2: ');
$len_diff = ($arr1_len-$arr2_len);

for($i=0; $i<$arr1_len; $i++){
    $arr1[$i] = readline('Enter value: ');
}
for($i=0; $i<$arr2_len; $i++){
    $arr2[$i] = readline('Enter value: ');
}

$scalar_product = 0;

if($len_diff == 0){
    for($i=0; $i<$arr1_len; $i++){
        $scalar_product += $arr1[$i]*$arr2[$i];
    }
    print("Scalar product: ".$scalar_product);
}else{
    print('BŁĄD');
}



