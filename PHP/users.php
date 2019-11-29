<?php
    function showUsers() {
        include 'connect.php';

        $sql = "SELECT * FROM klanten ";
        $result = $conn->query($sql);

        if ($result->num_rows > 0)  {
            while($row = $result->fetch_assoc()) {
                echo $row['ID'];
                echo $row['Voorletter'];
            }
        }


    }
<? 