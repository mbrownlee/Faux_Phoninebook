<html>

<body>
    <div class=homepage>
        <h1>Faux Phoninbook</h1>
        <?php
        include_once 'db_sql.php';
        $sql = "SELECT r.id AS regionId, r.region_name FROM Region r;";
        $result2 = mysqli_query($init, $sql);
        
        
        while ($row2 = mysqli_fetch_array($result2)) {
            echo "<h2>" . $row2['region_name'] . "</h2>" . "</br>";
            $q = "SELECT m.id AS managerId, m.name AS areaManager, m.region_id FROM area_manager m INNER JOIN Region r ON r.id = m.region_id WHERE r.id = " . $row2['regionId'];
            $result4 = mysqli_query($init, $q);
            $row4 = $result4->fetch_assoc();
                if ($row['r.id'] === $row4['m.region_id']){
                    echo "AREA MANAGER: " . $row4['areaManager'] . "</br>";
                }
            $query = "SELECT o.id AS officeId, o.office_name, o.region_id FROM offices o INNER JOIN Region r ON r.id = o.region_id WHERE r.id = " . $row2['regionId'];
            $result = mysqli_query($init, $query);
            while ($row = $result->fetch_assoc()) {
              
                if ($row['r.id'] === $row['o.region_id']) {
                    echo "<a href='office_details.php?office_id={$row['officeId']}'>" . $row['office_name']  . "</a>" . "</br>";
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