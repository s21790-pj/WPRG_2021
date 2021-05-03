<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Calculator_3</title>
</head>
<body>

<h1>Calculator</h1>

<form method="post">
<input name="first_num">
<input name="second_num">
<br>
<select name="method">
    <option value="add">Addition</option>
    <option value="sub">Subtraction</option>
    <option value="multi">Multiplication</option>
    <option value="div">Division</option>
</select>
<input type=submit value="calculate" name="calculate">
</form>

<?php

if(isset($_POST["calculate"]) && isset($_POST["first_num"]) && isset($_POST["second_num"])) {
    $firstNumber=$_POST["first_num"];
    $secondNumber=$_POST["second_num"];
    $calculate=$_POST["method"];
    include("3.1_calculator_functions.php");
    switch ($calculate) {
        case "add":
            echo addition($firstNumber, $secondNumber);
            break;

        case "sub":
            echo subtraction($firstNumber, $secondNumber);
            break;

        case "multi":
            echo multiplication($firstNumber, $secondNumber);
            break;

        case "div":
            echo division($firstNumber, $secondNumber);
    }
}
?>

</body>
</html>