<!doctype html>
<html>
<head>
    <meta charset="UTF-8"/>
    <title>Page title.</title>
</head>
<body>
<p><b>Booking Hotel</b></p>
<form action="3.3.php" method="post">
    <p>Number of persons:</p>
    <select name="number_of_persons" required>
        <option value="1">1</option>
        <option value="2">2</option>
        <option value="3">3</option>
        <option value="4">4</option>
    </select>
    <br><br>
    <p><b>Booking person's details</b></p>
    <input type="text" required name="first_name" placeholder="First Name">
    <br>
    <input type="text" required name="last_name" placeholder="Last Name">
    <br>
    <input type="text" required name="address" placeholder="Address">
    <br>
    <input type="number" required name="credit_card" placeholder="Credit card number">
    <br>
    <input type="email" required name="email" placeholder="Email address">
    <br>
    <input type="date" required name="start_date" placeholder="Arrival date">
    <input type="date" required name="end_date" placeholder="Date of departure">
    <br><br>
    <input type="submit" value="Send data to csv file">
</form>
<?php
if(isset($_POST["number_of_persons"]) && isset($_POST["first_name"]) && isset($_POST["last_name"]) &&
   isset($_POST["address"]) && isset($_POST["credit_card"]) && isset($_POST["email"]) &&
   isset($_POST["start_date"]) && isset($_POST["end_date"])){
    $number_of_persons = $_POST["number_of_persons"];
    $first_name = $_POST["first_name"];
    $last_name = $_POST["last_name"];
    $address = $_POST["address"];
    $credit_card = $_POST["credit_card"];
    $email = $_POST["email"];
    $start_date = $_POST["start_date"];
    $end_date = $_POST["end_date"];

    $data = array($number_of_persons, $first_name, $last_name, $address, $credit_card, $email, $start_date, $end_date);

    if(!$fp = fopen('save_data.csv', 'a')){
        echo "File cannot be opened";
    }else{
        fputcsv($fp, $data);
        fclose($fp);
    }
}
?>
<form action="3.3.php" method="post">
    <label>
        <tr>
            <br><br>
            <td><input type="submit" value="Show data from csv" name="data_show"/></td>
        </tr>
    </label>
</form>

<?php
if (isset($_POST["data_show"])) {
    if (($handle = fopen("save_data.csv", "r")) !== FALSE) {
        while (($data = fgetcsv($handle, 1000, ",")) !== FALSE) {
            $num = count($data);
            echo "<br />";
            for ($i = 0; $i < $num; $i++) {
                echo $data[$i] . "<br />\n";
            }
        }
        fclose($handle);
    }
}
?>


</body>
</html>
