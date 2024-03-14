<?php
require_once('helper.php');
parse_str(file_get_contents('php://input'), $value);

$id = $value['id'];
$name = isset($value['name']) ? $value['name'] : null;
$email = isset($value['email']) ? $value['email'] : null;
$position = isset($value['position']) ? $value['position'] : null;
$salary = isset($value['salary']) ? $value['salary'] : null;

$query = "UPDATE employees SET ";
$updateArray = array();

if (!is_null($name)) {
    $updateArray[] = "name='$name'";
}
if (!is_null($email)) {
    $updateArray[] = "email='$email'";
}
if (!is_null($position)) {
    $updateArray[] = "position='$position'";
}
if (!is_null($salary)) {
    $updateArray[] = "salary='$salary'";
}

$updateStr = implode(", ", $updateArray);

$query .= $updateStr . " WHERE id='$id'";

$sql = mysqli_query($db_connect, $query);

if ($sql) {
    echo json_encode(array('message' => 'Employee Updated'));
} else {
    echo json_encode(array('message' => 'Employee Not Updated'));
}
?>
