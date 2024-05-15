<!DOCTYPE html>
<html>
<head>
	 <meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
    <meta charset="UTF-8" />
    <title>QHT SHOP</title>
    <link href="public/image/icon/favicon.png" rel="shortcut icon" type="image/x-icon" />

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    

    <!--[if IE]><meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1' /><![endif]-->
    <!--[if lt IE 9]>
        <script src="/assets/100004/js/html5shiv.js"></script>
    <![endif]-->

   
    <!--CSS-->
    <link rel="stylesheet" href="public/css/bootstrap.min.css">
    <link rel="stylesheet" href="public/fontawesome/font-awesome.min.css">
    <link rel="stylesheet"  href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
 
    <!--<link rel="stylesheet" type="text/css" href="css/roboto.css"> -->
    <!--JS-->
    
    <script src="public/js/plugin.js"></script>
    <script src="public/js/option_selection.js"></script>
    <script src="public/js/api.jquery.js"></script>
    <!-- Đặt thẻ này vào phần đầu hoặc ngay trước thẻ đóng phần nội dung của bạn. -->
   
    <script src="public/js/script.js"></script>
  
    <link href="public/css/style.css" rel="stylesheet" type="text/css" />
    <link href="public/css/responsive.css" rel="stylesheet" type="text/css" />
     <link rel="stylesheet" href="public/css/xzoom.css">
      <script src="public/js/zoom1.js"></script>

    

</head>
<body>
	 <?php
    require_once("header_footer/header.php");
    ?>
    <?php
    require_once("dieuhuong.php");
    ?>
    <?php require_once("header_footer/footer.php"); ?>

   
<div style="display: none;" id="loading-mask">
    <div id="loading_mask_loader" class="loader">
        <img alt="Loading..." src="public/image/icon/ajax-loader-main.gif" />
        <div>
            Please wait...
        </div>
    </div>
</div>
<a href="javascript:void(0);" class="back-to-top"><span>Top</span></a>
<script type="text/javascript">
    $(".header-content").css({ "background": '' });
    $("html").addClass('');
</script>

<script src="public/js/district.min.js"></script>

<script src="public/js/plugin64tinhthanh.js"></script>

<script src="public/js/jsthongtin.js"></script>

<script src="public/js/zoom1.js"></script>

<script src="public/js/soluong.js"></script>
<script src="public/js/itemactive.js"></script>

<script >
     
  function addtocart(id){
     loai=$('.selector-wrapper .active').val();
     size=$('.selector-wrapper1 .active').val();
     num= $('#num').val();

     $.post('<?php  require_once('Controllers/CartController.php');
        $controller_obj = new CartController();  $controller_obj->add_cart();?>',{'id':id,'loai':loai,'size':size,'num':num},function(data){
          img = $('#xzoom-fancy').attr("src");
          $('#anhshow').attr({'src':img,}); 
          $('#tenspshow').text($('#tensp').text());
          $('#loaispshow').text(loai);
          $('#sizespshow').text(size);
          $('#soluongshow').val(num);
          $('#priceshow').text($('#priceproduct').text());
          $('#modalMyCart').modal();
          $('#numberCart').load(data);


      }
      );


 };

 function updateCart(id){
    num=$('#quantity').val();
    $.post('<?php  require_once('Controllers/CartController.php');
        $controller_obj = new CartController();  $controller_obj->update_cart(); ?>',{'id':id,'num':num,},function(data){
            $('#listcart').load("http://localhost/wiroshop/?act=cart #cartx");
            $('#priceproduct').load("http://localhost/wiroshop/?act=cart #pricex")
        });
}
function deleteCart(id){
    $.post('<?php  require_once('Controllers/CartController.php');
        $controller_obj = new CartController();  $controller_obj->update_cart(); ?>',{'id':id,'num':0,},function(data){
            $('#listcart').load("http://localhost/wiroshop/?act=cart #cartx");
            $('#priceproduct').load("http://localhost/wiroshop/?act=cart #pricex");
        });
}
                            
</script>
<script >
  $('#ratingForm').on('submit', function(event){
    event.preventDefault();
    var formData = $(this).serialize();
    $.ajax({
      type : 'POST',  
      url : '<?php  require_once('Controllers/DetailController.php');
        $controller_obj = new DetailController();
        $controller_obj->add_rating(); ?>',          
      data : formData,
      success:function(response){
         alert("Cảm ơn bạn đã đánh sản phẩm");
       $("#ratingForm")[0].reset();
      window.location.reload(); 
   
      }
      
    });   
  });
 
</script>
<script src="public/js/rating.js"></script>

</body>

</html>