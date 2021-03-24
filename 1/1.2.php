<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title></title>
    <meta name="author" content="">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body>
    <form method="post">
        <p>A: <input type="number" name="a"></p>
        <p>B: <input type="number" name="b"></p>
        <p><input type="submit"></p>
    </form>
    <?php
        echo 'Rectangle area: '.$_POST['a']*$_POST['b'];
    ?>

</body>

</html>

