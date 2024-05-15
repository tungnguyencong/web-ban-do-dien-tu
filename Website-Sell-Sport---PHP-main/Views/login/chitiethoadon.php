 
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
          
                <div class="myorder-content myorder-detail-content clearfix">
                    <?php foreach ($data_hoadon as $value1): {
                        
                    } ?>
                <?php endforeach ?>
                    <h1 class="title"><span>Đơn hàng của tôi</span></h1>
                    <div class="myorder-block">
                        <div class="row-title docs">Đơn hàng của <a href="?act=taikhoan&xuli=account"><?= $value1['NguoiNhan']  ?></a><b> (#<?= $value1['MaHD']  ?>)</b> lúc <span class="grey"><?= $value1['NgayLap']  ?></span></div>
                        <div class="table-responsive clearfix myorder-info">
                            <table class="table table-mycart">
                                
                                <thead>
                                    <tr>
                                        <th>STT</th>
                                        <th colspan="2">Tên sản phẩm</th>
                                        <th>Hình Ảnh</th>
                                        <th>Mã sản phẩm</th>
                                        <th>Giá</th>
                                        <th>Loại</th>
                                        <th>Size</th>
                                        <th>Số lượng</th>
                                        <th>Thành tiền</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <?php 
                                         $i=0;
                                         foreach ($data_chitiethoadon as $value) {
                                          $i++; 
                                          ?>
                                            
                                       
                                        <td><?=$i ?></td>

                                        <td class="image" colspan="2">
                                            <a href="?act=detail&id=<?=$value['MaSP']?>"><?=$value['TenSP']?></a>
                                        </td>

                                        <td>
                                           
                                             <a href="?act=detail&id=<?=$value['MaSP']?>"><img class="img-responsive" src="public/image/sanpham/<?=$value['HinhAnh']?>"></a>
                                           
                                        </td>

                                        <td>#<?=$value['MaSP']?></td>

                                        <td><?= number_format($value['DonGia']) ?> đ</td>

                                        <td><?= $value['Loai'] ?></td>
                                        <td><?= $value['Size'] ?></td>

                                        <td><?= $value['SoLuong']  ?></td>

                                        <td><?= number_format($value['ThanhTien'])?> đ</td>
                                    </tr>
                                     <?php } ?>
                                    <tr>
                                        <td class="border-right" colspan="5">
                                            <div class="box-customer-content">
                                                <div class="title docs"><span>Thông tin giao hàng</span></div>

                                                <div>[Anh/Chị]:<b><?php echo $_SESSION['login']['HoTen'] ?></b></div>
                                                <div>
                                                   <?php echo $_SESSION['login']['Email'] ?> |
                                                    <?php echo $_SESSION['login']['HoTen'] ?> |
                                                    <?php echo $_SESSION['login']['SDT'] ?>
                                                </div>
                                            </div>
                                            <div class="box-customer-content">
                                                <div class="title"><span>Thông tin thanh toán</span></div>
                                                <div>[Anh/Chị]:<b> <?php echo $_SESSION['login']['HoTen'] ?></b></div>
                                                <div>
                                                   <?php echo $_SESSION['login']['Email'] ?> |
                                                   <?php echo $_SESSION['login']['HoTen'] ?> |
                                                   <?php echo $_SESSION['login']['SDT'] ?>
                                                </div>
                                            </div>
                                        </td>
                                        <td colspan="5">
                                            <table class="table">
                                                <tbody>
                                                    <tr>
                                                        <td class="text-left"><b>Tổng tiền thanh toán</b></td>
                                                        <td class="text-right ">
                                                            <b class="total-payment">
                                                                <?= number_format($value1['TongTien']) ?> đ
                                                            </b>
                                                            <div class="help-block">Bao gồm VAT</div>
                                                        </td>
                                                    </tr>
                                                    <tr class="text-center order-stt">
                                                        <td colspan="2">
                                                            <div class="docs">Trạng thái đơn hàng</div>
                                                            <?php if($value1['TrangThai']==0) {?>
                                                            <div class="docs"><b>Chưa xác nhận</b></div>
                                                        <?php }else { ?>
                                                             <div class="docs"><b>Đã xác nhận</b></div>
                                                        <?php } ?>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="button text-right">
                            <a class="btn btn-default" href="?act=taikhoan&xuli=myorder">Trở về danh sách đơn hàng</a>
                            <a class="btn btn-primary" href="?act=home">Tiếp tục mua hàng</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
