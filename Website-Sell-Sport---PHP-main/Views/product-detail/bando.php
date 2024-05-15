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
                                HOTLINE<br><span>032 933 4542</span>
                            </div>
                            
                        </div>
                    </div>
                    <!--End-->
                </div>
                <div class="col-md-9">

                    <div class="breadcrumb clearfix">
                        <ul>
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
                    <div class="contact-content" >
                        <h1 class="title clearfix">
                            <span>
                                Bản đồ
                            </span>
                        </h1>
                        <div id="map_canvas" class="map clearfix" style="height:400px;">
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

