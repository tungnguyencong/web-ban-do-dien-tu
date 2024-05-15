 <div class="main">
    <div class="container">
        <div class="row">
            <div class="col-md-12">

                <div class="breadcrumb clearfix">
                    <ul>
                        <li class="home">
                            <a title="Đến trang chủ" href="?act=home" itemprop="url"><span itemprop="title">Trang chủ</span></a>
                        </li>
                        <li class="icon-li"><strong>Kiểm tra đơn hàng</strong> </li>
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

                <div class="order-tracking-content clearfix">
                    <h1 class="title"><span>Kiểm tra đơn hàng</span></h1>
                    <div class="order-tracking-block">
                        <div id="thongbao">
                            
                        </div>

                            <div class="form-group form-inline order-input">
                                <label>Nhập mã đơn hàng</label>
                                <input type="text" class="form-control" id="madonhang" placeholder="Mã số đơn hàng (VD:123456789)"  />

                                <button class="btn btn-primary" id="checkdonhang">Xem ngay</button>
                            </div>
                      
                        <script >
                            function formatNumber (num) {
                                    return num.toString().replace(/(\d)(?=(\d{3})+(?!\d))/g, "$1,")
                                }
                            $('#checkdonhang').click(function(){
                                 var madonhang=$('#madonhang').val();
                                if(madonhang != ''){
                               $.ajax({
                                   type: "POST",
                                        url: './Views/order/checkdonhang.php',
                                        
                                        data:
                                           {'madonhang':madonhang,}
                                        ,
                                        success: function(dataResult){
                                              var msg = $.parseJSON(dataResult);
                                              if(msg.statusCode==200){                                           
                                                $('#iddonhang').text(msg.MaHD);
                                                  $('#tenkhachhang').text('('+msg.NguoiNhan+')');
                                                   $('#ngaylap').text(msg.NgayLap);
                                                   $('#tongtien').text(formatNumber(msg.TongTien)+' đ');
                                                   $('#ttgh1').text(" "+msg.NguoiNhan);
                                                    $('#ttgh2').text(" "+msg.Email);
                                                    $('#ttgh3').text(" "+msg.DiaChi);
                                                     $('#ttgh4').text(" "+msg.SDT);

                                                      $('#ttgh5').text(" "+msg.NguoiNhan);
                                                    $('#ttgh6').text(" "+msg.Email);
                                                    $('#ttgh7').text(" "+msg.DiaChi);
                                                     $('#ttgh8').text(" "+msg.SDT);
                                                     if(msg.TrangThai==0){
                                                        $('#ttdh').text("Chưa Xác Nhận");
                                                     }else if(msg.TrangThai==1){
                                                         $('#ttdh').text("Đã Xác Nhận");
                                                     }

                                                $('#hienthidonhang').removeClass('hidden');
                                                $('#thongbao').removeClass('alert');
                                                $('#thongbao').removeClass('alert-danger');
                                                $('#thongbao').text('Tìm thấy một đơn hàng!');
                                              }
                                              else if(msg.statusCode==201){
                                                 $('#hienthidonhang').addClass('hidden');
                                                $('#thongbao').addClass('alert');
                                                $('#thongbao').addClass('alert-danger');

                                                $('#thongbao').html('Không tìm thấy đơn hàng trong hệ thống. Vui lòng kiểm tra lại mã đơn hàng hoặc số điện thoại của bạn.');
                                                

                                              }
                                        }
                               });
                                
                            }else{
                                 $('#hienthidonhang').addClass('hidden');
                               $('#thongbao').addClass('alert');
                               $('#thongbao').addClass('alert-danger');
                                $('#thongbao').text('Hãy nhập vào mã đơn hàng cần tìm!');
                               
                            }
                            });
                        </script>
                        <div class="hidden" id="hienthidonhang">
                            <h2>Thông tin đơn hàng</h2>
                            <div class="row-title docs">Đơn hàng của <a href="" id="iddonhang"></a> <b id="tenkhachhang"></b> lúc <span class="grey" id="ngaylap"></span></div>
                            <div class="table-responsive clearfix order-tracking-info">
                                <table class="table table-mycart">
                                    <thead>
                                       
                                    </thead>
                                    <tbody>

                                        <tr>
                                            <td colspan="3" class="border-right">
                                                <div class="box-customer-content">
                                                    <div class="title"><span>Thông tin giao hàng</span></div>
                                                    <div>[Anh/Chị]<b id="ttgh1"></b></div>
                                                    <div>
                                                        <span id="ttgh2"></span> |
                                                        <span id="ttgh3"></span> |
                                                        <span id="ttgh4"></span>
                                                    </div>
                                                </div>
                                                <div class="box-customer-content">
                                                    <div class="title"><span>Thông tin thanh toán</span></div>
                                                    <div>[Anh/Chị]<b id="ttgh5"></b></div>
                                                    <div>
                                                        <span id="ttgh6"></span> |
                                                        <span id="ttgh7"></span> |
                                                        <span id="ttgh8"></span>
                                                    </div>
                                                </div>
                                            </td>
                                            <td colspan="4">
                                                <table class="table">
                                                    <tbody>
                                                        <tr>
                                                            <td class="text-left"><b>Tổng tiền thanh toán</b></td>
                                                            <td class="text-right ">
                                                                <b class="total-payment" id=tongtien>
                                                                   
                                                                </b>
                                                                <p class="note"></p>
                                                            </td>
                                                        </tr>
                                                        <tr class="text-center order-stt">
                                                            <td colspan="2">
                                                                <div>Trạng thái đơn hàng</div>
                                                                <div><b id="ttdh"></b></div>
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
</div>