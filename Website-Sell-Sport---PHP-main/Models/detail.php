<?php
require_once("model.php");
class Detail extends Model
{

    function detail_sp($id)
    {
        $query =  "SELECT * from SanPham where MaSP = $id ";
        $result = $this->conn->query($query);
        return $result->fetch_assoc();
    }
   function saveRating($POST, $userID){		
		$query = "INSERT INTO item_rating (MaSP, MaND, ratingNumber, title, comments, created, modified) VALUES ('".$POST['itemId']."', '".$userID."', '".$POST['rating']."', '".$POST['title']."', '".$POST["comment"]."', '".date("Y-m-d H:i:s")."', '".date("Y-m-d H:i:s")."')";
		 $result = $this->conn->query($query);
       
	}
   function getdanhgianguoidung($id){
     $query =  "SELECT `MaND` from item_rating where MaSP= $id ";
        $result = $this->conn->query($query);
        return $result->fetch_assoc();
   }
   
}