<div class="main">
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <div class="menu-account">
                    <h3>
                        <span>
                            Tài khoản
                        </span>
                    </h3>
                    <ul>
                        <li><a href="?act=taikhoan"><i class="fa fa-sign-in"></i> Đăng nhập</a></li>
                        <li><a href="?act=taikhoan"><i class="fa fa-key"></i> Đăng ký</a></li>
                        <li><a href="?act=quenmatkhau"><i class="fa fa-key"></i> Quên mật khẩu</a></li>
                    </ul>
                </div>                    
            </div>
                <div class="col-md-9">

                    <div class="breadcrumb clearfix">
                        <ul>
                            <li class="home">
                                <a title="Đến trang chủ" href="?act=home" ><span itemprop="title">Trang chủ</span></a>
                            </li>
                            <li class="icon-li"><strong>Đăng nhập</strong> </li>
                        </ul>
                    </div>
                     <script type="text/javascript">
                   $(".link-site-more").hover(function () { $(this).find(".s-c-n").show(); }, function () { $(this).find(".s-c-n").hide(); });
               </script>
               <script type="text/javascript">
                $(document).ready(function () {
                    $(".menu-quick-select ul").hide();
                    $(".menu-quick-select").hover(function () { $(".menu-quick-select ul").show(); }, function () { $(".menu-quick-select ul").hide(); });
                });
            </script>
                
                 <div class="login-content clearfix">
                    <h1 class="title"><span>Đăng nhập hệ thống</span></h1>

                    <?php if (isset($_COOKIE['msg1'])) { ?>
                    <div  class="alert alert-success fade in">                  
                        <button  class="close"></button>
                        <i class="fa-fw fa fa-check"></i>
                        <strong>Success!</strong> <?= $_COOKIE['msg1'] ?>
                    </div>
                     <?php } ?>

                    <?php if (isset($_COOKIE['msg2'])) { ?>
                    <div  class="alert alert-danger fade in">
                           
                        <button  class="close"></button>
                        <i class="fa-fw fa fa-times"></i>
                        <strong>Error!</strong><?= $_COOKIE['msg2'] ?>
                      
                    </div>
                      <?php } ?>
                    <div class="col-md-6 col-md-offset-3 col-xs-12 col-sm-12 col-xs-offset-0 col-sm-offset-0">
                        <form class="form-horizontal" method="POST" action="?act=taikhoan&xuli=dangnhap">
                            <div class="form-group">
                                <label class="col-sm-4 control-label">Email</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" name="taikhoan" />
                                </div>
                            </div>
                            <div class="form-group">
                                <label  class="col-sm-4 control-label">Mật khẩu</label>
                                <div class="col-sm-8">
                                    <input type="password" class="form-control" name="matkhau" />
                                </div>
                            </div>
                            
                            <div class="form-group">
                                <div class="col-sm-offset-4 col-sm-8">
                                    <button type="submit" name="submit" class="btn btn-primary">Đăng nhập</button>
                                    <a href="/quen-mat-khau.html">Quên mật khẩu?</a>
                                </div>

                            </div>
                        </form>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>