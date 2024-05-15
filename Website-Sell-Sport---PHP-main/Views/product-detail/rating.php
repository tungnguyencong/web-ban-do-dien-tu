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

if(isset($_POST['action']) 
	&& isset($_SESSION['login']) 
	&& isset($_POST['rating']) 
	&& isset($_POST['itemId'])) {

	$userID = $_SESSION['login']['MaND'];
	$masp= $_POST['itemId'];
	$rating=$_POST['rating'];
	$title=$_POST['title'];
	$comment=$_POST['comment'];


$query2=mysqli_query($conn,"INSERT INTO `item_rating` (`MaSP`, `MaND`, `ratingNumber`, `title`, `comments`, `created`, `modified`) VALUES ('".$masp."','".$userID."','".$rating."','".$title."','".$comment."', '".date("Y-m-d H:i:s")."', '".date("Y-m-d H:i:s")."')");

		 if($query2=true){
		 	$data = array(
		 		"success" => 1,   
		 	);
		 }else{
		 	$data = array(
		 		"success" => 0,   
		 	);
		 }
		 echo json_encode($data);  


		}
 ?>