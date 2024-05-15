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
                </div>                    </div>
                <div class="col-md-9">

                    <div class="breadcrumb clearfix">
                        <ul>
                            <li  class="home">
                                <a title="Đến trang chủ" href="?act=home" itemprop="url"><span itemprop="title">Trang chủ</span></a>
                            </li>
                            <li class="icon-li"><strong>Quên mật khẩu</strong> </li>
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

                    <div class="foget-password-content clearfix">
                        <h1 class="title"><span>Quên mật khẩu</span></h1>
                    

                        
                   <?php  if (isset($_COOKIE['msg1'])) { ?>
                        <div  class="alert alert-success fade in">
                            <button data-dismiss="alert" class="close"></button>
                            <i class="fa-fw fa fa-check"></i>
                            <strong>Success!</strong><?php echo $_COOKIE['msg1'] ?>
                        <?php } ?>
                    </div>

                    <?php  if (isset($_COOKIE['msg2'])) { ?>
                        <div  class="alert alert-danger fade in">
                            <button data-dismiss="alert" class="close"></button>
                            <i class="fa-fw fa fa-times"></i>
                            <strong>Error!</strong><?php  echo $_COOKIE['msg2'] ?>
                        </div>
                    <?php } ?> 
                   

                        <div class="alert alert-info fade in">
                            <button data-dismiss="alert" class="close"></button>
                            <i class="fa-fw fa fa-check"></i>
                            Điền vào email của bạn để yêu cầu một mật khẩu mới. Một Email sẽ được gửi đến địa chỉ này để xác minh địa chỉ Email của bạn.
                        </div>

                        <div class="col-md-8 col-md-offset-2 col-xs-12 col-sm-12 col-xs-offset-0 col-sm-offset-0">
                            <form class="form-horizontal" method="post" action="?act=quenmatkhau&xuli=qmk">
                                <div class="form-group">
                                    <label class="col-sm-4 control-label">Email</label>
                                    <div class="col-sm-8">
                                        <input type="email" class="form-control" name="email" />
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-4 control-label">Mã xác nhận</label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control" name="captcha" />
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-sm-offset-4 col-sm-8">
                                        <img class="img-captcha" id="imgCaptcha" src="Views/login/captcha.php" alt="" title="" />
                                       
                                            <button id="refresh" class="refresh-captcha btn-warning" type="button" style="width: 30px;border-radius: 5px;border: none;"><i class="fa fa-refresh" aria-hidden="true"></i></button>
                                            <script >
                                                $(document).ready(function () {
                                                    $("#refresh").click(function () {
                                                        $("#imgCaptcha").attr("src", 'Views/login/captcha.php');
                                                    });
                                                });
                                            </script>

                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-sm-offset-4 col-sm-8">
                                        <button type="submit" class="btn btn-primary" name="quenmatkhau">Gửi mật khẩu</button>
                                        <a href="?act=taikhoan">Quay lại đăng nhập</a>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>

                  
                </div>
            </div>
        </div>
    </div>