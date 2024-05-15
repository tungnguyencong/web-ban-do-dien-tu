<?php
require_once("model.php");
class Login extends Model
{
    var $conn;
    function __construct()
    {
        $conn_obj = new Connection();
        $this->conn = $conn_obj->conn;
    }
    function login_action($data)
    {
        $query = "SELECT * from nguoidung  WHERE taikhoan = '" . $data['taikhoan'] . "' AND matkhau = '" . $data['matkhau'] . "' AND trangthai = 1";

        $login = $this->conn->query($query)->fetch_assoc();
        if ($login !== NULL) {
            if($login['MaQuyen'] == 2){
                $_SESSION['isLogin_Admin'] = true;
                $_SESSION['login'] = $login;
            }else{
                if($login['MaQuyen'] == 3){
                $_SESSION['isLogin_Nhanvien'] = true;
                $_SESSION['login'] = $login;
                }else{
                     if($login['MaQuyen'] == 1){
                    $_SESSION['isLogin'] = true;
                    $_SESSION['login'] = $login;
                }
                }
            }
            setcookie('msg1', 'Đăng nhập thành công', time() + 5);
            header('Location: ?mod=login');
        } else {
            setcookie('msg2', 'Đăng nhập không thành công vui lòng xem lại tài khoản và mật khẩu', time() + 5);
            header('Location: ?act=taikhoan#dangnhap');
        }
        
    }
    function logout()
    {
        if(isset($_SESSION['isLogin_Admin'])){
            unset($_SESSION['isLogin_Admin']);
            unset($_SESSION['login']);
        }
        if(isset($_SESSION['isLogin_Nhanvien'])){
            unset($_SESSION['isLogin_Nhanvien']);
            unset($_SESSION['login']);
        }
        if(isset($_SESSION['isLogin'])){
            unset($_SESSION['isLogin']);
            unset($_SESSION['login']);
        }
        header('location: ?act=home');
    }
    function check_account()
    {
        $query =  "SELECT * from NguoiDung";

        require("result.php");

        return $data;
    }
     function checkaccount($email)
    {
        $query =  "SELECT * from NguoiDung where Email=$email";

        require("result.php");

        return $data;
    }
    function randomPassword() {
    $alphabet = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890';
    $pass = array(); //remember to declare $pass as an array
    $alphaLength = strlen($alphabet) - 1; //put the length -1 in cache
    for ($i = 0; $i < 8; $i++) {
        $n = rand(0, $alphaLength);
        $pass[] = $alphabet[$n];
    }
    return implode($pass); //turn the array into a string
}
function updatenguoidung($matkhaumoi1,$email){
     $query = "UPDATE `nguoidung` SET `MatKhau`= '$matkhaumoi1' WHERE `Email`= $email";
     $result=$this->conn->query($query);
     return $result;

}
    function dangky_action($data, $check1, $check2)
    {
        if ($check1 == 0) {
            if ($check2 == 0) {
                $f = "";
                $v = "";
                foreach ($data as $key => $value) {
                    $f .= $key . ",";
                    $v .= "'" . $value . "',";
                }
                $f = trim($f, ",");
                $v = trim($v, ",");
                $query = "INSERT INTO NguoiDung($f) VALUES ($v);";

                $status = $this->conn->query($query);
                if ($status == true) {

                    setcookie('msg1', 'Đăng ký thành công', time() + 2);
                } else {
                    setcookie('msg', 'Đăng ký không thành công', time() + 2);
                }
            } else {
                setcookie('msg', 'Mật khẩu không trùng nhau', time() + 2);
            }
        } else {
            setcookie('msg', 'Tên tài khoản hoặc Email  đã tồn tại', time() + 2);
        }
        header('Location: ?act=dangky#dangky');
    }
    function account()
    {
        $id = $_SESSION['login']['MaND'];
        return $this->conn->query("SELECT * from NguoiDung where MaND = $id")->fetch_assoc();
    }

    function update_account($data)
    {
         $v = "";
     foreach ($data as $key => $value) {
             $v .= $key . "='". $value ."',";
        }
        $v = trim($v, ",");
       
        $nguoidung = $_SESSION['login']['MaND'];
      

        $query = "UPDATE `nguoidung` SET $v WHERE `MaND`= $nguoidung";

        $result = $this->conn->query($query);
        
        if ($result == true) {
            setcookie('update1', 'Cập nhật tài khoản thành công', time() + 2);

        } else {
         setcookie('update2', 'Có lỗi xảy ra xin vui lòng thử lại', time() + 2);          
     }
     header('Location: ?act=taikhoan&xuli=account#update');
     die();

    }
    function mk_update($data){

        $v = "";
        foreach ($data as $key => $value) {
            $v .= $key . "='" . $value . "',";
        }
        $v = trim($v, ",");
          $nguoidung = $_SESSION['login']['MaND'];
        $query = "UPDATE `nguoidung` SET  $v   WHERE  `MaND` = $nguoidung" ;

        $result = $this->conn->query($query);
        
        if ($result == true) {
            setcookie('doimk1', 'Cập nhật tài khoản thành công', time() + 2);
           
        } else {
            setcookie('doimk2', 'Có lỗi xảy ra xin vui lòng thử lại', time() + 2);       
    }
     header('Location: ?act=taikhoan&xuli=doimk#doitk');
        
}
    function error()
    {
        header('location: ?act=errors');
    }
}
