<html>
    <head>
        <body>
            <?php
            if (!$db = mysqli_connect("localhost", "root", "password", "wpr_db")) {
                exit("Failed to connect to the database");
            } else {
                echo "Successful connection to the database";
            }
            echo "</br>";
            $query = "select * from temp_table";
            if(!$result = mysqli_query($db, $query)) {
                echo "Failed";
            } else {
                echo "Succeed";
            }
            echo "</br>";
            while ($rows = mysqli_fetch_row($result)) {
                foreach ($rows as $row) {
                    echo $row;
                    echo "</br>";
                }
            }
            if($result = mysqli_query($db, $query)) {
                $row_num = mysqli_num_rows($result);
                printf("There are %d records\n", $row_num);
            }
            echo "</br>";
            $result = mysqli_query($db, $query);
            while ($r = mysqli_fetch_array($result)) {
                echo $r['name']."</br>";
            }
            echo "</br>";
            $insert = 'INSERT INTO temp_table(name, category) VALUES ("temp movie", "Action")';
            if(mysqli_query($db, $insert)){
                echo "Record added successfully";
            } else {
                echo "Failed";
            }
            echo "</br>";
            $rows_num = mysqli_affected_rows($db);
            echo "Number of records added: $rows_num"
            ?>
        </body>
    </head>
</html>


