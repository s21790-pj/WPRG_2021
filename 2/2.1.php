<!doctype html>
<html>
    <head>
        <meta charset="UTF-8"/>
        <title>Page title.</title>
    </head>
    <body>
        <p><b>Calculator</b></p>
        <form>
            <input type="number" required name="num_1">
            <input type="number" required name="num_2">
            <br><br>
            <select name="type_of_operation">
                <option>Addition</option>
                <option>Subtraction</option>
                <option>Multiplication</option>
                <option>Division</option>
            </select>
            <input type="submit">
        </form>
    </body>
</html>

<?php
$num_1 = $_REQUEST['num_1'];
$num_2 = $_REQUEST['num_2'];
$type_of_action = strtolower($_REQUEST['type_of_operation']);

switch ($type_of_action){
    case 'addition':
        print($num_1 . " + " . $num_2 . (" = " . ($num_1 + $num_2)));
        break;
    case 'subtraction':
        print($num_1 . " - " . $num_2 . (" = " . ($num_1 - $num_2)));
        break;
    case 'multiplication':
        print($num_1 . " * " . $num_2 . (" = " . ($num_1 * $num_2)));
        break;
    case 'division':
        if($num_2 == 0){
            print("Don't divide by zero!");
        }else{
            print($num_1 . " / " . $num_2 . (" = " . ($num_1 / $num_2)));
        }
}
?>


