 

<div id="page">
    <div class="main">
        <div class="container">
            <div class="row">
                <div class="col-md-3">


                    <!--Begin-->
                    <div class="box-support-online" >
                        <h3><span>Hỗ trợ trực tuyến</span></h3>
                        <div class="support-online-block">
                            <div class="support-hotline">
                                HOTLINE<br><span>098xxxxxxx</span>
                            </div>
                       
                        </div>
                    </div>
                    <!--End-->
                                  </div>
                    <div class="col-md-9">

                        <div class="breadcrumb clearfix">
                            <ul>
                                <li class="home">
                                    <a title="Đến trang chủ" href="?act=home" ><span itemprop="title">Trang chủ</span></a>
                                </li>
                                <li class="icon-li"><strong>Liên hệ</strong> </li>
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

                        <script src="http://maps.google.com/maps/api/js?key=AIzaSyBO93-_2pxx4UBTNduADxfoWpsFrHAFKsA&sensor=true" type="text/javascript"></script>
                      
                        <!--Begin-->
                        <div class="contact-content clearfix">
                            <div class="content clearfix">
                                <h1 title="liên hệ">
                                    Liên hệ
                                </h1>
                                <div class="col-md-12 col-xs-12 col-sm-12">
                                    <div class="map clearfix">
                                        <div class="map-canvas" id="map_canvas"></div>
                                     
                                    </div>
                                </div>

                                <div class="col-md-7" id="col-left contactFormWrapper">
                                    <h3>Liên hệ với chúng tôi</h3>
                                    <hr class="line-left">
                                    <p>
                                        Nếu bạn có thắc mắc gì, có thể gửi yêu cầu cho chúng tôi, và chúng tôi sẽ liên lạc lại với bạn sớm nhất có thể.
                                    </p>
                                    <?php
                                     use PHPMailer\PHPMailer\PHPMailer;
                                    
                                     use PHPMailer\PHPMailer\Exception;


                                    if (isset($_POST['send'])) {

                                         if (empty($_POST['email'])) { //Kiểm tra xem trường email có rỗng không?
                                            $error = "Bạn phải nhập địa chỉ email";
                                        } elseif (!empty($_POST['email']) && !filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
                                            $error = "Bạn phải nhập email đúng định dạng";
                                        } elseif (empty($_POST['noidung'])) { 
                                            $error = "Bạn phải nhập nội dung";
                                        }elseif (empty($_POST['hoten'])) { 
                                            $error = "Bạn phải nhập họ tên";
                                        }elseif (empty($_POST['phone']) && filter_var($_POST['phone'], FILTER_VALIDATE_INT)) {
                                            $error = "Bạn phải nhập số điện thoại đúng định dạng";
                                        }
                                        if(!isset($error)){
                                         include './public/libs/vendor/library.php';
                                        
                                        include './public/libs/vendor/autoload.php';
                                        

                                        $mail = new PHPMailer(true);                              // Passing `true` enables exceptions
                try {
                    //Server settings
                    //Server settings
                    $mail->CharSet = "UTF-8";
                    $mail->SMTPDebug = 0;                                 // Enable verbose debug output
                    $mail->isSMTP();                                      // Set mailer to use SMTP
                    $mail->Host = SMTP_HOST;  // Specify main and backup SMTP servers
                    $mail->SMTPAuth = true;                               // Enable SMTP authentication
                    $mail->Username = SMTP_UNAME;                 // SMTP username
                    $mail->Password = SMTP_PWORD;                           // SMTP password
                    $mail->SMTPSecure = 'ssl';                            // Enable TLS encryption, `ssl` also accepted
                    $mail->Port = SMTP_PORT;                                    // TCP port to connect to
                    //Recipients
                    $mail->setFrom(SMTP_UNAME, "Tên người gửi");
                    $mail->addAddress($_POST['email'], 'Tên người nhận');     // Add a recipient | name is option
                    $mail->addReplyTo(SMTP_UNAME, 'Tên người trả lời');
//                    $mail->addCC('CCemail@gmail.com');
//                    $mail->addBCC('BCCemail@gmail.com');
                    $mail->isHTML(true);                                  // Set email format to HTML
                    $mail->Subject = $_POST['tieude'];

                      $mail->Body ="<b>Người gửi : </b>".$_POST['hoten']."<br>"."<b>Phone : </b>".$_POST['phone']."<br>"."<b>Nội dung : </b>".$_POST['noidung'];
                    $mail->AltBody = "<b>Người gửi : </b>".$_POST['hoten']."<br>"."<b>Phone : </b>".$_POST['phone']."<br>"."<b>Nội dung : </b>".$_POST['noidung'];  //None HTML
                    $result = $mail->send();
                    if ($result) {
                        echo "<script>alert('Thư được gửi thành công!');</script>";
                    }else{
                          echo "<script>alert('Có lỗi xảy ra trong quá trình gửi mail!');</script>";
                    }
                } catch (Exception $e) {
                    echo 'Message could not be sent. Mailer Error: ', $mail->ErrorInfo;
                } }
                                     } 
                                     ?>
                                    <form method="post" action="">

                                        <div class="form-group">
                                            <label for="contactFormName" class="sr-only">Tên</label>
                                            <input required="" id="contactFormName" class="form-control input-lg"  placeholder="Tên của bạn" name="hoten" value="" type="text">
                                        </div>
                                        <div class="form-group">
                                            <label for="contactFormName" class="sr-only">Số điện thoại</label>
                                            <input required="" id="contactFormPhone" class="form-control input-lg" placeholder="Số điện thoại của bạn" name="phone" value="" type="text">
                                        </div>
                                        <div class="form-group">
                                            <label for="contactFormEmail" class="sr-only">Email</label>
                                            <input required="" name="email" placeholder="Email"  value="" type="email">
                                        </div>
                                        <div class="form-group">
                                            <label for="contactFormTitle" class="sr-only">Tiêu đề</label>
                                            <input required="" name="tieude" id="contactFormTitle" class="form-control input-lg"placeholder="Tiêu đề" value="" type="text">
                                        </div>
                                        <div class="form-group">
                                            <label for="contactFormMessage" class="sr-only">Nội dung</label>
                                            <textarea required="" rows="6"class="form-control" placeholder="Viết bình luận" id="contactFormMessage" name="noidung"></textarea>
                                        </div>
                                        <input class="btn btn-primary btn-lg" value="Gửi liên hệ" type="submit" name="send">
                                    </form>
                                </div>
                                <div class="col-md-5" id="col-right">
                                    <h3>Địa chỉ liên lạc</h3>
                                    <hr class="line-right">
                                    <h3 class="name-company">TRƯỜNG ĐẠI HỌC CÔNG NGHỆ THÔNG TIN & TRUYỀN THÔNG VIỆT - HÀN</h3>
                                   
                                    <ul class="info-address">
                                        <li class="m-b-5">
                                            <i class="fa fa-map-marker" aria-hidden="true"></i>
                                            <span>ĐƯỜNG NAM KÌ KHỞI NGHĨA, QUẬN NGŨ HÀNH SƠN, ĐÀ NẴNG</span>
                                        </li>
                                        <li class="m-b-5">
                                            <i class="glyphicon glyphicon-envelope m-r-5"></i>
                                            <span>vku@gmail.com.vn</span>
                                        </li>
                                        <li class="m-b-5">
                                            <i class="fa fa-phone" aria-hidden="true"></i>
                                            <span>0985xxxxxx</span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                       <script type="text/javascript">
        var map;
        var infowindow;
        var marker = new Array();
        var old_id = 0;
        var infoWindowArray = new Array();
        var infowindow_array = new Array(); 
        function initialize() {
            var defaultLatLng = new google.maps.LatLng(15.97521687898827, 108.25323739665288);

            var myOptions = { zoom: 16, center: defaultLatLng, scrollwheel: true, mapTypeId: google.maps.MapTypeId.ROADMAP };
            map = new google.maps.Map(document.getElementById("map_canvas"), myOptions);
            map.setCenter(defaultLatLng);

            if (Maps.length <= 0) {
                var arrLatLng = new google.maps.LatLng(15.97521687898827, 108.25323739665288);
                var myHtml = "<div class='map-description'> <strong>" + firstMap.Name + "</strong><br/>Địa chỉ: <span>" + firstMap.Address + "</span><br/>Điện thoại: <span>" + firstMap.Phone + "</span><br/></div>";
                infoWindowArray[firstMap.Id] = myHtml;
                loadMarker(arrLatLng, infoWindowArray[firstMap.Id], firstMap.Id);
            }

            $.each(Maps, function (index, it) {
                var arrLatLng = new google.maps.LatLng(it.PosX, it.PosY);
                var myHtml = "<div class='map-description'> <strong>" + it.Name + "</strong><br/>Địa chỉ: <span>" + it.Address + "</span><br/>Điện thoại: <span>" + it.Phone + "</span><br/></div>";
                infoWindowArray[it.Id] = myHtml;
                loadMarker(arrLatLng, infoWindowArray[it.Id], it.Id);
            });


            moveToMaker(firstMap.Id);
        }
        function loadMarker(myLocation, myInfoWindow, id) {
            marker[id] = new google.maps.Marker({ position: myLocation, map: map, visible: true });
            var popup = myInfoWindow;
            infowindow_array[id] = new google.maps.InfoWindow({ content: popup });
            google.maps.event.addListener(marker[id], 'click', function () {
                if (id == old_id) return;
                if (old_id > 0)
                    infowindow_array[old_id].close();
                infowindow_array[id].open(map, marker[id]);
                old_id = id;
            });
            google.maps.event.addListener(infowindow_array[id], 'closeclick', function () { old_id = 0; });
        }
        function moveToMaker(id) {
            var location = marker[id].position;
            map.setCenter(location);
            if (old_id > 0)
                infowindow_array[old_id].close();
            infowindow_array[id].open(map, marker[id]);
            old_id = id;
        }
    </script>
    <!--End-->
<script type="text/javascript">
    var firstMap= {"Id":2005,"ShopId":0,"Name":"TRƯỜNG ĐẠI HỌC CÔNG NGHỆ THÔNG TIN VÀ TRUYỀN THÔNG VIỆT - HÀN","Address":"ĐƯỜNG NAM KÌ KHỞI NGHĨA ,QUẬN NGŨ HÀNH SƠN, ĐÀ NẴNG","Phone":"(032) 93 34 54 ","PosX":15.975237507981483,"PosY":108.25325885432423,"Index":0,"Inactive":false};
    var Maps= [];
    window.Maps = Maps;
    $(document).ready(function () {
        initialize();
    });
</script>
                    </div>
                </div>
            </div>
        </div>
    </div>