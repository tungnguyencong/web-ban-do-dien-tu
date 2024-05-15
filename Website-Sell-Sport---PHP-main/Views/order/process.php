<?php
include 'connect.php';
$coupon_code=$_POST['makm'];
$query=mysqli_query($conn,"select * from khuyenmai where MaKM='$coupon_code' and TrangThai=1");
$row=mysqli_fetch_array($query);
if (mysqli_num_rows($query)>0){

	$data=array(
				"statusCode"=>200,
				"value"=>(int)$row['GiaTriKM'],
			);
}
else{
	$data=array("statusCode"=>201);
}
echo json_encode($data);



?>