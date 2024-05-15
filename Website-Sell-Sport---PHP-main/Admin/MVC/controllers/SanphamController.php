<?php
require_once("MVC/Models/sanpham.php");
class SanphamController
{
    var $sanpham_model;
    public function __construct()
    {
        $this->sanpham_model = new sanpham();
    }
    public function list()
    {
        $data = $this->sanpham_model->All();
        require_once("MVC/Views/Admin/index.php");
        // require_once("MVC/Views/posts/list.php");
    }
    public function detail()
    {
        $id = isset($_GET['id']) ? $_GET['id'] : 1;
        $data = $this->sanpham_model->find($id);
        require_once("MVC/Views/Admin/index.php");
        //require_once("MVC/Views/posts/detail.php");
    }
    public function add()
    {
        $data_km = $this->sanpham_model->khuyenmai();
        $data_lsp = $this->sanpham_model->loaisp();
        $data_dm = $this->sanpham_model->danhmuc();
        require_once("MVC/Views/Admin/index.php");
        //require_once("MVC/Views/posts/add.php");
    }
    public function store()
    {
        $target_dir = "../public/image/sanpham/";  // thư mục chứa file upload

        $HinhAnh1 = "";
        $target_file = $target_dir . basename($_FILES["HinhAnh1"]["name"]); // link sẽ upload file lên

        $status_upload = move_uploaded_file($_FILES["HinhAnh1"]["tmp_name"], $target_file);

        if ($status_upload) { // nếu upload file không có lỗi 
            $HinhAnh1 =   basename($_FILES["HinhAnh1"]["name"]);
        }

        $HinhAnh2 = "";
        $target_file = $target_dir . basename($_FILES["HinhAnh2"]["name"]); // link sẽ upload file lên
        $status_upload = move_uploaded_file($_FILES["HinhAnh2"]["tmp_name"], $target_file);
        if ($status_upload) { // nếu upload file không có lỗi 
            $HinhAnh2 =   basename($_FILES["HinhAnh2"]["name"]);
        }

        $HinhAnh3 = "";
        $target_file = $target_dir . basename($_FILES["HinhAnh3"]["name"]); // link sẽ upload file lên
        $status_upload = move_uploaded_file($_FILES["HinhAnh3"]["tmp_name"], $target_file);
        if ($status_upload) { // nếu upload file không có lỗi 
            $HinhAnh3 =   basename($_FILES["HinhAnh3"]["name"]);
        }

         $HinhAnh4 = "";
        $target_file = $target_dir . basename($_FILES["HinhAnh4"]["name"]); // link sẽ upload file lên
        $status_upload = move_uploaded_file($_FILES["HinhAnh4"]["tmp_name"], $target_file);
        if ($status_upload) { // nếu upload file không có lỗi 
            $HinhAnh4 =   basename($_FILES["HinhAnh4"]["name"]);
        }

         $HinhAnh5 = "";
        $target_file = $target_dir . basename($_FILES["HinhAnh5"]["name"]); // link sẽ upload file lên
        $status_upload = move_uploaded_file($_FILES["HinhAnh5"]["tmp_name"], $target_file);
        if ($status_upload) { // nếu upload file không có lỗi 
            $HinhAnh5 =   basename($_FILES["HinhAnh5"]["name"]);
        }

         $HinhAnh6 = "";
        $target_file = $target_dir . basename($_FILES["HinhAnh6"]["name"]); // link sẽ upload file lên
        $status_upload = move_uploaded_file($_FILES["HinhAnh6"]["tmp_name"], $target_file);
        if ($status_upload) { // nếu upload file không có lỗi 
            $HinhAnh6 =   basename($_FILES["HinhAnh6"]["name"]);
        }

         $HinhAnh7 = "";
        $target_file = $target_dir . basename($_FILES["HinhAnh7"]["name"]); // link sẽ upload file lên
        $status_upload = move_uploaded_file($_FILES["HinhAnh7"]["tmp_name"], $target_file);
        if ($status_upload) { // nếu upload file không có lỗi 
            $HinhAnh7 =   basename($_FILES["HinhAnh7"]["name"]);
        }

         $HinhAnh8 = "";
        $target_file = $target_dir . basename($_FILES["HinhAnh8"]["name"]); // link sẽ upload file lên
        $status_upload = move_uploaded_file($_FILES["HinhAnh8"]["tmp_name"], $target_file);
        if ($status_upload) { // nếu upload file không có lỗi 
            $HinhAnh8 =  basename($_FILES["HinhAnh8"]["name"]);
        }

        $TrangThai = 0;
        if (isset($_POST['TrangThai'])) {
            $TrangThai = $_POST['TrangThai'];
        }

        date_default_timezone_set('Asia/Ho_Chi_Minh');
        $ThoiGian =  date('Y-m-d H:i:s');
        $data = array(
            'MaLSP' =>    $_POST['MaLSP'],
            'TenSP'  =>   $_POST['TenSP'],
            'MaDM' => $_POST['MaDM'],
            'DonGia' => $_POST['DonGia'],
            'SoLuong' => $_POST['SoLuong'],
            'HinhAnh1' => $HinhAnh1,
            'HinhAnh2' => $HinhAnh2,
            'HinhAnh3' => $HinhAnh3,
            'HinhAnh4' => $HinhAnh4,
            'HinhAnh5' => $HinhAnh5,
            'HinhAnh6' => $HinhAnh6,
            'HinhAnh7' => $HinhAnh7,
            'HinhAnh8' => $HinhAnh8,
            'Loai1'=>$_POST['Loai1'],
            'Loai2'=>$_POST['Loai2'],
            'Loai3'=>$_POST['Loai3'],
            'Loai4'=>$_POST['Loai4'],
            'Size1'=>$_POST['Size1'],
            'Size2'=>$_POST['Size2'],
            'Size3'=>$_POST['Size3'],
            'Size4'=>$_POST['Size4'],
            'MaKM' =>  $_POST['MaKM'],

            'TrangThai' => $TrangThai,
            'MoTa' =>  $_POST['MoTa'],
            'MoTa1' =>  $_POST['MoTa1'],
            'MoTa2' =>  $_POST['MoTa2'],
            'ThoiGian' => $ThoiGian,
        );
        foreach ($data as $key => $value) {
            if (strpos($value, "'") != false) {
                $value = str_replace("'", "\'", $value);
                $data[$key] = $value;
            }
        }

        $this->sanpham_model->store($data);
    }
    public function delete()
    {
        $id = $_GET['id'];
        $this->sanpham_model->delete($id);
    }
    public function edit()
    {
        $id = isset($_GET['id']) ? $_GET['id'] : 1;
        $data_km = $this->sanpham_model->khuyenmai();
        $data_lsp = $this->sanpham_model->loaisp();
        $data_dm = $this->sanpham_model->danhmuc();
        $data = $this->sanpham_model->find($id);
        require_once("MVC/Views/Admin/index.php");
        //require_once("MVC/Views/posts/edit.php");
    }
    public function update()
    {

        $target_dir = "../public/image/sanpham/";  // thư mục chứa file upload

        $HinhAnh1 = "";
        $target_file = $target_dir . basename($_FILES["HinhAnh1"]["name"]); // link sẽ upload file lên

        $status_upload = move_uploaded_file($_FILES["HinhAnh1"]["tmp_name"], $target_file);

        if ($status_upload) { // nếu upload file không có lỗi 
            $HinhAnh1 =   basename($_FILES["HinhAnh1"]["name"]);
        }

        $HinhAnh2 = "";
        $target_file = $target_dir . basename($_FILES["HinhAnh2"]["name"]); // link sẽ upload file lên
        $status_upload = move_uploaded_file($_FILES["HinhAnh2"]["tmp_name"], $target_file);
        if ($status_upload) { // nếu upload file không có lỗi 
            $HinhAnh2 =   basename($_FILES["HinhAnh2"]["name"]);
        }

        $HinhAnh3 = "";
        $target_file = $target_dir . basename($_FILES["HinhAnh3"]["name"]); // link sẽ upload file lên
        $status_upload = move_uploaded_file($_FILES["HinhAnh3"]["tmp_name"], $target_file);
        if ($status_upload) { // nếu upload file không có lỗi 
            $HinhAnh3 =   basename($_FILES["HinhAnh3"]["name"]);
        }

         $HinhAnh4 = "";
        $target_file = $target_dir . basename($_FILES["HinhAnh4"]["name"]); // link sẽ upload file lên
        $status_upload = move_uploaded_file($_FILES["HinhAnh4"]["tmp_name"], $target_file);
        if ($status_upload) { // nếu upload file không có lỗi 
            $HinhAnh4 =   basename($_FILES["HinhAnh4"]["name"]);
        }

         $HinhAnh5 = "";
        $target_file = $target_dir . basename($_FILES["HinhAnh5"]["name"]); // link sẽ upload file lên
        $status_upload = move_uploaded_file($_FILES["HinhAnh5"]["tmp_name"], $target_file);
        if ($status_upload) { // nếu upload file không có lỗi 
            $HinhAnh5 =   basename($_FILES["HinhAnh5"]["name"]);
        }

         $HinhAnh6 = "";
        $target_file = $target_dir . basename($_FILES["HinhAnh6"]["name"]); // link sẽ upload file lên
        $status_upload = move_uploaded_file($_FILES["HinhAnh6"]["tmp_name"], $target_file);
        if ($status_upload) { // nếu upload file không có lỗi 
            $HinhAnh6 =   basename($_FILES["HinhAnh6"]["name"]);
        }

         $HinhAnh7 = "";
        $target_file = $target_dir . basename($_FILES["HinhAnh7"]["name"]); // link sẽ upload file lên
        $status_upload = move_uploaded_file($_FILES["HinhAnh7"]["tmp_name"], $target_file);
        if ($status_upload) { // nếu upload file không có lỗi 
            $HinhAnh7 =   basename($_FILES["HinhAnh7"]["name"]);
        }

         $HinhAnh8 = "";
        $target_file = $target_dir . basename($_FILES["HinhAnh8"]["name"]); // link sẽ upload file lên
        $status_upload = move_uploaded_file($_FILES["HinhAnh8"]["tmp_name"], $target_file);
        if ($status_upload) { // nếu upload file không có lỗi 
            $HinhAnh8 =  basename($_FILES["HinhAnh8"]["name"]);
        }
        $TrangThai = 0;
        if (isset($_POST['TrangThai'])) {
            $TrangThai = $_POST['TrangThai'];
        }
        date_default_timezone_set('Asia/Ho_Chi_Minh');
        $ThoiGian =  date('Y-m-d H:i:s');
        $data = array(
            'MaSP'=>$_POST['MaSP'],
             'MaDM' => $_POST['MaDM'],
            'MaLSP' => $_POST['MaLSP'],
            'TenSP'  => $_POST['TenSP'],
           
            'DonGia' => $_POST['DonGia'],
            'SoLuong' => $_POST['SoLuong'],

            'HinhAnh1' => $HinhAnh1,
            'HinhAnh2' => $HinhAnh2,
            'HinhAnh3' => $HinhAnh3,
            'HinhAnh4' => $HinhAnh4,
            'HinhAnh5' => $HinhAnh5,
            'HinhAnh6' => $HinhAnh6,
            'HinhAnh7' => $HinhAnh7,
            'HinhAnh8' => $HinhAnh8,

            'Loai1'=>$_POST['Loai1'],
            'Loai2'=>$_POST['Loai2'],
            'Loai3'=>$_POST['Loai3'],
            'Loai4'=>$_POST['Loai4'],

            'Size1'=>$_POST['Size1'],
            'Size2'=>$_POST['Size2'],
            'Size3'=>$_POST['Size3'],
            'Size4'=>$_POST['Size4'],

            'MaKM' =>  $_POST['MaKM'],

            'TrangThai' => $TrangThai,

            'MoTa' =>  $_POST['MoTa'],
            'MoTa1' =>  $_POST['MoTa1'],
            'MoTa2' =>  $_POST['MoTa2'],
            'ThoiGian' => $ThoiGian,
        );
        foreach ($data as $key => $value) {
            if (strpos($value, "'") != false) {
                $value = str_replace("'", "\'", $value);
                $data[$key] = $value;
            }
        }
        if ($HinhAnh1 == "") {
            unset($data['HinhAnh1']);
        }
        if ($HinhAnh2 == "") {
            unset($data['HinhAnh2']);
        }
        if ($HinhAnh3 == "") {
            unset($data['HinhAnh3']);
        }
         if ($HinhAnh4 == "") {
            unset($data['HinhAnh4']);
        }
        if ($HinhAnh5 == "") {
            unset($data['HinhAnh5']);
        }
        if ($HinhAnh6 == "") {
            unset($data['HinhAnh6']);
        }
         if ($HinhAnh7 == "") {
            unset($data['HinhAnh7']);
        }
        if ($HinhAnh8 == "") {
            unset($data['HinhAnh8']);
        }
       
        $this->sanpham_model->update($data);
    }
}
