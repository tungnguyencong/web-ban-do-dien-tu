
  function addtocart(id){
     loai=$('.selector-wrapper .active').val();
     size=$('.selector-wrapper1 .active').val();
     num= $('#num').val();

     $.post('<?php require_once('Controllers/CartController.php');
        $controller_obj = new CartController();
          $controller_obj->add_cart(); ?>',
          {'id':id,'loai':loai,'size':size,'num':num},function(data){
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
    $.post('<?php'  require_once('Controllers/CartController.php');
        $controller_obj = new CartController();  $controller_obj->update_cart(); '?>',{'id':id,'num':num,},function(data){
            $('#listcart').load("http://localhost/wiroshop/?act=cart #cartx");
            $('#priceproduct').load("http://localhost/wiroshop/?act=cart #pricex");
        });
}
function deleteCart(id){
    $.post('<?php'  require_once('Controllers/CartController.php');
        $controller_obj = new CartController();  $controller_obj->update_cart(); '?>',{'id':id,'num':0,},function(data){
            $('#listcart').load("http://localhost/wiroshop/?act=cart #cartx");
            $('#priceproduct').load("http://localhost/wiroshop/?act=cart #pricex");
        });
}
               