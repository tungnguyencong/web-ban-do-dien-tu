<?php
require_once("Models/cart.php");
class CartController
{
    var $cart_model;
    public function __construct()
    {
        $this->cart_model = new Cart();
    }
    function list_cart()
    {
        $data_danhmuc = $this->cart_model->danhmuc();

        $data_chitietDM = array();

        for ($i = 1; $i <= count($data_danhmuc); $i++) {
            $data_chitietDM[$i] = $this->cart_model->chitietdanhmuc($i);
        }

        $count = 0;
        if (isset($_SESSION['sanpham'])) {
            foreach ($_SESSION['sanpham'] as $value) {
                $count += $value['ThanhTien'];
            }
        }
         $data_menu=$this->cart_model->menu(0,5);
         $data_menu1=$this->cart_model->menu(5,5);
          $data_logo=$this->cart_model->logo();
        require_once('Views/index.php');
    }
    function add_cart()
    {
       
if(isset($_POST["id"])&& isset($_POST["num"])){
    $id=$_POST["id"];
    $loai=$_POST["loai"];
    $size=$_POST["size"];
    $num=$_POST["num"];
     $data = $this->cart_model->detail_sp($id);
        $count = 0;

        
        if(!isset($_SESSION['sanpham'])){
            $cart=array();
            $cart[$id]=array(
             'MaSP'=>$data['MaSP'] ,  
            'TenSP' => $data['TenSP'],
            'DonGia' => $data['DonGia'],
            'SoLuong' => $num,
            'Loai' => $loai,
            'Size' => $size,
            'ThanhTien' =>(int)$data['DonGia']*$num,
            'HinhAnh1' => $data['HinhAnh1'],
            
        );    
        }
        else{
            $cart=$_SESSION['sanpham'];
            if(array_key_exists($id, $cart)){
            if($cart[$id]['Loai']==$loai && $cart[$id]['Size']==$size){
            $cart[$id]=array(
                  'MaSP'=>$data['MaSP'] ,
            'TenSP' => $data['TenSP'],
            'DonGia' => $data['DonGia'],
            'SoLuong' => (int)$cart[$id]['SoLuong'] + $num,
            $s=(int)$cart[$id]['SoLuong'] + $num,
            'Loai' => $cart[$id]['Loai'],
            'Size' => $cart[$id]['Size'],
            'ThanhTien' => (int)$data['DonGia']*$s,
            'HinhAnh1' => $data['HinhAnh1'],
             
        );
        }
        else{
             $cart[$id]=array(
              'MaSP'=>$data['MaSP'] ,
           'TenSP' => $data['TenSP'],
            'DonGia' => $data['DonGia'],
            'SoLuong' => $num,
            'Loai' => $loai,
            'Size' => $size,
            'ThanhTien' => (int)$data['DonGia']*$num,
            'HinhAnh1' => $data['HinhAnh1'],
         );
        }
        }
        else{
           
             $cart[$id]=array(
                  'MaSP'=>$data['MaSP'] ,
            'TenSP' => $data['TenSP'],
            'DonGia' => $data['DonGia'],
            'SoLuong' => $num,
            'Loai' => $loai,
            'Size' => $size,
            'ThanhTien' => (int)$data['DonGia']*$num,
            'HinhAnh1' => $data['HinhAnh1'],
         );
        }

        } 
        $_SESSION['sanpham']=$cart;
        $numberCart=0;
        foreach ($_SESSION['sanpham'] as $value) {
            $count += $value['ThanhTien'];
            $numberCart++;
         }
         echo $numberCart;  
 }else{
    
 }
       
    }
    function update_cart()
    {
       if(isset($_POST['id']) && isset($_POST['num'])){
        $num=$_POST['num'];
        $id=$_POST['id'];
        $cart=$_SESSION['sanpham'];
        if(array_key_exists($id,$cart)){
            if($num > 0){
            $cart[$id]=array(
                'MaSP'=>$cart[$id]['MaSP'] ,
            'TenSP' => $cart[$id]['TenSP'],
            'DonGia' => $cart[$id]['DonGia'],
            'SoLuong' => $num,
            'Loai' => $cart[$id]['Loai'],
            'Size' => $cart[$id]['Size'],
            'ThanhTien' => (int)$cart[$id]['DonGia']*$num,
            'HinhAnh1' => $cart[$id]['HinhAnh1'],
            
        );
        }else{
            unset($cart[$id]);
        }
            $_SESSION['sanpham']=$cart;
        }
        }
       }
    
    function delete_cart()
    {
        $arr = $_SESSION['sanpham'][$_GET['id']];
        if ($arr['SoLuong'] == 1) {
            unset($_SESSION['sanpham'][$_GET['id']]);
        } else {
            $arr = $_SESSION['sanpham'][$_GET['id']];
            $arr['SoLuong'] = $arr['SoLuong'] - 1;
            $arr['ThanhTien'] = $arr['SoLuong'] * $arr["DonGia"];
            $_SESSION['sanpham'][$_GET['id']] = $arr;
        }
        header('Location: ?act=cart#dxd');
    }
    function deleteall_cart()
    {
        unset($_SESSION['sanpham'][$_GET['id']]);
        header('Location: ?act=cart#dxd');
    }
}
