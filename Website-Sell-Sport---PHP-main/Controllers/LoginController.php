<?php
require_once("Models/login.php");
  use PHPMailer\PHPMailer\PHPMailer;                                    
use PHPMailer\PHPMailer\Exception;
class LoginController
{
    var $login_model;
    public function __construct()
    {
        $this->login_model = new Login();
    }
    function login()
    {
        $data_danhmuc = $this->login_model->danhmuc();

        $data_chitietDM = array();

        for ($i = 1; $i <= count($data_danhmuc); $i++) {
            $data_chitietDM[$i] = $this->login_model->chitietdanhmuc($i);
        }
 $data_menu=$this->login_model->menu(0,5);
         $data_menu1=$this->login_model->menu(5,5);
           $data_logo=$this->login_model->logo();
        require_once('Views/index.php');
    }
    function quenmatkhau(){
        
   $data_danhmuc = $this->login_model->danhmuc();

        $data_chitietDM = array();

        for ($i = 1; $i <= count($data_danhmuc); $i++) {
            $data_chitietDM[$i] = $this->login_model->chitietdanhmuc($i);
        }

      $data_menu=$this->login_model->menu(0,5);
         $data_menu1=$this->login_model->menu(5,5);
          $data_logo=$this->login_model->logo();

     if(isset($_POST['quenmatkhau'])){
      
        if(isset($_POST['captcha']) && $_POST['captcha'] == $_SESSION['captcha']){
            $email = "'".$_POST['email']."'";
            $check=$this->login_model->checkaccount($email);
            if($check==true){
                $matkhaumoi=$this->login_model->randomPassword();
                $matkhaumoi1=md5($matkhaumoi);
                $update=$this->login_model->updatenguoidung($matkhaumoi1,$email);
                if($update==true){

                    include './public/libs/vendor/library.php';
                                        
                    include './public/libs/vendor/autoload.php';
                                        

                     $mail = new PHPMailer(true);                              // Passing `true` enables exceptions
                try {
                    //Server settings
                    //Server settings
                    $mail->CharSet = "UTF-8";
                    $mail->SMTPDebug = 0;                                 // Enable verbose debug output
                    $mail->isSMTP();                                      // Set mailer to use SMTP
                    $mail->Host = SMTP_HOST;  // Specify main and backup SMTP servers
                    $mail->SMTPAuth = true;                               // Enable SMTP authentication
                    $mail->Username = SMTP_UNAME;                 // SMTP username
                    $mail->Password = SMTP_PWORD;                           // SMTP password
                    $mail->SMTPSecure = 'ssl';                            // Enable TLS encryption, `ssl` also accepted
                    $mail->Port = SMTP_PORT;                                    // TCP port to connect to
                    //Recipients
                    $mail->setFrom(SMTP_UNAME, "Tên người gửi");
                    $mail->addAddress($_POST['email'], 'Tên người nhận');     // Add a recipient | name is option
                    $mail->addReplyTo(SMTP_UNAME, 'Tên người trả lời');
//                    $mail->addCC('CCemail@gmail.com');
//                    $mail->addBCC('BCCemail@gmail.com');
                    $mail->isHTML(true);                                  // Set email format to HTML
                    $mail->Subject = "Thay đổi mật khẩu";

                      $mail->Body ="Mật khẩu của bạn đã được thay đổi mới : ". $matkhaumoi;
                    $mail->AltBody =" Mật khẩu của bạn đã được thay đổi mới : ". $matkhaumoi;  //None HTML
                    $result = $mail->send();
                    if ($result) {
                        setcookie('msg1', 'Mật khẩu đã được thay đổi mới,vui lòng kiểm tra email đăng ký tài khoản của bạn', time() + 2);
                         header("Location: ?act=quenmatkhau&xuli=qmk#mk");
                    }else{
                          setcookie('msg2', 'Có lỗi xảy ra trong quá trình gửi mail', time() + 2);
                           header("Location: ?act=quenmatkhau&xuli=qmk#mk");
                    }

                } catch (Exception $e) {
                   
                     setcookie('msg2','Message could not be sent. Mailer Error:$mail->ErrorInfo', time() + 2);
                      header("Location: ?act=quenmatkhau&xuli=qmk#mk");
                } 

                }
            }else{
                 setcookie('msg2', 'Email của bạn không đúng vui lòng kiểm tra lại!', time() + 2);
                  header("Location: ?act=quenmatkhau&xuli=qmk#mk");
            }
        }else{
            setcookie('msg2', 'Mã captcha không chính xác vui lòng nhập!', time() + 2);
             header("Location: ?act=quenmatkhau&xuli=qmk#mk");
        }
        header("Location: ?act=quenmatkhau&xuli=qmk#mk");
     }
        require_once('Views/index.php');
     
    }
    function login_action()
    {
        $taikhoan = $_POST['taikhoan'];
        $matkhau = md5($_POST['matkhau']);
        if (strpos($taikhoan, "'") != false) {
            $taikhoan = str_replace("'", "\'", $taikhoan);
        }
        $data = array(
            'taikhoan' => $taikhoan,
            'matkhau' => $matkhau,
        );
        $this->login_model->login_action($data);
    }
    function dangky()
    {
        $check1 = 0;
        $check2 = 0;
       
        $data_check = $this->login_model->check_account();
        foreach ($data_check as $value) {
            if ($value['Email'] == $_POST['Email'] || $value['TaiKhoan'] == $_POST['TaiKhoan']) {
                $check1 = 1;
            }
        }

        if ($_POST['MatKhau'] != $_POST['check_password']) {
            $check2 = 1;
        }

        $data = array(
            'TaiKhoan' => $_POST['TaiKhoan'],
            'Email' =>    $_POST['Email'],
            'MatKhau' => md5($_POST['MatKhau']),
            
            'HoTen'  =>   $_POST['HoTen'],
            'GioiTinh' =>  $_POST['GioiTinh'],
            'birthday' =>$_POST['BirthDay'],
            'SDT' => $_POST['SDT'],
            'DiaChi'  =>   $_POST['DiaChi'],
            'Tinh' => $_POST['calc_shipping_provinces'],
            'QuanHuyen' => $_POST['calc_shipping_district'],
            'MaQuyen' =>  '1',
            'TrangThai'  =>  '1',
        );
        foreach ($data as $key => $value) {
            if (strpos($value, "'") != false) {
                $value = str_replace("'", "\'", $value);
                $data[$key] = $value;
            }
        }

        $this->login_model->dangky_action($data, $check1, $check2);
    
    }
    function dangxuat()
    {
        $this->login_model->logout();
    }
    function account()
    {
        $data_danhmuc = $this->login_model->danhmuc();

        $data_chitietDM = array();

        for ($i = 1; $i <= count($data_danhmuc); $i++) {
            $data_chitietDM[$i] = $this->login_model->chitietdanhmuc($i);
        }
        $data = $this->login_model->account();
  $data_menu=$this->login_model->menu(0,5);
         $data_menu1=$this->login_model->menu(5,5);
          $data_logo=$this->login_model->logo();
        require_once('Views/index.php');
    }
    function mk_account(){
         $data_danhmuc = $this->login_model->danhmuc();

        $data_chitietDM = array();

        for ($i = 1; $i <= count($data_danhmuc); $i++) {
            $data_chitietDM[$i] = $this->login_model->chitietdanhmuc($i);
        }
        $data = $this->login_model->account();
  $data_menu=$this->login_model->menu(0,5);
         $data_menu1=$this->login_model->menu(5,5);
          $data_logo=$this->login_model->logo();
        require_once('Views/index.php');
    }
    function update()
    {
       
        if (isset($_POST['updatetk']) && $_POST['updatetk']=='action'){
            $data = array(            
            'HoTen'  =>  $_POST['HoTen'],
            'GioiTinh' =>  $_POST['GioiTinh'],
            'birthday' => $_POST['BirthDay'],
            'SDT' => $_POST['SDT'],
            'DiaChi'  => $_POST['DiaChi'],
            'Tinh' => $_POST['Tinh'],
            'QuanHuyen' => $_POST['QuanHuyen'],
            );
             foreach ($data as $key => $value) {
                if (strpos($value, "'") != false) {
                     $value = str_replace("'", "\'", $value);
                     $data[$key] = $value;
                  }
             }
          $this->login_model->update_account($data);
       
        }
          header('Location: ?act=taikhoan&xuli=account#update');
            die();
    }

    function myorder(){
         $data_danhmuc =$this->login_model->danhmuc();

        $data_chitietDM = array();

        for ($i = 1; $i <= count($data_danhmuc); $i++) {
            $data_chitietDM[$i] = $this->login_model->chitietdanhmuc($i);
        }
       
            $manguoidung=$_SESSION['login']['MaND'];
            $data_myoder=$this->login_model->get_hoadon1($manguoidung);

        $data_menu=$this->login_model->menu(0,5);
         $data_menu1=$this->login_model->menu(5,5);
          $data_logo=$this->login_model->logo();
        require_once('Views/index.php');
       
    }

     function myorder_hoadon(){
          $data_danhmuc =$this->login_model->danhmuc();

        $data_chitietDM = array();

        for ($i = 1; $i <= count($data_danhmuc); $i++) {
            $data_chitietDM[$i] = $this->login_model->chitietdanhmuc($i);
        }
       
        $id=$_GET['id'];
        $data_hoadon=$this->login_model->get_hoadon2($id);
        if($data_hoadon != null){
        $data_chitiethoadon=$this->login_model->get_chitiethoadon($id);
        }   
         $data_menu=$this->login_model->menu(0,5);
         $data_menu1=$this->login_model->menu(5,5);
          $data_logo=$this->login_model->logo();
             require_once('Views/index.php');
     }
       

    function doimk(){
      if(isset($_POST['updatemk']) && $_POST['updatemk']=='action'){
            if ($_POST['MatKhauMoi'] == $_POST['MatKhauXN']) {
                if (md5($_POST['MatKhau']) == $_SESSION['login']['MatKhau']) {
                    $data = array(
                        'MatKhau' => md5($_POST['MatKhauMoi']),
                    );
                    foreach ($data as $key => $value) {
                        if (strpos($value, "'") != false) {
                           $value = str_replace("'", "\'", $value);
                           $data[$key] = $value;
                       }
                   }                     
                    $this->login_model->mk_update($data);

                }else{
                    setcookie('doimk2', 'Mật khẩu không đúng', time() + 2);
                                    
                }

                } else{
                     setcookie('doimk2', 'Mật khẩu xác nhận không đúng', time() + 2);
                    
                }
            }
            
              header('Location: ?act=taikhoan&xuli=doimk#doitk');
              
            
        }
        
    }

