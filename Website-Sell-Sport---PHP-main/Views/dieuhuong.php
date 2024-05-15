<?php
$act = isset($_GET['act']) ? $_GET['act'] : "home";
switch ($act) {
    case "home":
        require_once("home/home.php");
        break;
    case "shop":
        require_once("shop/shop.php");
        break;
    case "checkout":
        $act = isset($_GET['xuli']) ? $_GET['xuli'] : "list";
        switch ($act) {
            case 'list':
                require_once("order/checkout.php");
                break;
            case 'order_complete':
                require_once("order/order_complete.php");
                break;
            default:
                require_once("order/checkout.php");
                break;
        }
        break;
    case "detail":
        require_once("product-detail/product-detail.php");
        break;
     case "new":
        require_once("introduce/new.php");
        break;    
    case "bando":
        require_once("product-detail/bando.php");
        break;    
    case "lienhe":
        require_once("introduce/lienhe.php");
        break; 
     case "gioithieu":
        require_once("introduce/gioithieu.php");
        break;        
    case "tintuc":
        require_once("new/tintuc.php");
        break;    
    case "about":
        require_once("introduce/about.php");
        break;
    case 'menu':
        require_once("xuat_mot_tin.php");
        break;
    case "contact":
        require_once("introduce/contact.php");
        break;
    case "cart":
        require_once("cart/cart.php");
        break;
     case "dangky":
        require_once("login/dangky.php");
        break;
    case "quenmatkhau":
        require_once("login/quenmatkhau.php");
        break;    
    case "checkorder":
    require_once('order/checkorder.php');
    break;  
          
    case "taikhoan":
        $act = isset($_GET['xuli']) ? $_GET['xuli'] : "login";
        if (isset($_SESSION['isLogin']) && $_SESSION['isLogin'] == true) {
            switch ($act) {

                case 'login':
                require_once("login/dangnhap.php");
                break;

                case 'account':
                require_once("login/my-account.php");
                break;

                case 'doimk':
                require_once("login/doimk.php");   
                break; 

                case 'myorder':
                require_once("login/myorder.php");      
                break; 

                 case 'hoadon':
                      
                    require_once("login/chitiethoadon.php");                 
                break;
               
                default:
                require_once("login/dangnhap.php");
                break;
            } break;
           
        } else {
            if ((isset($_SESSION['isLogin_Admin']) && $_SESSION['isLogin_Admin'] == true) || (isset($_SESSION['isLogin_Nhanvien']) && $_SESSION['isLogin_Nhanvien'] == true)) {
                switch ($act) {
                    case 'login':
                    require_once("login/dangnhap.php");
                    break;

                    case 'account':
                    require_once("login/my-account.php");
                    break;

                    case 'doimk':
                    require_once("login/doimk.php");
                    break; 

                    case 'myorder':
                    require_once("login/myorder.php");
                    break;

                     case 'hoadon':
                      
                    require_once("login/chitiethoadon.php");                 
                break;
                   
                    default:
                    require_once("login/dangnhap.php");
                    break;
                } break;
            } else {
                switch ($act) {
                    case 'login':
                        require_once("login/dangnhap.php");
                        break;
                    default:
                        require_once("login/dangnhap.php");
                        break;
                }
            } break;
            
        }
        break;
    default:
        require_once("error-404.php");
        break;
}
