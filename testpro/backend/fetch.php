<?php
require 'dbroot.php';

$sql = "SELECT * FROM transaction";
$res = $link->query($sql);
$data = [];

while($row = $res->fetch_assoc()){
    array_push($data,$row);
}

echo json_encode($data);

?>