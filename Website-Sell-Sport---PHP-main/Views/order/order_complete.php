<div class="main">
    <div class="container">
        <div class="row">
            <div class="col-md-12">

                <div class="breadcrumb clearfix">
                    <ul>
                        <li class="home">
                            <a title="Đến trang chủ" href="?act=home" itemprop="url"><span itemprop="title">Trang chủ</span></a>
                        </li>
                        <li class="icon-li"><strong>Hoàn tất</strong> </li>
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
                <div class="payment-end">
                    <div class="">
                        <?php if(isset($_COOKIE['msg'])){ ?>
                        <div class="alert alert-success fade in">
                            <i class="fa-fw fa fa-check"></i>
                            <strong>Success! </strong>
                            <span><?= $_COOKIE['msg'] ?></span>
                        </div>
                    <?php } ?>
                    </div>

                    <div class="payment-order clearfix">
                        <?php foreach ($data as $value1); ?>
                            
                     
                        <h3>Mã đơn hàng của bạn: #<b><?=$value1['MaHD'] ?></b></h3>
                        <p><b>Ngày đặt:</b> <i><?= $value1['NgayLap'] ?></i></p>
                        <p><b>Phương thức thanh toán:</b> <i><?= $value1['PhuongThucTT'] ?></i></p>
                        <h1>Thông tin đơn hàng</h1>

                        <table class="table">
                            <thead>
                                <tr>
                                    <th>STT</th>
                                    <th>Sản phâm</th>
                                    <th>Đơn giá</th>
                                    <th>Loại</th>
                                    <th><!-- Size --></th>
                                    <th>Số lượng</th>
                                    <th>Thành tiền</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php 
                                    $i=0;
                                    
                                    foreach ($data_chitiethd as $value) {
                                     $i++;
                                    
                                        ?>
                                        
                                <tr>
                                    <td><?php echo $i ?></td>
                                    <td>
                                        <span><?= $value['TenSP'] ?></span>
                                        <p class="note"></p>
                                    </td>
                                    <td><?= number_format($value['DonGia']) ?>đ</td>
                                    <td><?= $value['Loai'] ?></td>
                                    <td><!-- <?= $value['Size'] ?> --></td>
                                    <td><?= $value['SoLuong'] ?></td>
                                    <td><?= number_format($value['ThanhTien']) ?> đ</td>
                                </tr>
                                <?php }

                                 ?>
                            </tbody>
                            <tfoot>
                                <tr>
                                    <td colspan="6" class="text-right label-payment"><b>Tổng thanh toán:</b></td>
                                    <td class="total-payment"><?= number_format($value1['TongTien']) ?>  đ</td>
                                </tr>
                            </tfoot>
                        </table>
                      <!--   <span class="print-order"><a href="#"><i class="fa fa-print"></i>In đơn hàng</a></span> -->
                    </div>
                    <div class="clearfix col-md-12">
                        <div class="button text-right">
                            <a class="btn btn-default" href="?act=home">Tiếp tục mua hàng</a>
                            <a class="btn btn-primary" href="?act=taikhoan&xuli=myorder">Đơn hàng của tôi</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>