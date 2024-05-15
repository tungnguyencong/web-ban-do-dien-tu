<?php
require_once("connection.php");
class model
{
    private $itemUsersTable = 'nguoidung';  
    private $itemRatingTable = 'item_rating';
    private $itemKhuyenmaiTable='khuyenmai';
    private $itemSanphamTable='sanpham';
    var $conn;
    function __construct()
    {
        $conn_obj = new connection();
        $this->conn = $conn_obj->conn;
    }
    function limit($a, $b)
    {
        $query =  "SELECT * from sanpham WHERE TrangThai = 1  ORDER BY ThoiGian DESC limit $a,$b";

        require("result.php");

        return $data;
    }
    function danhmuc()
    {
        $query =  "SELECT * from DanhMuc ";

        require("result.php");
        
        return $data;
    }
    function chitietdanhmuc($id)
    {
        $query =  "SELECT d.TenDM as Ten, l.* FROM danhmuc as d, loaisanpham as l WHERE d.MaDM = l.MaDM and d.MaDM = $id";

        require("result.php");
        
        return $data;
    }

    function loaisanpham($id)
    {
        $query =  "SELECT d.TenDM as Ten, l.* FROM danhmuc as d, loaisanpham as l WHERE d.MaDM = l.MaDM and d.MaDM = $id";

      
    }
 function getDanhgia($id){
         $query =  "SELECT * from item_rating where MaSP = $id ";
        require("result.php");
        
        return $data;
    }

    function random($id)
    {
        $query = "SELECT * FROM SanPham WHERE TrangThai = 1 ORDER BY RAND () LIMIT $id";
        require("result.php");
        
        return $data;
    }
    function banner($a,$b)
    {
        $query =  "SELECT * from Banner  limit $a,$b";

        require("result.php");
        
        return $data;
    }
    function menu($a,$b){
        $query="SELECT * FROM menu limit $a,$b";
         require("result.php");
        
        return $data;
    }
    function menu1($a,$b){
        $query="SELECT * FROM menu limit $a,$b";
         require("result.php");
        
        return $data;
    }
   function logo(){
     $query =  "SELECT * from logo where TrangThai= 1 ";
        $result = $this->conn->query($query);
        return $result->fetch_assoc();
   }
    function blog($a,$b){
        $query="SELECT * from tintuc limit $a,$b";
        require("result.php");
        return $data;
    }
   
    function sanpham_danhmuc($a, $b, $danhmuc)
    {
        $query =   "SELECT * from sanpham WHERE TrangThai = 1  and MaDM = $danhmuc ORDER BY ThoiGian DESC limit $a,$b";

        require("result.php");
        
        return $data;
    }
    function getItemRating($itemId){
        $query = "
            SELECT r.ID, r.MaSP, r.MaND, u.HoTen, u.avatar, r.ratingNumber, r.title, r.comments, r.created, r.modified
            FROM ".$this->itemRatingTable." as r
            LEFT JOIN ".$this->itemUsersTable." as u ON (r.MaND = u.MaND)
            WHERE r.MaSP = '".$itemId."'";

        require("result.php");
        
        return $data; 
    }

    function getRatingAverage($itemId){
        $itemRating = $this->getItemRating($itemId);
        $ratingNumber = 0;
        $count = 0;     
        foreach($itemRating as $itemRatingDetails){
            $ratingNumber+= $itemRatingDetails['ratingNumber'];
            $count += 1;            
        }
        $average = 0;
        if($ratingNumber && $count) {
            $average = $ratingNumber/$count;
        }
        return $average;    
    }
    function check_makm1($makm){
        $query="SELECT * from khuyenmai WHERE MaKM = $makm and TrangThai=1";
              require("result.php");
        return $data; 
    }
    function get_hoadon($manguoidung){
        $query="SELECT * from hoadon WHERE MaND = $manguoidung ORDER BY NgayLap DESC LIMIT 1";
        require("result.php");
        return $data;
    }
     function get_hoadon1($manguoidung){
        $query="SELECT * from hoadon WHERE MaND = $manguoidung ";
        require("result.php");
        return $data;
    }
     function get_hoadon2($mahoadon){
        $query="SELECT * from hoadon WHERE MaHD = $mahoadon ";
        require("result.php");
        return $data;
    }
    function get_chitiethoadon($mahoadon){
        $query="SELECT * from chitiethoadon WHERE MaHD = $mahoadon ";
        require("result.php");
        return $data;
    }
    
}
