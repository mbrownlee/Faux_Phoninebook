<html>

<body>
    <div class=homepage>
        <h1>Faux Phoninbook</h1>
        <?php
        include_once 'db_sql.php';
        $sql = "SELECT * FROM Region;";

        $result2 = mysqli_query($init, $sql);


        while ($row2 = mysqli_fetch_array($result2)) {
            echo "<h2>" . $row2['region_name'] . "</h2>" . "</br>";
            $query = "SELECT * FROM offices INNER JOIN Region ON Region.id = offices.region_id WHERE Region.id = offices.region_id;";
            $result = mysqli_query($init, $query);
            while ($row = $result->fetch_assoc()) {
                if ($row2['id'] === $row['region_id']) {
                    echo "<a href='office_details.php?id={$row['id']}'>" . $row['office_name'] . "</a>" . "</br>";
                }
            }
        }



        ?>



    </div>
</body>
<style>
    <?php include 'stylesheet.css'; ?>
</style>

</html>