
<div class="main">
    <div class="container">
        <div class="row">
            <div class="col-md-3">
              
                <div class="menu-account" >
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
                        <li><a href="javascript:void(0)" ><i class="glyphicon fa fa-sign-out"></i> Thoát</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-md-9">

                <div class="breadcrumb clearfix">
                    <ul>
                        <li  class="home">
                            <a title="Đến trang chủ" href="?act=home" itemprop="url"><span itemprop="title">Trang chủ</span></a>
                        </li>
                        <li class="icon-li"><strong>Thông tin tài khoản</strong> </li>
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

             <div class="comunication-content clearfix" >
                <h1 class="title"><span>Thông tin tài khoản</span></h1>
                <?php  if (isset($_COOKIE['update1'])) { ?>
                    <div  class="alert alert-success fade in">
                        <button data-dismiss="alert" class="close"></button>
                        <i class="fa-fw fa fa-check"></i>
                        <strong>Success!</strong><?php echo $_COOKIE['update1'] ?>
                        
                    </div>
                <?php } ?>

                <?php  if (isset($_COOKIE['update2'])) { ?>
                    <div  class="alert alert-danger fade in">
                        <button data-dismiss="alert" class="close"></button>
                        <i class="fa-fw fa fa-times"></i>
                        <strong>Error!</strong><?php echo $_COOKIE['update2'] ?>
                    </div>
                <?php } ?> 
                

                <div class="col-md-8 col-md-offset-2 col-xs-12 col-sm-12 col-xs-offset-0 col-sm-offset-0">
                    <form class="form-horizontal" action="?act=taikhoan&xuli=update_tt" method="post">
                        <h2>Thông tin tài khoản</h2>
                        
                        <div class="form-group">
                            <label   class="col-sm-3 control-label">Email</label>
                            <div class="col-sm-9">
                                <label class="control-label"><?= $data['Email'] ?></label>
                            </div>
                        </div>
                        <div class="form-group">
                            <label  class="col-sm-3 control-label">Mật khẩu</label>
                            <div class="col-sm-9">
                                <label class="control-label" id="pass" ><?= $data['MatKhau'] ?></label>
                                <a href="?act=taikhoan&xuli=doimk"><i class="fa fa-edit"></i></a>
                            </div>
                        </div>
                        <script>
                            var pass= document.getElementById("pass").innerHTML;
                            var char = pass.length;                       
                            var x =pass.length +3;
                            var z=x-char
                            var password ="";
                            for (i=0;i<z;i++)
                            {
                                password += "*";
                            }
                            document.getElementById("pass").innerHTML = password;
                        </script>
                        <h2>Thông tin cá nhân</h2>
                        <div class="form-group">
                            <label class="col-sm-3 control-label" >Họ tên</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" name="HoTen" required value=" <?= $data['HoTen'] ?>" />
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-3 control-label" >Giới tính</label>
                            <div class="col-sm-9">
                                <select class="form-control"  name="GioiTinh" title="Giới tính">
                                    <option <?= ($data['GioiTinh'] == 'Nam') ? 'selected=selected' : '' ?> value="Nam"> Nam</option>
                                    <option <?= ($data['GioiTinh'] == 'Nữ') ? 'selected=selected' : '' ?> value="Nữ"> Nữ</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group form-inline">
                            <label  class="col-sm-3 control-label">Ngày sinh</label>
                            <div class="col-sm-9">
                               <input type="date" name="BirthDay" id="botday" required value="<?= $data['birthday'] ?>"class="form-control">  
                           </div>
                       </div>
                       <div class="form-group">
                        <label  class="col-sm-3 control-label">Điện thoại</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" name="SDT" required value="<?= $data['SDT'] ?>" />
                        </div>
                    </div>
                    <div class="form-group">
                        <label  class="col-sm-3 control-label">Địa chỉ</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" name="DiaChi" required value="<?= $data['DiaChi'] ?>" />
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-sm-3 control-label">Tỉnh/TP</label>
                        <div class="col-sm-9">
                         <input type="text" name="Tinh" class="form-control" required value="<?= $data['Tinh'] ?>" >
                     </div>
                 </div>
                 <div class="form-group">
                    <label class="col-sm-3 control-label">Quận/Huyện</label>
                    <div class="col-sm-9">
                        <input class="form-control" name="QuanHuyen" required value="<?= $data['QuanHuyen'] ?>" >
                    </div>
                </div>
                
                <div class="form-group">
                    <div class="col-sm-offset-4 col-sm-8">
                        <button type="submit" name="updatetk" class="btn btn-primary" value="action">Cập nhật</button>
                       
                    </div>

                </div>
            </form>
        </div>
    </div>
</div>
</div>
</div>
</div>

