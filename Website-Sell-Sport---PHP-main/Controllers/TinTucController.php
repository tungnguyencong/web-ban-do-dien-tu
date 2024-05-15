<?php
require_once("Models/tintuc.php");
class TinTucController{
	 var $tintuc_model;
    public function __construct()
    {
        $this->tintuc_model = new TinTuc();
    }

    function list(){
    	 $data_danhmuc = $this->tintuc_model->danhmuc();

        $data_chitietDM = array();

        for($i=1; $i <=count($data_danhmuc);$i++){
            $data_chitietDM[$i] = $this->tintuc_model->chitietdanhmuc($i);
        }

        $id=$_GET['id'];

        $data_tintuc = $this->tintuc_model->detail_tintuc($id);
        $data_all=$this->tintuc_model->detail_all();
         $data_menu=$this->tintuc_model->menu(0,5);
         $data_menu1=$this->tintuc_model->menu(5,5);
          $data_logo=$this->tintuc_model->logo();
        
         require_once('Views/index.php');
    }
    function list2(){
         $data_danhmuc = $this->tintuc_model->danhmuc();

        $data_chitietDM = array();

        for($i=1; $i <=count($data_danhmuc);$i++){
            $data_chitietDM[$i] = $this->tintuc_model->chitietdanhmuc($i);
        }
          $data_all=$this->tintuc_model->detail_all();
        $data_menu=$this->tintuc_model->menu(0,5);
         $data_menu1=$this->tintuc_model->menu(5,5);
          $data_logo=$this->tintuc_model->logo();
        
         require_once('Views/index.php');
    }

} 
 ?>