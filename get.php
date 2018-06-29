<?php
if ($_SERVER['REQUEST_METHOD'] === 'GET') {

  $conn = new mysqli("localhost", "root", "", "db2");
  mysqli_set_charset($conn,"utf8");
  $result = $conn->query("SELECT * FROM orders  order by OrderID ASC");
  $outp = array();
  while($row = $result->fetch_assoc()){
    array_push($outp, $row);
  }

  $res['users'] = $outp;
  //$outp = $result->fetch_all(MYSQLI_ASSOC);
  header("Content-type: application/json");
  echo json_encode($res);
  die();

}//GET METHOD

else if ($_SERVER['REQUEST_METHOD'] === 'POST') {

  $data = json_decode(file_get_contents('php://input'),true);
  $info=$data["infoInsert"];
  foreach ($info as $key => $value) {
    $name = $value['name'];
    $addr = $value['addr'];
    $conn = new mysqli("localhost", "root", "", "db2");
    mysqli_set_charset($conn,"utf8");
    $sql = "INSERT INTO `orders` (`OrderID`, `OrderDate`, `UserID`, `Name`, `Address`, `Tel`, `Paid`, `Delivery`) VALUES (NULL, '2018-05-21 10:15:37', '12', '".$name."', '".$addr."', '0839622842', 'No', 'No');";
    $conn->query($sql);
  }

}//POST METHOD

else if ($_SERVER['REQUEST_METHOD'] === 'PUT') {
  echo "PUT";
}//PUT METHOD

else if ($_SERVER['REQUEST_METHOD'] === 'DELETE') {
  if(isset($_GET["id"])){
    $id = $_GET["id"];
  }

  $conn = new mysqli("localhost", "root", "", "db2");
  mysqli_set_charset($conn,"utf8");
  $sql = "DELETE FROM orders WHERE OrderID = '".$id."' ";
  $conn->query($sql);


}//DELETE METHOD

?>
