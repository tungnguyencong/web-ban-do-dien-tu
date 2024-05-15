<div class="main">
    <div class="container">
        <div class="row">
            <div class="col-md-12">

                <div class="breadcrumb clearfix">
                    <ul>
                        <li  class="home">
                            <a title="Đến trang chủ" href="?act=home" itemprop="url"><span itemprop="title">Trang chủ</span></a>
                        </li>
                        <li class="icon-li"><strong>Thanh toán</strong> </li>
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
                <div class="payment-content ng-scope" >
                    <h1 class="title"><span>Thanh toán</span></h1>
                    <div class="steps clearfix">
                        <ul class="clearfix">
                            <li class="cart active col-md-2 col-xs-12 col-sm-4 col-md-offset-3 col-sm-offset-0 col-xs-offset-0"><span><i class="glyphicon fa fa-shopping-cart"></i></span><span>Giỏ hàng của tôi</span><span class="step-number"><a>1</a></span></li>
                            <li class="payment active col-md-2 col-xs-12 col-sm-4"><span><i class="glyphicon fa fa-usd"></i></span><span>Thanh toán</span><span class="step-number"><a>2</a></span></li>
                            <li class="finish col-md-2 col-xs-12 col-sm-4"><span><i class="glyphicon fa fa-check"></i></span><span>Hoàn tất</span><span class="step-number"><a>3</a></span></li>
                        </ul>
                    </div>
                        <?php if (isset($_COOKIE['msg'])) { ?>
                        <div  class="alert alert-danger fade in">
                          
                            <button data-dismiss="alert" class="close"></button>
                            <i class="fa-fw fa fa-times"></i>
                            <strong>Error!</strong><?= $_COOKIE['msg'] ?>
                           
                        </div>
                         <?php } ?>
                    <form class="payment-block clearfix ng-pristine ng-invalid ng-invalid-required ng-valid-email" id="checkout-container" action="?act=checkout&xuli=save"  method="POST">
                        <div class="col-md-4 col-sm-12 col-xs-12 payment-step step2">
                            <h4>1. Địa chỉ thanh toán và giao hàng</h4>
                            <div class="step-preview clearfix">
                                <h2 class="title">Thông tin thanh toán</h2>
                <!-- ngIf: CustomerId>0 -->
                <!-- ngIf: CustomerId<=0 -->
                 <?php if (isset($_SESSION['login'])) { ?>
                        <?php $data= $_SESSION['login'] ?>
                         <div class="user-login">
                        <a href="?act=dangky">Đăng ký tài khoản mua hàng</a><a href="?act=taikhoan">Đăng nhập</a></div>
                <div class="form-block ng-scope">
                    <div class="form-group"><input class="form-control ng-pristine ng-invalid ng-invalid-required ng-touched" placeholder="Họ &amp;Tên" id="hoten"name="HoTen" type="text"  value="<?=$data['HoTen']?>"> </div>

                    <div class="form-group"><input class="form-control ng-pristine ng-untouched ng-invalid ng-invalid-required" placeholder="Số điện thoại" name="Phone" type="text"  required="" value="<?=$data['SDT']?>"></div>

                    <div class="form-group"><input class="form-control ng-pristine ng-untouched ng-valid-email ng-invalid ng-invalid-required" placeholder="Email" name="Email" type="email"  required="" value="<?=$data['Email']?>"></div>

                    <div class="form-group"><input class="form-control ng-pristine ng-untouched ng-invalid ng-invalid-required" placeholder="Địa chỉ" type="text" name="DiaChi"  required="" value="<?=$data['DiaChi']?>"></div>

                    <div class="form-group">
                        <select class="form-control ng-pristine ng-untouched ng-invalid ng-invalid-required" required="" name="calc_shipping_provinces">
                             <option value="">Tỉnh / Thành phố</option>
                          </select>
                    </div>
                    <div class="form-group">
                        <select class="form-control ng-pristine ng-untouched ng-invalid ng-invalid-required" name="calc_shipping_district"  required="">
                            <option value="">Quận / Huyện</option>
                        </select>
                    </div>
                    <input class="billing_address_1" name="" type="hidden" value="">
                    <input class="billing_address_2" name="" type="hidden" value="">

                    <textarea class="form-control ng-pristine ng-valid ng-touched" rows="4" placeholder="Ghi chú đơn hàng" name="GhiChu"></textarea>
                </div><!-- end ngIf: CustomerId<=0 -->

               
               <?php } else{ ?>

                <div class="form-block ng-scope">

                    <div class="user-login">
                        <a href="?act=dangky">Đăng ký tài khoản mua hàng</a><a href="?act=taikhoan">Đăng nhập</a></div>

                    <h2 class="title">Mua hàng không cần tài khoản</h2>                  

                    

                    <div class="form-group"><input class="form-control ng-pristine ng-invalid ng-invalid-required ng-touched" placeholder="Họ &amp;Tên" name="HoTen" type="text"  required="" ></div>

                    <div class="form-group"><input class="form-control ng-pristine ng-untouched ng-invalid ng-invalid-required" placeholder="Số điện thoại" name="Phone" type="text"  required="" ></div>

                    <div class="form-group"><input class="form-control ng-pristine ng-untouched ng-valid-email ng-invalid ng-invalid-required" placeholder="Email" name="email" type="email"  required="" ></div>

                    <div class="form-group"><input class="form-control ng-pristine ng-untouched ng-invalid ng-invalid-required" placeholder="Địa chỉ" type="text" name="diachi"  required="" ></div>

                    <div class="form-group">
                        <select class="form-control ng-pristine ng-untouched ng-invalid ng-invalid-required" required="" name="calc_shipping_provinces">
                             <option value="">Tỉnh / Thành phố</option>
                          </select>
                    </div>
                    <div class="form-group">
                        <select class="form-control ng-pristine ng-untouched ng-invalid ng-invalid-required" name="calc_shipping_district"  required="">
                            <option value="">Quận / Huyện</option>
                        </select>
                    </div>
                    <input class="billing_address_1" name="" type="hidden" value="">
                    <input class="billing_address_2" name="" type="hidden" value="">

                    <textarea class="form-control ng-pristine ng-valid ng-touched" rows="4" placeholder="Ghi chú đơn hàng" ></textarea>
                </div><!-- end ngIf: CustomerId<=0 -->


               <?php } ?>
              
            </div>
        </div>
                        <div class="col-md-4 col-sm-12 col-xs-12 payment-step step3">
                            <h4>2. Thanh toán và vận chuyển</h4>
                            <div class="step-preview clearfix">
                                <h2 class="title">Vận chuyển</h2>
                                <div class="form-group ">
                                    <select class="form-control ng-pristine ng-valid ng-touched" id="ship">
                                       <option value="">--Chọn phương thức vận chuyển--</option>
                                        <option value="45000"  >Vận chuyển nhanh</option>
                                        <option value="25000" >Vận chuyển chậm</option>
                                    </select>
                                    <input type="hidden" name="pttt" id="pttt" value="">
                                </div>
                                <div class="form-group">
                                    <button type="button" class="buttonreset" id='buttonreset'>Chọn lại phương thức vận chuyển</button>
                                </div>
                                <h2 class="title">Thanh toán</h2>
                                <div>
                               <span id="tienship"></span><span>₫</span>
                               </div>
                            </div>
                           
                        </div>
                        <div class="col-md-4 col-sm-12 col-xs-12 payment-step step1">
                            <h4>3. Thông tin đơn hàng</h4>
                            <div class="step-preview">
                                <div class="cart-info">
                                    <?php if (isset($_SESSION['sanpham'])) {
                                    foreach ($_SESSION['sanpham'] as $value) { ?>
                                    <div class="cart-items">
                                        <div class="cart-item clearfix ng-scope" id="xnxx">
                                            <span class="public/image pull-left"style="margin-right:10px;">
                                                <a href="?act=detail&id=<?= $value['MaSP'] ?>">
                                                    <img src="public/image/sanpham/<?=$value['HinhAnh1']?>" class="img-responsive">
                                                </a>
                                            </span>
                                            <div class="product-info pull-left">
                                                <span class="product-name">
                                                    <a href="?act=detail&id=<?= $value['MaSP'] ?>" class="ng-binding"><?=$value['TenSP']?></a> x <span class="ng-binding" id="textsoluong"><?=$value['SoLuong']?></span>
                                                </span>
                                                <!-- ngIf: item.IsVariant==true --><p class="note ng-binding ng-scope" ></p><!-- end ngIf: item.IsVariant==true -->
                                            </div>
                                            <span class="price ng-binding" >
                                                <span id="xnxx1"><?=number_format($value['ThanhTien'])?></span> <span>₫</span></span>
                                        </div>
                                    </div>


                                   


                        <?php }
                                } ?>

                                 <input type="hidden" value="<?= number_format($count) ?>" id='textdongia' >
                                    
                           
                                <script >
                                   function formatNumber (num) {
                                    return num.toString().replace(/(\d)(?=(\d{3})+(?!\d))/g, "$1,")
                                }
                                   

                                   $('#ship').click(function(){
                                  
                                   
                                    $('#tienship').text(formatNumber($('#ship').val()));
                                     $('#tienship2').text(formatNumber($('#ship').val()));

                                      var y=$('#xnxx4').text();
                                      var str2=y.replace(/,/g,""); 
                                    
                                        var i=parseInt(str2);


                                        var m=$('#ship').val();

                                        if(m==''){
                                            m=0;
                                        }

                                          var b = m.replace(/,/g,"");
                                       
                                
                                        var p = parseInt(b);
                                      

                                      var ts=i + p;


                                      var t =formatNumber(ts);


                                   
                                     $('#xnxx4').text(t);
                                     if( $('#ship').val() != 0){

                                     $('#ship').attr('disabled','disabled');
                                 }

                                 $('#tongtienhang').val(ts);
                                    
                                 });
                               
                              $('#buttonreset').click(function(){
                                 window.location.reload();
                              });

                                 
                                   function checkmaKM(){
                                  
                                   makm=$('#makm').val();
                                  
                                   if(makm!=''){
                                    var url='./Controllers/CheckoutController.php';
                                    $.ajax({
                                        
                                        type: "POST",
                                        url: './Views/order/process.php',
                                        
                                        data:
                                           {'makm':makm,}
                                        ,
                                        success: function(dataResult){
                                        var msg = $.parseJSON(dataResult);
                                     if(msg.statusCode==200){
                                       
                                        var gtkm=msg.value;

                                        var s=$('#xnxx4').text();
                                        var i=s.replace(/,/g,"");
                                        var z=parseInt(i);
                                        var k=z-parseInt(gtkm);

                                        var g=formatNumber(k)
                                       

                                           $('#xnxx4').text(g);
                                             $('#tongtienhang').val(k);
                                    
                                      /* var tong=(gtdg - gtkm) * gtsl;
                                       var s=formatNumber(tong);

                                        $('#xnxx1').html(s);

                                       var giatri1=$('#xnxx1').text();
                                       var i=giatri1.replace(",","");
                                       var z=parseInt(i); /*gia tri 1*/

                                     /*  var o=$('#tienship2').text();
                                       var p=o.replace(",","");
                                       var l=parseInt(p);

                                       var x=z+l;

                                       var tong2=formatNumber(x);

                                        $('#xnxx2').html(tong2);
                                        $('#xnxx4').text(tong2); */


                                         var gtfm=formatNumber(gtkm);
                                          $('#message').html("Mã khuyến mãi hợp lệ bạn được giảm " + gtfm + " Đ");
                                          $('#checkmakm').attr('disabled','disabled');

                                     }else if(msg.statusCode==201){
                                         $('#message').html("Mã khuyến mãi không hợp lệ hoặc đã hết hạn!");
                                     }
                                          }, 
                                         error:function(dataResult){
                                      
                                        }
                                       
                                    });
                                    }else{
                                      $('#message').html("Vui lòng nhập mã giảm giá!");
                                }
                            }

                            $(document).ready(function() {
                               


                                $('#ship').change(function(){
                                    var k=($('#ship :selected').text());
                                    $('#pttt').val(k);
                                });

                            });
                            
                                </script>
                            
                                <input type="hidden" name="action" value="datdonhang">
                                   <input type="hidden"  value="<?=number_format($value['TongTien'])?>">
                                    <div class="shiping-price">
                                        Phí vận chuyển
                                        <span class="spanright">  
                                        <label class="ng-binding" id="tienship2"></label>
                                        <span> ₫</span>
                                        </span>
                                    </div>


                                    <div class="total-price" >
                                        Thành tiền 
                                        <span class="spanright"> 
                                        <label class="ng-binding" id="xnxx2"><?= number_format($count) ?>
                                    </label>
                                        <label>₫</label>
                                        </span>
                                    </div>

                                    <div class="btn-coupon ">
                                        <a href="#" class="btn btn-primary"><span></span>Sử dụng mã giảm giá </a>
                                    </div>

                                    <div class="use-coupon ">
                                        <div class="form-group">
                                            <span id="message"></span>
                                            <input placeholder="Nhập mã giảm giá" class="coupon-code form-control" id='makm' name='makhuyenmai' value="">
                                            <button type="button" onclick="checkmaKM()" class="btn btn-primary" id='checkmakm' >Sử dụng</button>
                                        </div>
                                    </div>

                                    <div class="total-payment">
                                        Thanh toán
                                        <span class="spanright">
                                         <span class="ng-binding" id="xnxx4"><?= number_format($count) ?> </span>
                                         <span>₫</span>
                                         </span>
                                         <input type="hidden" id="tongtienhang" name="tongtien" value="">
                                    </div>
                                    
                                    <div class="button-submit">
                                        <button class="btn btn-primary" type="submit"  id="datdonhang">Đặt hàng</button>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div>
</div>