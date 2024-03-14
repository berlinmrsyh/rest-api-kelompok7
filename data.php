<?php

    require_once('helper.php');

    $query = "SELECT * FROM employees order by id desc";
    $sql = mysqli_query($db_connect, $query);

    if ($sql) {
        $result = array();
        while ($row = mysqli_fetch_array($sql)) {
            array_push($result, array(
                'id' => $row['id'],
                'name' => $row ['name'],
                'email' => $row ['email'],
                'position' => $row ['position'],
                'salary' => $row ['salary'],

            ));
        }
    
    echo json_encode (array('result' => $result));

    }

?>


