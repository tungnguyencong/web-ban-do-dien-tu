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
                        <li><a href="?act=dangky"><i class="fa fa-key"></i> Đăng ký</a></li>
                        <li><a href="?act=quenmatkhau"><i class="fa fa-key"></i> Quên mật khẩu</a></li>
                    </ul>
                </div>                    
            </div>
                <div class="col-md-9">

                    <div class="breadcrumb clearfix">
                        <ul>
                            <li  class="home">
                                <a title="Đến trang chủ" href="?act=home" itemprop="url"><span itemprop="title">Trang chủ</span></a>
                            </li>
                            <li class="icon-li"><strong>Đăng ký tài khoản</strong> </li>
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

                    <div class="register-content clearfix" >
                        <h1 class="title"><span>Đăng ký tài khoản</span></h1>
                         <?php  if (isset($_COOKIE['msg1'])) { ?>
                        <div class="alert alert-success fade in">
                           
                            <button data-dismiss="alert" class="close"></button>
                            <i class="fa-fw fa fa-check"></i>
                            <strong>Success!</strong> <?= $_COOKIE['msg1'] ?>
                       
                        </div>
                         <?php } ?>
                          <?php if (isset($_COOKIE['msg'])) { ?>
                        <div  class="alert alert-danger fade in">
                          
                            <button data-dismiss="alert" class="close"></button>
                            <i class="fa-fw fa fa-times"></i>
                            <strong>Error!</strong><?= $_COOKIE['msg'] ?>
                           
                        </div>
                         <?php } ?>

                        <div class="col-md-8 col-md-offset-2 col-xs-12 col-sm-12 col-xs-offset-0 col-sm-offset-0">
                            <form class="form-horizontal" action="?act=taikhoan&xuli=dangky" method="post">
                                <h2><span>Thông tin tài khoản</span></h2>
                                <div class="form-group">
                                    <label  class="col-sm-3 control-label">Tài khoản<span class="warning">(*)</span></label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" required="true" name="TaiKhoan" />
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label  class="col-sm-3 control-label">Email<span class="warning">(*)</span></label>
                                    <div class="col-sm-9">
                                        <input type="email" class="form-control"  required="true" name="Email" />
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-3 control-label">Mật khẩu<span class="warning">(*)</span></label>
                                    <div class="col-sm-9">
                                        <input type="password" class="form-control" name="MatKhau" required="true" />
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label  class="col-sm-3 control-label">Nhập lại mật khẩu<span class="warning">(*)</span></label>
                                    <div class="col-sm-9">
                                        <input type="password" class="form-control" name="check_password" />
                                    </div>
                                </div>
                                <h2>Thông tin cá nhân</h2>
                                <div class="form-group">
                                    <label  class="col-sm-3 control-label">Họ tên<span class="warning">(*)</span></label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" name="HoTen" />
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-3 control-label">Giới tính</label>
                                    <div class="col-sm-9">
                                        <select class="form-control" name="GioiTinh" >
                                            <option value="Nam">Nam</option>
                                            <option value="Nữ">Nữ</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group form-inline">
                                    <label class="col-sm-3 control-label">Ngày sinh</label>
                                    <div class="col-sm-9">
                                        <input type="date" name="BirthDay" class="form-control">
                                        
                                    </div>
                                    
                                </div>
                                <div class="form-group">
                                    <label  class="col-sm-3 control-label">Điện thoại</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" name="SDT"  />
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label  class="col-sm-3 control-label">Địa chỉ</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" name="DiaChi" />
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="col-sm-3 control-label">Tỉnh/TP</label>
                                    <div class="col-sm-9">
                                        <select class="form-control" name="calc_shipping_provinces" required=""  >
                                           <option value="">Tỉnh / Thành phố</option>
                                       </select>
                                       
                                   </div>
                               </div>
                               <div class="form-group">
                                <label class="col-sm-3 control-label">Quận/Huyện</label>
                                <div class="col-sm-9">
                                    <select class="form-control" name="calc_shipping_district" required="">
                                        <option value="">Quận / Huyện</option>
                                    </select>
                                    
                                </div>
                            </div>
                            <input class="billing_address_1" name="Tinh" type="hidden" value="">
                            <input class="billing_address_2" name="QuanHuyen" type="hidden" value="">
                            <div class="form-group">
                                <div class="col-sm-offset-4 col-sm-8">
                                    <button type="submit" name="dangki" class="btn btn-primary">Đăng ký</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>