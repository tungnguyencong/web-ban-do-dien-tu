<?php

class CheckoutController
{

    var $checkout_model;

    public function __construct()
    {
         require_once("Models/checkout.php");
        $this->checkout_model = new Checkout();
    }

    function list()
    {
        if (isset($_SESSION['login'])) {
            $data_danhmuc = $this->checkout_model->danhmuc();

            $data_chitietDM = array();

            for ($i = 1; $i <= count($data_danhmuc); $i++) {
                $data_chitietDM[$i] = $this->checkout_model->chitietdanhmuc($i);
            }

            $count = 0;
            if (isset($_SESSION['sanpham'])) {
                foreach ($_SESSION['sanpham'] as $value) {
                    $count += $value['ThanhTien'];
                }
            }
            $data_menu=$this->checkout_model->menu(0,5);
         $data_menu1=$this->checkout_model->menu(5,5);
          $data_logo=$this->checkout_model->logo();
            require_once('Views/index.php');
        } else {
            header('location: ?act=taikhoan');
        }
    }
    function  save()
    {
        date_default_timezone_set('Asia/Ho_Chi_Minh');
        $ThoiGian =  date('Y-m-d H:i:s');
        if(isset($_POST['action'])&& $_POST['action'] == 'datdonhang' ){
        $count = 0;
        $tongtien=$_POST['tongtien'];
        if (isset($_SESSION['sanpham'])) {
            foreach ($_SESSION['sanpham'] as $value) {
                $count += $value['ThanhTien'];
               
            }
        }

        $data = array(
            'MaND' => $_SESSION['login']['MaND'],
            'NgayLap' => $ThoiGian,
            'NguoiNhan' =>    $_POST['HoTen'],
            'SDT' => $_POST['Phone'],
             'Email'=> $_POST['Email'],
            'DiaChi' => $_POST['DiaChi'],
           'PhuongThucTT'=>$_POST['pttt'],
           'GhiChu'=>$_POST['GhiChu'],
            'TongTien' => $_POST['tongtien'],
            'TrangThai'  =>  '0',
        );
    }
        $this->checkout_model->save($data);

    }
    function order_complete()
    {
        $data_danhmuc = $this->checkout_model->danhmuc();

        $data_chitietDM = array();

        for ($i = 1; $i <= count($data_danhmuc); $i++) {
            $data_chitietDM[$i] = $this->checkout_model->chitietdanhmuc($i);
        }
       
        $manguoidung=$_SESSION['login']['MaND'];

        $data= $this->checkout_model->get_hoadon($manguoidung);
        
         if($data!=null){
            foreach ($data as $value1);                       
            $mahoadon=$value1['MaHD'];
            $data_chitiethd=$this->checkout_model->get_chitiethoadon($mahoadon);
         }
        $data_menu=$this->checkout_model->menu(0,5);
         $data_menu1=$this->checkout_model->menu(5,5);
          $data_logo=$this->checkout_model->logo();
        require_once('Views/index.php');
    }

}
