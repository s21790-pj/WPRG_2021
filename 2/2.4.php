<!doctype html>
<html>
<head>
    <meta charset="UTF-8"/>
    <title>Page title.</title>
</head>
<body>
<h1>Prime number check</h1>
    <form action="2.4.php" method="post">
        <p>Input your number:</p>
        <input type="number" min="0" name="num">
        <br>
        <br>
        <input type="submit" name="number_verification" value="Submit">
    </form>

<?php

if(isset($_POST['number_verification'])){
    if (is_numeric($_POST['num']) && ($_POST['num']) > 0) {

        $num = ($_POST['num']);
    } else {
        echo("<br>Enter only natural number");
    }
}

function isPrimeNumber($num) {
    if($num == 1){
        return false;
    }
    if($num == 2){
        return true;
    }

    $_ = sqrt($num);
    $_ = floor($_);
    $counter = 1;
    for($i=2; $i<=$_; $i++){
        $counter++;
        if($num % $i == 0) {
            break;
        }
    }

    if($_ == $i-1){
        print("Num of iteration: ".$counter."<br>");
        return true;
    }else {
        print("Num of iteration: ".$counter."<br>");
        return false;
    }

}

if(isPrimeNumber($num)){
    print("The number ".$num." is prime");
}else{
    print("The number ".$num." is not prime");
}


?>
</body>
</html>
