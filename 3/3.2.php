<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>
</head>
<body>

<h1>Form save to file</h1>

<form method="post">
    <input type="text" name="first">
    <input type="text" name="second">
    <br>
    <input type=submit value="submit" name="submit">
</form>

<?php
if(isset($_POST['submit']))
{

    $first_name=$_POST['first']." ";
    $second_name=$_POST['second']."\n";
    $fp = fopen('test.txt', 'a') or die("Unable to open chosen file");
    fwrite($fp, (string)$first_name);
    fwrite($fp, (string)$second_name);
    fclose($fp);
}

?>
</body>
</html>







