<?php


$conn = new mysqli("localhost", "root", "", "db2");
mysqli_set_charset($conn,"utf8");
$result = $conn->query("SELECT * FROM orders ");
$outp = array();
$outp = $result->fetch_all(MYSQLI_ASSOC);

echo json_encode($outp,JSON_UNESCAPED_UNICODE);

?>
