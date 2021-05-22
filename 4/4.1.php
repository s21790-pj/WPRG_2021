<!doctype html>
<html>
<head>
    <meta charset="UTF-8"/>
    <title>Page title.</title>
</head>
<body>
<p><b>Booking Hotel</b></p>
<?php
session_start();
echo('
<article>
    <form action="4.1.php" method="POST">
    <p>Number of persons:</p>
        <select name="number_of_persons">
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
        </select>
        <input type="submit" name="send_number_of_persons" value="Send">
    </form>
</article>
    ');
if (isset($_POST['number_of_persons'])){
    $number_of_persons = $_POST['number_of_persons'];
    setcookie("number_of_persons", $number_of_persons, time()+60+60+24+28);
    function number_of_forms($number_of_persons) {
        echo ('
        <form action="4.1.php" method="POST">
            <input type="hidden" value="'.$number_of_persons.'" name="number_of_persons"/>            
            <br><br>
            <p><b>Booking persons details</b></p>
            <input type="text" required name="first_name0" placeholder="First Name">
            <br>
            <input type="text" required name="last_name0" placeholder="Last Name">
            <br>
            <input type="text" required name="address0" placeholder="Address">
            <br>
            <input type="number" required name="credit_card" placeholder="Credit card number">
            <br>
            <input type="email" required name="email0" placeholder="Email address">
            <br>
            <input type="date" required name="start_date" placeholder="Arrival date">
            <input type="date" required name="end_date" placeholder="Date of departure">
            <br>
            <input type="checkbox" id="child_bed" name="child_bed" value="child_bed">
				<label for="infantBed">Bed for child</label><br>
            <br>                  
            ');
        if ($number_of_persons > 1) {
            echo ('<form>');
            for($i=1; $i<$number_of_persons; $i++){
                echo('
                        <br>
                        <h3>'.($i+1).' Personal details</h3>
                        <label>Your name: <input type="text" name="first_name'.$i.'"></label>
                        <br>
                        <label>Your last name: <input type="text" name="last_name'.$i.'"></label>
                        <br>
                        <label>Your emial: <input type="email" name="email'.$i.'"></label>
                        <br>                
                ');
            }
        }
        echo ('
            <br>
            <input type="submit" name="submit_data" value="Send" ">
            </form>    
    ');
    }
    number_of_forms($number_of_persons);
}
if(isset($_POST['submit_data'])){
    $number_of_persons = $_POST['number_of_persons'];

    echo('<h2> Reservation information </h2><br>');
    for($i = 0; $i < $number_of_persons; $i++) {
        echo ('<h3> Person: '. $_POST['first_name'.$i].' '.$_POST['last_name'.$i]. '</h3>');

        if($i==0) {
            echo 'Address: ' . $_POST['address'.$i] . '<br>';
            echo 'Credit card number: ' . $_POST['credit_card'] . '<br>';
            echo 'Email: ' . $_POST['email'.$i] . '<br>';
            echo 'Arrival date: ' . $_POST['start_date'] . '<br>';

            if (isset($_POST['child_bed'])) {
                echo 'Bed for child: Yes<br>';
            } else {
                echo 'Bed for child: No<br>';
            }
        } else {
            echo 'Email: ' . $_POST['email'.$i] . '<br>';
        }
    }
}

session_destroy();
?>
</body>
</html>
