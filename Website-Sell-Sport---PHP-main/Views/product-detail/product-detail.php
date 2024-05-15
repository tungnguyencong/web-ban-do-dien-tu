<?php if ($data != null) { ?>
<div id="product">
    <div class="main">
        <div class="container">
            <div class="row">
                <div class="col-md-9">

                    <div class="breadcrumb clearfix">
                        <ul>
                            <li class="home">
                                <a title="Đến trang chủ" href="?act=home" itemprop="url"><span itemprop="title">Trang chủ</span></a>
                            </li>
                            <li itemtype="http://shema.org/Breadcrumb" itemscope="" class="category17 icon-li">
                                <div class="link-site-more">
                                    <a title="" href="" itemprop="url">
                                        <span itemprop="title"><?= $data['MaDM'] ?></span>
                                    </a>
                                </div>
                            </li>
                            <li class="productname icon-li"><strong><?= $data['TenSP'] ?></strong> </li>
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
                    

                    <div class="product-detail clearfix relative " >

                        <span ></span>
                        <!--Begin-->
                        <div class="clearfix">
                            <div class="row">
                                <div class="col-md-6 col-sm-6 col-xs-12 product-image clearfix">
                                    <div class="sp-loading hidden"><img src="public/image/icon/sp-loading.gif" alt=""><br>LOADING IMAGES</div>
                                    <div class="sp-wrap" style="display:inline-block;">
                                     <div class="sp-large sp-non-touch xzoom-container">
                                        <a href="">
                                             <?php if ($data['HinhAnh1'] != null) { ?>
                                            <img class="xzoom3" id="xzoom-fancy" src="public/image/sanpham/<?= $data['HinhAnh1'] ?>" xoriginal="public/image/sanpham/<?= $data['HinhAnh1'] ?>" alt="">
                                             <?php } ?>
                                        </a>

                                    </div>
                <div class="xzoom-thumbs"> 
                        <a href="public/image/sanpham/<?= $data['HinhAnh1'] ?>">                          
                        <img class="xzoom-gallery" width="80" src="public/image/sanpham/<?= $data['HinhAnh1'] ?>" xpreview="public/image/sanpham/<?= $data['HinhAnh1'] ?>" alt="">  
                    </a> 
                        <a href="public/image/sanpham/<?= $data['HinhAnh2'] ?>"> 
                            <img class="xzoom-gallery" width="80" src="public/image/sanpham/<?= $data['HinhAnh2'] ?>" alt="">  
                      </a>
                      <a href="public/image/sanpham/<?= $data['HinhAnh3'] ?>"> 
                            <img class="xzoom-gallery" width="80" src="public/image/sanpham/<?= $data['HinhAnh3'] ?>" alt="">  
                      </a>
                      <a href="public/image/sanpham/<?= $data['HinhAnh4'] ?>"> 
                            <img class="xzoom-gallery" width="80" src="public/image/sanpham/<?= $data['HinhAnh4'] ?>" alt="">  
                      </a>
                  </div> 
              </div>


              <script type="text/javascript">
                  $(".xzoom3, .xzoom-gallery").xzoom({tint: '#333', Xoffset: 15});
              </script>
          </div>
           <?php  
             $itemRating = $data_rating; 
             $ratingNumber = 0;
             $count = 0;
             $fiveStarRating = 0;
             $fourStarRating = 0;
             $threeStarRating = 0;
             $twoStarRating = 0;
             $oneStarRating = 0; 
             foreach($itemRating as $rate){
              $ratingNumber+= $rate['ratingNumber'];
              $count += 1;
              if($rate['ratingNumber'] == 5) {
                $fiveStarRating +=1;
              } else if($rate['ratingNumber'] == 4) {
                $fourStarRating +=1;
              } else if($rate['ratingNumber'] == 3) {
                $threeStarRating +=1;
              } else if($rate['ratingNumber'] == 2) {
                $twoStarRating +=1;
              } else if($rate['ratingNumber'] == 1) {
                $oneStarRating +=1;
              }
            }
            $average = 0;
            if($ratingNumber && $count) {
              $average = $ratingNumber/$count;
            } 
            ?>
            <?php $countdanhgia=0; foreach ($data_danhgia as $valuedanhgia) {
              $countdanhgia++;
            } ?>    

          <div class="col-md-6 col-sm-6 col-xs-12 clearfix">
           <h1 class="name m-b-5" id='tensp'><?= $data['TenSP'] ?></h1>
           <div class="product_price p-b-10" style="color:#ff0000;"><?php printf('%.1f', $average); ?>&nbsp;<small><i class="fa fa-star" aria-hidden="true" style="color: #ff0000;"></i>
           <i class="fa fa-star" aria-hidden="true" style="color: #ff0000;"></i>
         <i class="fa fa-star" aria-hidden="true" style="color: #ff0000;"></i>
       <i class="fa fa-star" aria-hidden="true" style="color: #ff0000;"></i>
     <i class="fa fa-star" aria-hidden="true" style="color: #ff0000;"></i></small>&nbsp;|&nbsp;
     <span><?=$countdanhgia?> Đánh giá</span>
   </div>
            <div class="product_price p-b-10" >
                <div ><ins class="m-b-5" id=priceproduct><?=number_format($data['DonGia'])?>&nbsp;₫</ins>
                </div>
            </div>

            <div class="product-code p-b-10">Mã SP: <?= $data['MaSP'] ?></div>
            <div class="des p-b-10">
                <p><?= $data['MoTa'] ?></p>
            </div>


            <div class="social">
                <!-- AddThis Button BEGIN -->
                <div class="addthis_toolbox addthis_default_style">
                    <a class="addthis_button_facebook_like" fb:like:layout="button_count"></a>
                    <a class="addthis_button_google_plusone" g:plusone:size="medium"></a>
                    <a class="addthis_counter addthis_pill_style addthis_nonzero"></a>
                </div>

                <!-- AddThis Button END -->
            </div>


            <div id="add-item-form" class="variants clearfix m-b-10 p-b-10">
                <div class="select p-b-10 p-t-10 clearfix" >
                    <div class="selector-wrapper" >
                        <label>Loại</label>
                        <?php if($data['Loai1']!=null){ ?>
                       <input  class="title"  type="button" name="" value="<?= $data['Loai1'] ?>">
                     <?php } ?>
                      <?php if($data['Loai2']!=null){ ?>
                       <input  class="title"  type="button" name="" value="<?= $data['Loai2'] ?>">
                     <?php } ?>
                       <?php if($data['Loai3']!=null){ ?>
                       <input  class="title"  type="button" name="" value="<?= $data['Loai3'] ?>">
                     <?php } ?>
                       <?php if($data['Loai4']!=null){ ?>
                       <input  class="title"  type="button" name="" value="<?= $data['Loai4'] ?>">
                     <?php } ?>
                    </div>
                 
                    <!--  <div class="selector-wrapper1" >
                        <label>Size</label>
                          <?php if($data['Size1']!=null){ ?>
                       <input  class="title"  type="button" name="" value="<?= $data['Size1'] ?>">
                     <?php } ?>
                      <?php if($data['Size2']!=null){ ?>
                       <input  class="title"  type="button" name="" value="<?= $data['Size2'] ?>">
                     <?php } ?>
                       <?php if($data['Size3']!=null){ ?>
                       <input  class="title"  type="button" name="" value="<?= $data['Size3'] ?>">
                     <?php } ?>
                       <?php if($data['Size4']!=null){ ?>
                       <input  class="title"  type="button" name="" value="<?= $data['Size4'] ?>">
                     <?php } ?>
                    </div> -->
                </div>
                <div class="clearfix product_quantity m-t-10 m-b-20">
                    <label class="label_quantity m-b-5">Số lượng</label>
                    <button class="button btn_minus b-r-0 minus is-form"  value="-" >-</button>
                    <input aria-label="quantity" name="num" class="quantity text-center input-qty" min='1' max="10" id="num" value="1" type="number" >
                    <button class="button btn_plus b-l-0 plus is-form" type="button" value="+">+</button>
                </div>
                <div class="button clearfix" >
                    <div class="col-lg-6 col-sm-6 col-xs-6 col-xxs-12 p-l-0 p-r-xxs-0 m-b-10">
                        <button id="<?=$data['MaSP']?>" onclick="addtocart(<?=$data['MaSP']?>)" class="add-to-cart"><i class="glyphicon fa fa-shopping-cart"></i> Thêm giỏ hàng</button>

                      </div>

                    <div class="col-lg-6 col-sm-6 col-xs-6 col-xxs-12 p-r-0 p-l-xxs-0 m-b-10"><button id="buy-now" href="?act=cart&xuli=add&id=<?=$data['MaSP']?>" ><i class="glyphicon fa fa-check"></i> Mua ngay</button></div>
                   
                </div>
                <div class="button clearfix hidden" >
                    <button class="btn btn-primary" disabled="disabled"><i class="glyphicon fa fa-shopping-cart add_to_cart"></i> Hết hàng</button>
                </div>
            
            </div>
        </div>
    </div>
</div>



<div role="tabpanel" class="product_description product-tabs panel-group ">
    <ul class="nav nav-tabs" role="tablist">
        <li class="active">
            <a data-toggle="tab" href="#moreinfo" role="tab">Chi Tiết Sản Phẩm</a>
        </li>
        <li >
            <a data-toggle="tab" href="#reviews" role="tab">Đánh giá</a>
        </li>
    </ul>
    <div class="tab-content">
        <div class="tab-pane fade active in" id="moreinfo" >
            <div class="container-fluid rte" >
                <p><?= $data['MoTa1'] ?></p>

                <p><?= $data['MoTa2'] ?></p>

                
                     
                <p>
                     <?php if ($data['HinhAnh5'] != null) { ?>
                    <img alt="" src="public/image/sanpham/<?= $data['HinhAnh5'] ?>" style="display:block; margin-left:auto; margin-right:auto" title="">
                     <?php } ?>
                </p>

               
                     <?php if ($data['HinhAnh6'] != null) { ?>
                    <img alt="" src="public/image/sanpham/<?= $data['HinhAnh6'] ?>" style="display:block; margin-left:auto; margin-right:auto" title="">
                     <?php } ?>
                </p>

               

                 <p>
                     <?php if ($data['HinhAnh7'] != null) { ?>
                    <img alt="" src="public/image/sanpham/<?= $data['HinhAnh7'] ?>" style="display:block; margin-left:auto; margin-right:auto" title="">
                     <?php } ?>
                </p>

              

                 <p>
                     <?php if ($data['HinhAnh8'] != null) { ?>
                    <img alt="" src="public/image/sanpham/<?= $data['HinhAnh8'] ?>" style="display:block; margin-left:auto; margin-right:auto" title="">
                     <?php } ?>
                </p>

               
            </div>
        </div>


        <div class="tab-pane fade in" id="reviews" >
            <div class="container-fluid rte" >
           
            
             <div id="ratingDetails" >     
              <div class="row">     
                <div class="col-sm-3">        
                  <h4>Đánh giá </h4>
                  <h2 class="bold padding-bottom-7"><?php printf('%.1f', $average); ?><small>/ 5</small></h2>
                  <?php
        $averageRating = round($average, 0);
        for ($i = 1; $i <= 5; $i++) {
          $ratingClass = "btn-default btn-grey";
          if($i <= $averageRating) {
            $ratingClass = "btn-warning";
          }
        ?>       
                  <button type="button" class="btn btn-sm <?php echo $ratingClass; ?>" aria-label="Left Align">
                    <span class="glyphicon fa fa-star" aria-hidden="true"></span>
                  </button> 
                 <?php } ?> 

                </div>
                <div class="col-sm-4">
                  <div class="pull-left">
                    <?php
        $fiveStarRatingPercent = round(($fiveStarRating/5)*100);
        $fiveStarRatingPercent = !empty($fiveStarRatingPercent)?$fiveStarRatingPercent.'%':'0%';  
        
        $fourStarRatingPercent = round(($fourStarRating/5)*100);
        $fourStarRatingPercent = !empty($fourStarRatingPercent)?$fourStarRatingPercent.'%':'0%';
        
        $threeStarRatingPercent = round(($threeStarRating/5)*100);
        $threeStarRatingPercent = !empty($threeStarRatingPercent)?$threeStarRatingPercent.'%':'0%';
        
        $twoStarRatingPercent = round(($twoStarRating/5)*100);
        $twoStarRatingPercent = !empty($twoStarRatingPercent)?$twoStarRatingPercent.'%':'0%';
        
        $oneStarRatingPercent = round(($oneStarRating/5)*100);
        $oneStarRatingPercent = !empty($oneStarRatingPercent)?$oneStarRatingPercent.'%':'0%';
        
        ?>
                    <div class="pull-left" style="width:35px; line-height:1;">
                      <div style="height:9px; margin:5px 0;">5 <span class="glyphicon fa fa-star"></span></div>
                    </div>
                    <div class="pull-left" style="width:180px;">
                      <div class="progress" style="height:9px; margin:8px 0;">
                        <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="5" aria-valuemin="0" aria-valuemax="5" style="width: <?php echo $fiveStarRatingPercent; ?>">
                          <span class="sr-only"><?php echo $fiveStarRatingPercent; ?></span>
                        </div>
                      </div>
                    </div>
                    <div class="pull-right" style="margin-left:10px;"><?php echo $fiveStarRating; ?></div>
                  </div>

                  <div class="pull-left">
                    <div class="pull-left" style="width:35px; line-height:1;">
                      <div style="height:9px; margin:5px 0;">4 <span class="glyphicon fa fa-star"></span></div>
                    </div>
                    <div class="pull-left" style="width:180px;">
                      <div class="progress" style="height:9px; margin:8px 0;">
                        <div class="progress-bar progress-bar-primary" role="progressbar" aria-valuenow="4" aria-valuemin="0" aria-valuemax="5" style="width: <?php echo $fourStarRatingPercent; ?>">
                          <span class="sr-only"><?php echo $fourStarRatingPercent; ?></span>
                        </div>
                      </div>
                    </div>
                    <div class="pull-right" style="margin-left:10px;"><?php echo $fourStarRating; ?></div>
                  </div>
                  <div class="pull-left">
                    <div class="pull-left" style="width:35px; line-height:1;">
                      <div style="height:9px; margin:5px 0;">3 <span class="glyphicon fa fa-star"></span></div>
                    </div>
                    <div class="pull-left" style="width:180px;">
                      <div class="progress" style="height:9px; margin:8px 0;">
                        <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="3" aria-valuemin="0" aria-valuemax="5" style="width: <?php echo $threeStarRatingPercent; ?>">
                          <span class="sr-only"><?php echo $threeStarRatingPercent; ?></span>
                        </div>
                      </div>
                    </div>
                    <div class="pull-right" style="margin-left:10px;"><?php echo $threeStarRating; ?></div>
                  </div>
                  <div class="pull-left">
                    <div class="pull-left" style="width:35px; line-height:1;">
                      <div style="height:9px; margin:5px 0;">2 <span class="glyphicon fa fa-star"></span></div>
                    </div>
                    <div class="pull-left" style="width:180px;">
                      <div class="progress" style="height:9px; margin:8px 0;">
                        <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="2" aria-valuemin="0" aria-valuemax="5" style="width: <?php echo $twoStarRatingPercent; ?>">
                          <span class="sr-only"><?php echo $twoStarRatingPercent; ?></span>
                        </div>
                      </div>
                    </div>
                    <div class="pull-right" style="margin-left:10px;"><?php echo $twoStarRating; ?></div>
                  </div>
                  <div class="pull-left">
                    <div class="pull-left" style="width:35px; line-height:1;">
                      <div style="height:9px; margin:5px 0;">1 <span class="glyphicon fa fa-star"></span></div>
                    </div>
                    <div class="pull-left" style="width:180px;">
                      <div class="progress" style="height:9px; margin:8px 0;">
                        <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="1" aria-valuemin="0" aria-valuemax="5" style="width: <?php echo $oneStarRatingPercent; ?>">
                          <span class="sr-only"><?php echo $oneStarRatingPercent; ?></span>
                        </div>
                      </div>
                    </div>
                    <div class="pull-right" style="margin-left:10px;"><?php echo $oneStarRating; ?></div>
                  </div>
                </div>    
                    
              </div>
              <div id="ratingSection" style="padding-top: 20px;">

                <div class="row">
                  <div class="col-sm-12">
                    <form id="ratingForm" method="POST">          
                      <div class="form-group">
                        <h4>Đánh giá của bạn</h4>
                        <button type="button" class="btn btn-warning btn-sm rateButton" aria-label="Left Align">
                          <span class="glyphicon fa fa-star" aria-hidden="true"></span>
                        </button>
                        <button type="button" class="btn btn-default btn-grey btn-sm rateButton" aria-label="Left Align">
                          <span class="glyphicon fa fa-star" aria-hidden="true"></span>
                        </button>
                        <button type="button" class="btn btn-default btn-grey btn-sm rateButton" aria-label="Left Align">
                          <span class="glyphicon fa fa-star" aria-hidden="true"></span>
                        </button>
                        <button type="button" class="btn btn-default btn-grey btn-sm rateButton" aria-label="Left Align">
                          <span class="glyphicon fa fa-star" aria-hidden="true"></span>
                        </button>
                        <button type="button" class="btn btn-default btn-grey btn-sm rateButton" aria-label="Left Align">
                          <span class="glyphicon fa fa-star" aria-hidden="true"></span>
                        </button>
                        <input type="hidden" class="form-control" id="rating" name="rating" value="1">
                        <input type="hidden" class="form-control" id="itemId" name="itemId" value="<?= $data['MaSP']?>">
                        <input type="hidden" name="action" id="action" value="saveRating">
                      </div>    
                      <div class="form-group">
                        <label for="usr">Tiêu đề*</label>
                        <input type="text" class="form-control" id="title" name="title" required>
                      </div>
                      <div class="form-group">
                        <label for="comment">Bình luận*</label>
                        <textarea class="form-control" rows="5" id="comment" name="comment" required></textarea>
                      </div>
                      <?php if(isset($_SESSION['login'])){ ?>
                        <?php if(isset($valuedanhgia['MaND']) == $_SESSION['login']['MaND']){?>
                        <div class="form-group">
                            <p>Bạn đã đánh giá sản phẩm này rồi!</p>
                        <button type="submit" disabled="disabled" class="btn btn-info" id="saveReview">Bình luận</button> <button type="button" class="btn btn-info"onclick="location.href='?act=home' ">Cancel</button>
                      </div>  
                        <?php }else{ ?>
                      <div class="form-group">
                        <button type="submit" class="btn btn-info" id="saveReview">Bình luận</button> <button type="button" class="btn btn-info"onclick="location.href='?act=home' " id="">Cancel</button>
                      </div> 
                      <?php } ?>    
                    <?php }else { ?>
                      <div class="form-group">Vui lòng đăng nhập để thực hiện chức năng này!</div>
                    <?php } ?>
                    </form>
                  </div>
                </div>    
              </div>
     <!-- showcomment -->
              <div class="row" >
                <div class="col-sm-12">
                  <hr>
                  <div class="review-block" >    

                    <?php
                    $itemRating = $data_rating;
                    foreach($itemRating as $rating){        
                      $date=date_create($rating['created']);
                      $reviewDate = date_format($date,"M d, Y");            
                      $profilePic = "profile.png";  
                      if($rating['avatar']) {
                        $profilePic = $rating['avatar'];  
                      }
                      ?>  

                    <div class="row" >
                      <div class="col-sm-3">
                        <img src="public/image/icon/<?php echo $profilePic; ?>" class="img-rounded user-pic">
                        <div class="review-block-name">By <a href="#"><?php echo $rating['HoTen']; ?></a></div>
                        <div class="review-block-date"><?php echo $reviewDate; ?></div>
                      </div>
                      <div class="col-sm-9">
                        <div class="review-block-rate">
                          <?php
                for ($i = 1; $i <= 5; $i++) {
                  $ratingClass = "btn-default btn-grey";
                  if($i <= $rating['ratingNumber']) {
                    $ratingClass = "btn-warning";
                  }
                ?>
                          <button type="button" class="btn btn-xs <?php echo $ratingClass; ?>" aria-label="Left Align">
                            <span class="glyphicon fa fa-star" aria-hidden="true"></span>
                          </button>               
                         <?php } ?>       
                        </div>
                        <div class="review-block-title"><?php echo $rating['title']; ?></div>
                        <div class="review-block-description"><?php echo $rating['comments']; ?></div>
                      </div>
                    </div>
                    <hr>
                    <?php } ?>          


                  </div>
                </div>
              </div>  
            </div>
          </div>
        </div>

      </div>
</div>
<!--End-->
<div class="modal fade" id="modalMyCart" tabindex="-1" role="dialog" aria-labelledby="gridSystemModalLabel" aria-hidden="true">
    <div class="modal-dialog  modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                    &times;
                </button>
                
                <h4 class="modal-title" id="modalMyCartLabel">Bạn vừa thêm 1 sản phẩm trong giỏ hàng.</h4>
            </div>
            <div class="modal-body">
                <table class="table" style="width:100%;">
                    <thead>
                        <tr>
                            <th></th>
                            <th>Tên sản phẩm</th>
                            <th>Loại</th>
                            <!-- <th>Size</th> -->
                            <th>Số lượng</th>
                            <th>Giá tiền</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        

                        <tr class="line-item" ng-repeat="item in OrderDetails">
                            <td class="item-image">
                                <img src="" class="img-responsive" id="anhshow" style="max-height:60px;" />
                            </td>
                            <td class="item-title">
                                <a href="">
                                  <span id='tenspshow'></span>
                              
                                </a>
                               
                            </td>
                            <td class="item-title">
                               <span id='loaispshow'>Loại:</span>
                            </td>
                            <!-- <td class="item-title">
                                <span id='sizespshow'>Size:</span>
                            </td> -->
                            <td class="item-quantity">
                                <input type="number" class="text" min="1" max="10" id="soluongshow" value="1"   />
                            </td>
                            <td class="item-price" id="priceshow">₫</td>
                            <td class="item-delete"><a ng-click="removeItemCart(item)" href="javascript:void(0)">Xóa</a></td>
                        </tr>
                        
                    </tbody>
                </table>
            </div>
            <div class="modal-footer">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="total-price-modal">
                            Tổng cộng : <span class="item-total">₫</span>
                        </div>
                    </div>
                </div>
                <div class="row margin-top-10">
                    <div class="col-lg-6">
                        <div class="comeback text-left">
                            <a href="?act=home">
                                <i class="fa fa-chevron-circle-left "></i> Tiếp tục mua hàng
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-6 text-right">
                        <div class="buttons btn-modal-cart">
                            <a class="btn btn-default" href="?act=cart">
                                Đặt hàng
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="modalCallMe" tabindex="-1" role="dialog" aria-labelledby="modalCallMeLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-body">
                <h2>Cám ơn Qúy Khách đã liên hệ đặt hàng</h2>
                <p>Shop sẽ gọi lại để tư vấn cho Quý khách hàng trong thời gian sớm nhất</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary" data-dismiss="modal">
                    OK
                </button>
            </div>
        </div>
    </div>
</div>
</div>

<div class="product-content product-other">
    <h1 title="products" class="page_heading ">
        Sản phẩm liên quan
    </h1>
    <div class="product_list grid clearfix">

         <?php foreach ($data_lq as $row) { ?>
        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6 product-wrapper zoomIn wow">
            <div class="product-block product-resize m-b-20">
                <div class="product-image image-resize">
                    <div class="sold-out">Hot</div>
                    <a href="?act=detail&id=<?= $row['MaSP'] ?>">
                        <img class="first-img" src="public/image/sanpham/<?= $row['HinhAnh1'] ?>" alt="">
                    </a>
                    <div class="product-actions hidden-xs">
                        <div class="btn-add-to-cart" onclick="addtocart(<?= $row['MaSP'] ?>)">
                            <a href="javascript:void(0);"><i class="fa fa-shopping-bag" aria-hidden="true"></i></a>
                        </div>
                        <div class="btn_quickview">
                            <a class="quickview" href="?act=detail&id=<?= $row['MaSP'] ?>"><i class="fa fa-eye"></i></a>
                        </div>
                    </div>
                </div>
                <div class="product-info text-center m-t-xxs-20">
                    <h3 class="pro-name">
                        <a href="?act=detail&id=<?= $row['MaSP'] ?>" title=""><?= $row['TenSP'] ?></a>
                    </h3>
                    <div class="pro-prices">
                        <span class="pro-price"><?=number_format($row['DonGia'])?>&nbsp;₫</span>
                    </div>
                </div>
            </div>
        </div>
        <?php } ?>     
        
    </div>
</div>                    
</div>
<div class="col-md-3">

    <div class="menu-product">
        <h3>
            <span>
                Sản phẩm
            </span>
        </h3>
        <ul class='level0'>

          <?php    $i = 1; foreach ($data_chitietDM as $row) { ?>

            <li class="child"><span><a href='?act=shop&sp=<?= $i?>'><i class='fa fa-arrow-circle-right'></i> <?= $data_danhmuc[$i-1]['TenDM'] ?></a></span><span class='open-close'><i class='fa fa-angle-down'></i></span>
                <ul class='level1 hidden-xs'>
                   <?php foreach ($row as $value) { ?>
                    <li><span><a href='?act=shop&sp=<?= $value['MaDM'] ?>&loai=<?= $value['TenLSP'] ?>'><i class='fa fa-check'></i> <?= $value['TenLSP'] ?></a></span></li>
                <?php } ?>

            </ul class='level1 hidden-xs'>
        </li>

        <?php $i++;
    } ?>

        </ul class='level0'>
</div>
<script type="text/javascript">
    $(document).ready(function () {
        $('.menu-product li.child .open-close').on('click', function () {
            $(this).removeAttr('href');
            var element = $(this).parent('li');
            if (element.hasClass('open')) {
                element.removeClass('open');
                element.children('ul').slideUp();
            }
            else {
                element.addClass('open');
                element.children('ul').slideDown();
            }
        });
    });
</script>

<!--Begin-->
<div class="box-sale-policy" >
    <h3><span>Chính sách bán hàng</span></h3>
    <div class="sale-policy-block">
        <ul>
            <li>Giao hàng TOÀN QUỐC</li>
            <li>Thanh toán khi nhận hàng</li>
            <li>Đổi trả trong <span>15 ngày</span></li>
            <li>Hoàn ngay tiền mặt</li>
            <li>Chất lượng đảm bảo</li>
            <li>Miễn phí vận chuyển:<span>Đơn hàng từ 3 món trở lên</span></li>
        </ul>
    </div>
    <div class="buy-guide">
        <h3>Hướng Dẫn Mua Hàng</h3>
        <ul>
            <li>
                Mua hàng trực tiếp tại website
                <b> WiroShop.com</b>
            </li>
            <li>
                Gọi điện thoại <strong>
                    032 93 34 542
                </strong> để mua hàng
            </li>
            <li>
                Mua tại Trung tâm CSKH:<br />
                <strong>Nam Kì Khởi Nghĩa,Quận Ngũ Hành Sơn ,Đà Nẵng</strong>
                <a href="?act=bando" rel="nofollow" target="_blank">Xem Bản Đồ
                   <image src="public/image/icon/source.gif" style="width: 40px;height: 40px;"></image>
                </a>

            </li>
            <li>
                Mua sỉ/buôn xin gọi <strong>
                    032 933 45 42
                </strong> để được
                hỗ trợ.
            </li>
        </ul>
    </div>
</div>
<!--End-->

<!--  <div class="box-product widget_block_sidebar">
    <div class="title_product_related widget_title_sidebar">
        <h3>
            Sản phẩm Hot
        </h3>
    </div>
    <ul class="list_product_related widget_list_sidebar clearfix">
     <?php 
           
                foreach ($data_hot as  $value) {        
        ?>   
        
        <li class="pro-loop clearfix">
            <div class="col-md-5 col-sm-5 col-xs-5">
                <a href="?act=detail&id=<?=$value['MaSP']?>" title="?act=detail&id=<?=$value['title']?>">
                    <img src="public/image/sanpham/<?=$value['HinhAnh1']?>" alt="">
                </a>
            </div>
            <div class="col-md-7 col-sm-7 col-xs-7">
                <a href="?act=detail&id=<?=$value['MaSP']?>" title="?act=detail&id=<?=$value['title']?>">
                    <h3 class="product_related_name">
                        <?=$value['TenSP']?>
                    </h3>
                    <p class="product_related_price">
                        <span class="product_related_price"><?=number_format($value['DonGia'])?>&nbsp;₫</span>
                        <span class="product_related_old_price"><?=number_format($value['DonGiaChinh'])?>&nbsp;₫</span>
                    </p>
                </a>
            </div>
        </li>
    <?php }?> 
    </ul>
</div>  -->
</div>
</div>
</div>
</div>
</div>
<?php } else {
    require_once("Views/error-404.php");
} ?>
