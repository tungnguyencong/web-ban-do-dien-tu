<div class="main">
    <div class="container">
        <div class="row">
            <div class="col-md-3">

                <div class="menu-account" ng-controller="accountController">
                    <h3>
                        <span>
                            Quản lý cá nhân
                        </span>
                    </h3>
                    <ul>
                        <li class="active"><a href="?act=taikhoan&xuli=account"><i class="glyphicon fa fa-user"></i> Thông tin tài khoản</a></li>
                        <li><a href="?act=taikhoan&xuli=myorder"><i class="glyphicon fa fa-list-alt"></i> Đơn hàng của tôi</a></li>
                        <li><a href="#"><i class="glyphicon fa fa-shopping-cart"></i> Sản phẩm yêu thích</a></li>
                        <li><a href="?act=taikhoan&xuli=doimk"><i class="fa fa-key"></i> Thay đổi mật khẩu</a></li>
                        <li><a href="javascript:void(0)" ng-click="signOut()"><i class="glyphicon fa fa-sign-out"></i> Thoát</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-md-9">

                <div class="breadcrumb clearfix">
                    <ul>
                        <li  class="home">
                            <a title="Đến trang chủ" href="?act=home" itemprop="url"><span itemprop="title">Trang chủ</span></a>
                        </li>
                        <li class="icon-li"><strong>Thay đổi mật khẩu</strong> </li>
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
              
                <div class="change-password-content clearfix" >
                    <h1 class="title"><span>Thay đổi mật khẩu</span></h1>

                   <?php  if (isset($_COOKIE['doimk1'])) { ?>
                        <div  class="alert alert-success fade in">
                            <button data-dismiss="alert" class="close"></button>
                            <i class="fa-fw fa fa-check"></i>
                            <strong>Success!</strong><?php echo $_COOKIE['doimk1'] ?>
                        <?php } ?>
                    </div>

                    <?php  if (isset($_COOKIE['doimk2'])) { ?>
                        <div  class="alert alert-danger fade in">
                            <button data-dismiss="alert" class="close"></button>
                            <i class="fa-fw fa fa-times"></i>
                            <strong>Error!</strong><?php  echo $_COOKIE['doimk2'] ?>
                        </div>
                    <?php } ?> 
                   
                                            

                    <div class="col-md-8 col-md-offset-2 col-xs-12 col-sm-12 col-xs-offset-0 col-sm-offset-0">
                        <form class="form-horizontal" action="?act=taikhoan&xuli=update_mk" method="post">
                            <div class="form-group">
                                <label for="" class="col-sm-4 control-label">Mật khẩu cũ</label>
                                <div class="col-sm-8">
                                    <input type="password" class="form-control" name="MatKhau"  />
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="" class="col-sm-4 control-label">Mật khẩu mới</label>
                                <div class="col-sm-8">
                                    <input type="password" class="form-control" name="MatKhauMoi" />
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="" class="col-sm-4 control-label">Nhập lại mật khẩu</label>
                                <div class="col-sm-8">
                                    <input type="password" class="form-control" name="MatKhauXN" />
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-sm-offset-4 col-sm-8">
                                    <button type="submit" name="updatemk" class="btn btn-primary" value="action">Cập nhật</button>
                                </div>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
 