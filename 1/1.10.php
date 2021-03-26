<?php
$num = readline('Enter number: ');

while ($num <= 0){
    $num = readline('Enter number: ');
}

function draw($x){
    for($_=1; $_<=$x; $_++){
        for($__=1; $__<=$_; $__++){
            print('*');
        }
        print("\n");
    }
    for($_=$x; $_>=1; $_--){
        for($__=1; $__<=$_; $__++){
            print('*');
        }
        print("\n");
    }
    for($_=$x; $_>0; $_--){
        for($__=$_; $__<$x; $__++){
            print(' ');
        }
        for($___=0; $___<$_;$___++){
            print('*');
        }
        print("\n");
    }
    for($_=0; $_<$x; $_++){
        for($__=$x; $__>$_+1; $__--){
            print(' ');
        }
        for($___=0; $___<=$_; $___++){
            print('*');
        }
        print("\n");
    }
}

draw($num);