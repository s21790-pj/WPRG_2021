<!doctype html>
<html>
<head>
    <meta charset="UTF-8"/>
    <title>Page title.</title>
</head>
<body>
<p><b>Booking Hotel</b></p>
<form>
    <p>Number of persons:</p>
    <select name="number_of_persons">
        <option>1</option>
        <option>2</option>
        <option>3</option>
        <option>4</option>
    </select>
    <br><br>
    <p><b>Booking person's details</b></p>
    <input type="text" required name="first_name" placeholder="First Name">
    <br>
    <input type="text" required name="second_name" placeholder="Second Name">
    <br>
    <input type="text" required name="address" placeholder="Address">
    <br>
    <input type="number" required name="credit_card" placeholder="Credit card number">
    <br>
    <input type="email" required name="email" placeholder="Email address">
    <br>
    <input type="date" required name="start_date" placeholder="Arrival date">
    <input type="date" required name="end_date" placeholder="Date of departure">
    <br>
    <p>Bed for a child:</p>
    <input type="radio" id="child_bed" name="bed_for_child_yes">
    <label for="child_bed">Yes</label>
    <input type="radio" id="child_bed" name="bed_for_child_yes">
    <label for="child_bed">No</label>
    <br>

    <br><br>
    <input type="submit">
</form>
</body>
</html>
