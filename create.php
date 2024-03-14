<?php

    require_once('helper.php');

    $name = $_POST['name'];
    $email = $_POST['email'];
    $position = $_POST['position'];
    $salary = $_POST['salary'];

    $query = "INSERT INTO employees (name, email, position, salary) VALUES ('$name', '$email', '$position', '$salary')";
    $sql = mysqli_query($db_connect, $query);

    if ($sql) {
        echo json_encode (array('message' => 'Employee Added'));
    } else {
        echo json_encode (array('message' => 'Employee Not Added'));
    }

?>

