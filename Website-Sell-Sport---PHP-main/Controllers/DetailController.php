<?php
require_once("Models/Detail.php");
class DetailController
{
    var $detail_model;
    public function __construct()
    {
       $this->detail_model = new Detail();
    }
    
    function list()
    {

        $data_danhmuc = $this->detail_model->danhmuc();

        $data_chitietDM = array();

        for($i=1; $i <=count($data_danhmuc);$i++){
            $data_chitietDM[$i] = $this->detail_model->chitietdanhmuc($i);
        }

        $id = $_GET['id'];

        $data = $this->detail_model->detail_sp($id);

        if($data!=null){
        $data_lq = $this->detail_model->sanpham_danhmuc(0,4,$data['MaDM']);
        $data_hot=$this->detail_model->sanpham_danhmuc(0,8,$data['MaDM']);
        $data_rating=$this->detail_model->getItemRating($id);
         $data_rating1=$this->detail_model->getRatingAverage($id);
         $data_danhgia=$this->detail_model->getDanhgia($id);    
        
        }
         $data_menu=$this->detail_model->menu(0,5);
         $data_menu1=$this->detail_model->menu(5,5);
          $data_logo=$this->detail_model->logo();
        require_once('Views/index.php');
    }
    function add_rating(){
        if(!empty($_POST['action']) && $_POST['action'] == 'saveRating' 
    && !empty($_SESSION['login']) 
    && !empty($_POST['rating']) 
    && !empty($_POST['itemId'])) {
        $userID = $_SESSION['login']['MaND'];  
        $data1=$this->detail_model->saveRating($_POST, $userID);
        if($data1==true){   
        $data = array(
            "success"   => 1,   
        );
    }
        echo json_encode($data);  


}
}
}