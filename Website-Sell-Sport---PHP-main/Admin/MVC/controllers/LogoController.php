<?php
require_once("MVC/Models/logo.php");
class LogoController
{
	var $logo_model;
	function __construct()
	{
		$this->logo_model = new Logo();
	}

	public function list()
	{
		$data = array();
		$data = $this->logo_model->All(); 
		require_once("MVC/Views/Admin/index.php");
		//require_once('MVC/views/categories/list.php');
	}

	public function add()
	{
		require_once("MVC/Views/Admin/index.php");
		//require_once('MVC/views/categories/add.php');
	}
	public function store()
	{
        $target_dir = "../public/image/icon/";  // thư mục chứa file upload

        $HinhAnh = "";

        $target_file = $target_dir . basename($_FILES["HinhAnh"]["name"]); // link sẽ upload file lên

        $status_upload = move_uploaded_file($_FILES["HinhAnh"]["tmp_name"], $target_file);

        if ($status_upload) { // nếu upload file không có lỗi 
            $HinhAnh = basename($_FILES["HinhAnh"]["name"]);
        }

         $TrangThai = 0;
        if (isset($_POST['TrangThai'])) {
            $TrangThai = $_POST['TrangThai'];
        }

		$data = array(
			'image' =>  $HinhAnh,
			'width' =>  $_POST['chieurong'],
			'height' =>  $_POST['chieucao'],
			'TrangThai'=> $TrangThai,
		);
		foreach ($data as $key => $value) {
            if (strpos($value, "'") != false) {
                $value = str_replace("'", "\'", $value);
                $data[$key] = $value;
            }
        }
		$this->logo_model->store($data);
	}
	public function detail()
	{
		$id = isset($_GET['id']) ? $_GET['id'] : 5;
		$data = $this->logo_model->find($id);
		require_once("MVC/Views/Admin/index.php");
		//require_once('MVC/views/categories/detail.php');
	}
	public function delete()
	{
		if (isset($_GET['id'])) {
			$this->logo_model->delete($_GET['id']);
		}
	}
	public function edit()
	{
		$id = isset($_GET['id']) ? $_GET['id'] : 1;
		$data = $this->logo_model->find($id);
		require_once("MVC/Views/Admin/index.php");
		//require_once('MVC/views/categories/edit.php');
	}
	public function update()
	{
         $target_dir = "../public/image/icon/";  // thư mục chứa file upload
        $HinhAnh = "";

        $target_file = $target_dir . basename($_FILES["HinhAnh"]["name"]); // link sẽ upload file lên

        $status_upload = move_uploaded_file($_FILES["HinhAnh"]["tmp_name"], $target_file);

        if ($status_upload) { // nếu upload file không có lỗi 
            $HinhAnh = basename($_FILES["HinhAnh"]["name"]);
        }

         $TrangThai = 0;
        if (isset($_POST['TrangThai'])) {
            $TrangThai = $_POST['TrangThai'];
        }

       
        
		$data = array(
			'Id' => $_POST['id'],
			'image' =>  $HinhAnh,
			'width' =>  $_POST['chieurong'],
			'height' =>  $_POST['chieucao'],
			'TrangThai'=>$TrangThai,
		);
		foreach ($data as $key => $value) {
            if (strpos($value, "'") != false) {
                $value = str_replace("'", "\'", $value);
                $data[$key] = $value;
            }
        }
         if ($HinhAnh == "") {
           unset($data['image']);
        }
        
		$this->logo_model->update($data);
	}
}
