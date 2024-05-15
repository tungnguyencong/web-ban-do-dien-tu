<?php
 $url='localhost';
$username = "root";
$password = "";
$dbname = "wiroshop";
$conn = mysqli_connect($url, $username, $password, $dbname);
/* Check connection */
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

    $query =  "SELECT * from footer where TrangThai= 1 ";
        $result =mysqli_query($conn,$query);

        $return=mysqli_fetch_array($result);

        echo $return['NoiDung']; 
 ?>