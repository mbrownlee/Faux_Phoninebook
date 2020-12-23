<html>

<body>
    <div class=homepage>
        <h1>Faux Phoninbook</h1>
        <?php
        include_once 'db_sql.php';
        $query = "SELECT Region.region_name, offices.office_name, offices.region_id FROM offices INNER JOIN Region ON Region.id = offices.region_id;";

        // $q = "SELECT * FROM Region JOIN offices ON Region.id  = offices.region_id ORDER BY Region.id";
        $result = mysqli_query($init, $query);
        
       
        while ($row = mysqli_fetch_array($result)) {
            echo $row['region_name'] . " " . "<a href='office_details.php'>" . $row['office_name'] . "</a>" . "</br>";
            
        }
       
        
    

        ?>


    </div>
</body>
<style>
    <?php include 'stylesheet.css'; ?>
</style>

</html>