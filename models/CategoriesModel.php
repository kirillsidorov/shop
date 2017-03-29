<?php

/*
 * Model for table Categories
 */


function getAllCatsWithChildren()
{
    include '../config/db.php';

    $sql = 'SELECT * FROM categories WHERE parent_id = 0';

    $result = $conn->query($sql);
    $smartyRs = array();

    if ($result->num_rows > 0) {
        // output data of each row
        while ($row = $result->fetch_assoc()) {
            //echo "id: " . $row["id"] . " - Name: " . $row["name"] . " " . "<br>";
            $smartyRs[] = $row;
        }
    }
    $conn->close();
    return $smartyRs;
}
