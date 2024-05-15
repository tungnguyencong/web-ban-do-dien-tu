<div id="cart">
    <div class="main">
        <div class="container">
            <div class="row">
                <div class="col-md-12">

                    <div class="breadcrumb clearfix">
                        <ul>
                            <li  class="home">
                                <a title="Đến trang chủ" href="?act=home" itemprop="url"><span itemprop="title">Trang chủ</span></a>
                            </li>
                            <li class="icon-li"><strong>Giỏ hàng</strong> </li>
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

                  
                    <div class="cart-content" >
                        <h1><span>Giỏ hàng của tôi</span></h1>
                        <div class="steps clearfix">
                            <ul class="clearfix">
                                <li class="cart active col-md-2 col-xs-12 col-sm-4 col-md-offset-3 col-sm-offset-0 col-xs-offset-0"><span><i class="glyphicon fa fa-shopping-cart"></i></span><span>Giỏ hàng của tôi</span><span class="step-number"><a>1</a></span></li>
                                <li class="payment col-md-2 col-xs-12 col-sm-4"><span><i class="glyphicon fa fa-usd"></i></span><span>Thanh toán</span><span class="step-number"><a>2</a></span></li>
                                <li class="finish col-md-2 col-xs-12 col-sm-4"><span><i class="glyphicon fa fa-check"></i></span><span>Hoàn tất</span><span class="step-number"><a>3</a></span></li>
                            </ul>
                        </div>
                        <div class="cart-block">
                            <div class="cart-info table-responsive" id="listcart">
                                <table class="table product-list" id="cartx">
                                    <thead>
                                        <tr>
                                            <th></th>
                                           
                                            <th>Tên sản phẩm</th>
                                            <th>Loại</th>
                                            <!-- <th>Size</th> -->
                                            <th>Giá</th>
                                            <th>Số lượng</th>
                                            <th>Thành tiền</th>
                                            <th></th>
                                        </tr>
                                    </thead>

                                    <tbody>
                                        <?php
                                        if (isset($_SESSION['sanpham'])) {
                                            foreach ($_SESSION['sanpham'] as $value) { ?>

                                        <tr >
                                          
                                            <td class="image">
                                                <a href="?act=detail&id=<?= $value['MaSP'] ?>"> <img  class="img-responsive" src="public/image/sanpham/<?= $value['HinhAnh1'] ?>" /></a>
                                            </td>
                                            <td class="des">
                                                <a href="?act=detail&id=<?= $value['MaSP'] ?>"><?= $value['TenSP'] ?></a>
                                                <span></span>
                                            </td>
                                            <td class="des"><?= $value['Loai'] ?></td>
                                            <!-- <td class="des"><?= $value['Size'] ?></td> -->
                                            <td class="price"><?= number_format($value['DonGia']) ?> đ</td>
                                            <td class="quantity">
                                                <input type="number" id="quantity" value="<?= $value['SoLuong'] ?>" class="text" onclick="updateCart(<?= $value['MaSP'] ?>)"/>
                                            </td>
                                            <td class="amount">
                                               <?= number_format($value['ThanhTien']) ?>đ
                                            </td>
                                            <td class="">
                                                <a onclick="deleteCart(<?= $value['MaSP'] ?>)" href="javascript:void(0)">
                                                    <i class="glyphicon fa fa-trash"></i>
                                                </a>
                                            </td>
                                        </tr>
                                    <?php }
                                } ?>
                                    </tbody>
                                </table>
                            </div>
                         
                            <div class="clearfix text-right" id="priceproduct">
                                <span><b>Tổng thanh toán:</b></span>
                                <span class="pay-price" id="pricex">
                                   <?= number_format($count) ?> đ
                                </span>
                            </div>
                            <div class="button text-right">
                                <a class="comeback" href="#" onclick="window.history.back()">Tiếp tục mua hàng</a>
                                <a  class="button-default " disabled="" id="checkout" href="?act=checkout">Tiến hành thanh toán</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>