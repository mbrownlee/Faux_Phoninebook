<html>
<style>
    .btn {
        background-color: blue;
        color: white;
    }
    .btn:hover {
        background-color: lightblue;
        color: black;
    }
</style>
    <?php


    include_once 'db_sql.php';
    if (isset($_GET['id'])) {
        $id = mysqli_real_escape_string($init, $_GET['id']);
        $query2 = "SELECT * FROM staff INNER JOIN offices ON offices.id = staff.office_id WHERE offices.id = '$id';";


        $result2 = mysqli_query($init, $query2);
        $row2 = mysqli_fetch_array($result2);
        echo "<h3>" . $row2['office_name'] . "</h3>";



        $sql = "SELECT * FROM offices INNER JOIN staff ON offices.id = staff.office_id WHERE offices.id = '$id';";
        $result = mysqli_query($init, $sql);

        while ($row = mysqli_fetch_array($result)) {
            echo $row['name'] . " " . $row['title'] . "</br>";
        }
    }

    ?>
    </br>
    </br>
    </br>
        
    <form action="index.php">
        <button type="submit" name="submit" value="submit" class="btn">Home</button>


</html>