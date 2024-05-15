<?php
include 'connect.php';

$coupon_code=$_POST['madonhang'];

$query=mysqli_query($conn,"select * from hoadon where MaHD='$coupon_code'");
$row=mysqli_fetch_array($query);

$query2=mysqli_query($conn,"select * from chitiethoadon where MaHD='$coupon_code'");
$row2 = mysqli_fetch_array($query2);

if (mysqli_num_rows($query)>0 && mysqli_num_rows($query2) > 0 ){

	$data=array(
				"statusCode"=>200,
				"MaHD" =>$row['MaHD'],
				"NgayLap"=>$row['NgayLap'],
				"NguoiNhan"=>$row['NguoiNhan'],
				"SDT"=>$row['SDT'],
				"Email"=>$row['Email'],
				"TongTien"=>$row['TongTien'],
				"TrangThai"=>$row['TrangThai'],
				"DiaChi"=>$row['DiaChi'],
			);
}
else{
	$data=array("statusCode"=>201);
}
echo json_encode($data);

?>