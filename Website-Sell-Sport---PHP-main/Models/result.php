<?php 
$result = $this->conn->query($query);

$data = array();

while ($row = $result->fetch_assoc()) {
    $data[] = $row;
}
mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
?>

