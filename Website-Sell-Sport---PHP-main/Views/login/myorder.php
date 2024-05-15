
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
                        <li class="icon-li"><strong>Đơn hàng của tôi</strong> </li>
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

                <div class="myorder-content clearfix">
                    <h1 class="title"><span>Đơn hàng của tôi</span></h1>
                    <div class="myorder-block">
                        <div class="table-responsive clearfix myorder-info">
                            <table class="table table-mycart">
                                <thead>
                                    <tr>
                                        <th>STT</th>
                                        <th>Mã đơn hàng</th>
                                        <th>Tên khách hàng</th>
                                        <th>Tổng tiền</th>
                                        <th>Vận chuyển</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                     <?php if (isset($_SESSION['login'])) {

                                         $i=0;
                                        foreach ($data_myoder as $value) {
                                        $i++; 
                                            ?>
                                    <tr>
                                        <td><?= $i ?></td>
                                        <td><a href="?act=taikhoan&xuli=hoadon&id=<?= $value['MaHD'] ?>">#<?= $value['MaHD'] ?></a></td>
                                        <td><a href="?act=taikhoan&xuli=hoadon&id=<?= $value['MaHD'] ?>"><?= $value['NguoiNhan'] ?></a></td>
                                        <td><?= number_format($value['TongTien']) ?> đ</td>
                                        <?php if($value['TrangThai']==0) {?>
                                        <td>Chưa</td>
                                    <?php } else{ ?>
                                          <td>Đã xác nhận</td>
                                    <?php } ?>
                                        <td class="text-center"><a href="?act=taikhoan&xuli=hoadon&id=<?= $value['MaHD'] ?>"><i class="fa fa-angle-double-right "></i>Xem đơn hàng</a></td>
                                    </tr>
                                  <?php }}
                                         ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>