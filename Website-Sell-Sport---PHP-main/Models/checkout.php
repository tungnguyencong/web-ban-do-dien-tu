<?php
require_once("model.php");
class Checkout extends Model
{
  function save($data){
    $f = "";
    $v = "";
    foreach ($data as $key => $value) {
        $f .= $key . ",";
        $v .= "'" . $value . "',";
    }
    $f = trim($f, ",");
    $v = trim($v, ",");
    $query = "INSERT INTO HoaDon($f) VALUES ($v);";
    
    $status = $this->conn->query($query);

    $query_mahd = "SELECT MaHD from hoadon ORDER BY NgayLap DESC LIMIT 1";

    $data_mahd = $this->conn->query($query_mahd)->fetch_assoc();

if(isset($_SESSION['sanpham'])){

     foreach ($_SESSION['sanpham'] as $value) {

        $MaSP =$value['MaSP'];

        $SoLuong = $value['SoLuong'];

        $DonGia = $value['DonGia'];

         $Loai = "'".$value['Loai']."'";

          $Size = "'".$value['Size']."'";

        $TenSP = "'".$value['TenSP']."'";

        $HinhAnh = "'".$value['HinhAnh1']."'";;

        $ThanhTien = $value['ThanhTien'];

        $MaHD = $data_mahd['MaHD'];

        $query_ct = "INSERT INTO `chitiethoadon`(`MaHD`, `MaSP`, `SoLuong`, `DonGia`,`Loai`,`Size`, `HinhAnh`, `TenSP`, `ThanhTien`) VALUES ($MaHD,$MaSP,$SoLuong,$DonGia,$Loai,$Size,$HinhAnh,$TenSP,$ThanhTien)";

        $status_ct = $this->conn->query($query_ct);
    }
    
    }
    
    if ($status == true and $status_ct == true) {
        unset($_SESSION['sanpham']);
        setcookie('msg', 'Đặt đơn hàng thành công', time() + 2);
        header('location: ?act=checkout&xuli=order_complete');

    } else {
        setcookie('msg', 'Đăng ký không thành công', time() + 2);
        header('location: ?act=checkout');
    }
  }
 
}