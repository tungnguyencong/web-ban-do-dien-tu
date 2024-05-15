<?php
require_once("MVC/Models/tintuc.php");
class TinTucController{
	var $tintuc_model;
	function __construct()
	{
		$this->tintuc_model = new  tintuc();
	}

	public function list()
	{
		$data = array();
		$data = $this->tintuc_model->All(); 
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
        $target_dir = "../public/image/tintuc/";  // thư mục chứa file upload
        $HinhAnh = "";

        $target_file = $target_dir . basename($_FILES["image"]["name"]); // link sẽ upload file lên

        $status_upload = move_uploaded_file($_FILES["image"]["tmp_name"], $target_file);

        if ($status_upload) { // nếu upload file không có lỗi 
            $HinhAnh = basename($_FILES["image"]["name"]);
        }
        date_default_timezone_set('Asia/Ho_Chi_Minh');
		$NgayBD =  date('Y-m-d H:i:s');
		$data = array(
			'title'=>$_POST['title'],
			'image'=>$HinhAnh,
			'tieude'=>$_POST['tieude'],
			'posts'=>$_POST['posts'],
			'tieude'=>$_POST['tieude'],
			'date'=>$NgayBD,
			
		);
		foreach ($data as $key => $value) {
            if (strpos($value, "'") != false) {
                $value = str_replace("'", "\'", $value);
                $data[$key] = $value;
            }
        }
		$this->tintuc_model->store($data);
	}
	public function detail()
	{
		$id = isset($_GET['id']) ? $_GET['id'] : 5;
		$data = $this->tintuc_model->find($id);
		require_once("MVC/Views/Admin/index.php");
		//require_once('MVC/views/categories/detail.php');
	}
	public function delete()
	{
		if (isset($_GET['id'])) {
			$this->tintuc_model->delete($_GET['id']);
		}
	}
	public function edit()
	{
		$id = isset($_GET['id']) ? $_GET['id'] : 1;
		$data = $this->tintuc_model->find($id);
		require_once("MVC/Views/Admin/index.php");
		//require_once('MVC/views/categories/edit.php');
	}
	public function update()
	{
         $target_dir = "../public/image/tintuc/";  // thư mục chứa file upload
        $HinhAnh = "";

        $target_file = $target_dir . basename($_FILES["image"]["name"]); // link sẽ upload file lên

        $status_upload = move_uploaded_file($_FILES["image"]["tmp_name"], $target_file);

        if ($status_upload) { // nếu upload file không có lỗi 
            $HinhAnh = basename($_FILES["image"]["name"]);
        }
         date_default_timezone_set('Asia/Ho_Chi_Minh');
		$NgayBD =  date('Y-m-d H:i:s');
       
		$data = array(
			'id' => $_POST['id'],
			'title'=>$_POST['title'],
			'image'=>$HinhAnh,
			'tieude'=>$_POST['tieude'],
			'posts'=>$_POST['posts'],
			'tieude'=>$_POST['tieude'],
			'date'=>$NgayBD,
			
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
       
		$this->tintuc_model->update($data);
	}
} 
 ?>