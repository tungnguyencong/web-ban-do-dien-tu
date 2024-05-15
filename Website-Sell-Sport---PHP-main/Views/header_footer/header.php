      <div class="wrapper">       
            <div class="header">  
                <section class="top-link clearfix">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <ul class="nav navbar-nav topmenu-contact pull-left">
                                    <li><i class="fa fa-phone"></i> <span>Hotline:0985xxxxxx</span></li>
                                </ul>
                                <ul class="nav navbar-nav navbar-right topmenu  hidden-xs hidden-sm">
                                    <?php if(isset($_SESSION['login'])) { ?>  

                                     <li class="order-check"><a href="?act=checkorder"><i class="fa fa-pencil-square-o"></i> Kiểm tra đơn hàng</a></li>
                                     <li class="order-cart"><a href="?act=cart"><i class="fa fa-shopping-cart"></i> Giỏ hàng</a></li>

                                     <?php  if(isset($_SESSION['isLogin_Admin']) || isset($_SESSION['isLogin_Nhanvien'])){ ?>
                                     <li class="webmaster"><a href="admin/?mod=login"><i class="fa fa-gears"></i> Quản trị website</a></li>
                                      <?php } ?>

                                     <li class="account-info">
                                        <a href="?act=taikhoan&xuli=account">Chào <?=$_SESSION['login']['HoTen']?> </a>
                                        <a class="account-logout" id="btnLogOff" href="?act=taikhoan&xuli=dangxuat" title="">[Thoát] </a>
                                    </li>
                                   
                                <?php }

                                else{?>
                                     <li class="order-check"><a href="?act=checkorder"><i class="fa fa-pencil-square-o"></i> Kiểm tra đơn hàng</a></li>

                                    <li class="order-cart"><a href="?act=cart"><i class="fa fa-shopping-cart"></i> Giỏ hàng</a></li>

                                    <li class="account-login"><a href="?act=taikhoan"><i class="fa fa-sign-in"></i> Đăng nhập </a></li>

                                    <li class="account-register"><a href="?act=dangky"><i class="fa fa-key"></i> Đăng ký </a></li>

                                <?php }
                                    ?>
                                </ul>
                                <div class="show-mobile hidden-lg hidden-md">
                                    <div class="quick-user">
                                        <div class="quickaccess-toggle">
                                            <i class="fa fa-user"></i>
                                        </div>
                                        <div class="inner-toggle">
                                            <ul class="login links">
                                                <?php if(isset($_SESSION['login'])) { ?>  
                                                <li>
                                                <a href="?act=taikhoan&xuli=account">Thông tin tài khoản</a>
                                                </li>
                                            
                                            <?php }

                                            else{ ?>
                                              
                                             <li>
                                                    <a href="?act=dangky"><i class="fa fa-sign-in"></i> Đăng ký</a>
                                                </li>
                                                <li>
                                                    <a href="?act=taikhoan"><i class="fa fa-key"></i> Đăng nhập</a>
                                                </li>
                                           <?php } ?>
                                             
                                            </ul>                                           
                                        </div>
                                    </div>
                                    <div class="quick-access">
                                        <div class="quickaccess-toggle">
                                            <i class="fa fa-list"></i>
                                        </div>
                                        <div class="inner-toggle">
                                            <ul class="links">
                                                <li><a id="mobile-wishlist-total" href="?act=checkorder" class="wishlist"><i class="fa fa-pencil-square-o"></i> Kiểm tra đơn hàng</a></li>
                                                <li><a href="?act=cart" class="shoppingcart"><i class="fa fa-shopping-cart"></i> Giỏ hàng</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

<!--End-->

<!-- Header -->
<header id="header">
    <div id="header_main">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-3 col-sm-4 col-xs-8">
                    <!--logo-->

                    <div style="margin-left: 16%">
                         <h1 class="pull-left">
                            <a href="?act=home" class="logo" title="">
                                <img src="public/image/icon/<?=$data_logo['image']?>" style="/* width: <?=$data_logo['width']?>; */height: <?=$data_logo['height']?>" alt="" title="">
                            </a>
                        </h1>
                    </div>

                    <!-- end logo -->
                </div>
                <div class="col-lg-6 col-md-5 col-sm-4 hidden-xs">
                    <!-- Search -->
                    <div class="search_box">
                        <div class="search_wrapper">
                            <form action="?act=shop" method="POST">
                            <input type="text" placeholder="Nhập vào tên sản phẩm cần tìm..." name="keyword" class="index_input_search" id="txtsearch"  />
                            <button class="btn_search_submit btn " type="submit" id="btnsearch"><span>Tìm ngay</span></button>
                            </form>
                        </div>
                    </div>
                    <!-- End Search -->
                </div>
                <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                    <!-- Cart -->
                    <div class="cart_header">
                        <a href="?act=cart" title="Giỏ hàng">
                            <?php 
                           $numberCart=0;
                            $thanhtien = 0;
                            if(isset($_SESSION['sanpham'])){
                            foreach ($_SESSION['sanpham'] as $value) {
                               $numberCart++;
                                $thanhtien +=$value['ThanhTien'];
                            }}
                        ?>
                            <span class="cart_header_icon"></span>
                            <span class="box_text">
                                <strong class="cart_header_count">Giỏ hàng <span>(<span id="numberCart"><?=$numberCart?></span>)</span></strong>
                                <span class="cart_price"><?=number_format($thanhtien)?>₫</span>
                            </span>
                        </a>
                        

                        <div class="cart_header_top_box">
                           
                               <div class="cart_box_wrap ">
                                 <?php if(isset($_SESSION['sanpham'])){
                            foreach ($_SESSION['sanpham'] as $value) { ?>
                                <div class="cart_item  clearfix">
                                      
                                    <div class="cart_item_image">
                                        <img src="public/image/sanpham/<?=$value['HinhAnh1']?>" alt="">
                                    </div>
                                    <div class="cart_item_info">
                                        <p class="cart_item_title">
                                            <a href="?act=detail&id=<?=$value['MaSP']?>" title="<?=$value['TenSP']?>"><?=$value['TenSP']?></a>
                                        </p>
                                        <span class="cart_item_quantity">
                                            <input disabled="" min="1" value="<?=$value['SoLuong']?>" class="quantity_top_cart" type="number">
                                        </span>
                                        <span class="cart_item_price"><?=number_format($value['ThanhTien'])?></span>
                                        <span class="remove">
                                            <a href="?act=cart&xuli=deleteall&id=<?= $value['MaSP'] ?>" onclick="RemoveItemCard(46444,23095)"><i class="fa fa-times"></i></a>
                                        </span>
                                    </div>
                                   
                                    
                                </div>

                                <?php }} ?>
                              
                            </div>
                             <?php if(isset($_SESSION['sanpham'])){ ?>
                            <div class="total_cart">
                                        <span>Tổng tiền: </span>
                                        <span class="total_price pull-right"><?=number_format($thanhtien)?></span>
                                    </div>
                                    
                                    <div class="cart-buttons clearfix">
                                        <a href="index.php?act=cart" class="btn-cart">Xem giỏ hàng</a>
                                        <a href="index.php?act=checkout" class="btn-checkout">Thanh toán</a>
                            </div>
                             <?php } else{?>    
                           
                            <div class="cart_empty">Giỏ hàng của bạn vẫn chưa có sản phẩm nào.</div>
                            <?php } ?>        
                        </div>
                    </div>
                    <!-- End Cart -->
                    <!-- Account -->
                    <div class="user_login">
                        <div class="user_login_icon"></div>
                        <div class="box_text">
                            <strong>Tài khoản</strong>
                            <!--<span class="cart_price">Đăng nhập, đăng ký</span>-->
                        </div>
                        <div class="user_box">
                            <ul>
                                 <?php if(isset($_SESSION['login'])) { ?>  
                                <li>
                                                <a href="?act=taikhoan&xuli=account">Thông tin tài khoản</a>
                                                </li>
                                 <?php } else{?>
                                    <li><a href="?act=taikhoan">Đăng nhập</a></li>
                                    <li><a href="?act=dangky">Đăng ký</a></li>
                                 <?php } ?>
                            </ul>
                        </div>
                    </div>
                    <!-- End account -->
                </div>
            </div>
        </div>
    </div>
    <div id="header_mobile">
        <div class="container">
            <div class="row">
                <!-- Menu mobile -->
                <button type="button" class="navbar-toggle collapsed" id="trigger_click_mobile">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <div id="mobile_wrap_menu" class="visible-xs visible-sm">
                    <div class="user_mobile">
                        <div class="icon_user_mobile">
                            <img src="public/image/icon/user_mobile.png" alt="account">
                        </div>
                        <div class="login_mobile">

                            <a href="?act=taikhoan" class="login-btn">Đăng nhập </a>
                            <a href="?act=taikhoan&xuli=dangki" class="login-btn"> / Đăng ký</a>
                        </div>
                        <div class="close_menu"></div>
                    </div>
                    <div class="content_menu">
                        <ul>
                            <?php foreach ($data_menu as $value) { ?>   
                            <li class="level0"><a class='' href='<?=$value['Link2']?>'><span><?=$value['TenMenu']?></span></a></li>
                        <?php } ?>
                            
                         <?php foreach ($data_menu1 as $value) { ?>
                                
                            
                            <li class="level0"><a class='' href='?act=menu&id=<?=$value['id']?>'><span><?=$value['TenMenu']?></span></a></li>
                        <?php } ?>
                        </ul>
                         
                    </div>
                </div>
                <!-- End menu mobile -->
                <div class="pull-right mobile-menu-icon-wrapper">
                    <!-- Logo mobile -->
                    <div class="logo logo-mobile">
                        <a href="/" title="" >
                            <img class="logo_avata" src="public/image/icon/<?=$data_logo['image']?>" alt="">
                        </a>
                    </div>
                    <!-- End Logo mobile -->
                    <!-- Cart mobile -->
                    <div class="cart_header" id="cart-target">
                        <a href="?act=cart" title="Giỏ hàng">
                            <div class="cart_header_icon"></div>
                            <div class="box_text">
                                 <?php if(isset($_SESSION['sanpham'])){
                            foreach ($_SESSION['sanpham'] as $value) { ?>
                                <strong class="cart_header_count"><span><?= $numberCart; ?></span></strong>
                                  <?php }} ?>
                            </div>
                        </a>
                    </div>
                    <!-- End Cart mobile -->
                </div>
                <div class="clearfix"></div>
                <!-- Search mobile -->
                <div class="search_mobile col-md-12">
                    <div class="search_box">
                        <div class="search_wrapper">
                            <form action="?act=shop" method="POST">
                            <input type="text"  placeholder="Nhập vào tên sản phẩm cần tìm..." name="keyword" class="index_input_search" id="txtsearch2"   />
                            <button class="btn_search_submit btn " type="submit" id="btnsearch2"><span><i class="fa fa-search"></i></span></button>
                            </form>
                        </div>
                    </div>
                </div>
                <!-- End search mobile -->
            </div>
        </div>
    </div>
</header>
<!-- End header -->

<!--Template--
    --End-->

    <!-- Main menu -->
    <nav class="navbar-main">
        <div id="mb_mainnav">
            <div class="container">
                <div class="row">
                    <div class="col-md-3 col-sm-12 col-xs-12 vertical_menu">
                        <div id="mb_verticle_menu" class="menu-quick-select">
                            <div class="title_block">
                                <span>Danh mục sản phẩm</span>
                            </div>
                            <div id="menuverti" class="block_content navbar_menuvertical">

                                <ul class='nav_verticalmenu'>
                                 <?php    $i = 1; foreach ($data_chitietDM as $row ) { ?>

                                     <li class="has-child level0">
                                        <a class='' href='?act=shop&sp=<?= $i ?>'>
                                            <img class='icon-menu' src='public/image/icon/<?= $data_danhmuc[$i-1]['IconDM'] ?>' alt=''>
                                             <span><?= $data_danhmuc[$i-1]['TenDM'] ?></span>
                                         </a>

                                        <ul class='level1'>
                                            <?php foreach ($row as $value) { ?>
                                                <li class="level1">
                                                    <a class='' href='?act=shop&sp=<?= $value['MaDM'] ?>&loai=<?= $value['TenLSP'] ?>'><span><?= $value['TenLSP'] ?></span>
                                                    </a>
                                                </li>

                                            <?php } ?>
                                        </ul class='level1'>
                                    </li>

                                <?php $i++; } ?>
                            </ul class='nav_verticalmenu'>
                        </div>
                    </div>
                </div>
                <nav class="col-md-9 col-sm-12 col-xs-12 p-l-0">
                    <ul class='menu nav navbar-nav menu_hori'>
                    <?php foreach ($data_menu as $value) { ?>
                                
                            
                            <li class="level0"><a class='' href='<?=$value['Link']?>'><span><?=$value['TenMenu']?></span></a></li>
                        <?php } ?>

                         <?php foreach ($data_menu1 as $value) { ?>
                                
                            
                            <li class="level0"><a class='' href='?act=menu&id=<?=$value['id']?>'><span><?=$value['TenMenu']?></span></a></li>
                        <?php } ?>
                    </ul class='menu nav navbar-nav menu_hori'>
                </nav>
            </div>
        </div>
    </div>
</nav>
<!-- End main menu -->
<script type="text/javascript">
    $(document).ready(function () {
        var str = location.href.toLowerCase();
        $("ul.menu li a").each(function () {
            if (str.indexOf(this.href.toLowerCase()) >= 0) {
                $("ul.menu li").removeClass("active");
                $(this).parent().addClass("active");
            }
        });
    });
</script>
<!--Template--

    --End-->
</div>
