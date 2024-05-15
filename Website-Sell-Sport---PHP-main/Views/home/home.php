<?php
require_once("banner.php")
?>
<!-- <div class="adv">

    <section id="service">
        <div class="container m-b-30">
            <div class="row">
                <div id="service_home" class="clearfix">
                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-6 col-xxs-12 text-center m-b-xs-10">
                        <div class="service_item">
                            <div class="icon icon_product">
                                <img src="public/image/icon/icon_1.png" alt="">
                            </div>
                            <div class="description_icon">
                                <span class="large-text">
                                    Miễn phí giao hàng
                                </span>
                                <span class="small-text">
                                    Cho hóa đơn từ 450,000đ
                                </span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-6 col-xxs-12 text-center m-b-xs-10">
                        <div class="service_item">
                            <div class="icon icon_product">
                                <img src="public/image/icon/icon_2.png" alt="">
                            </div>
                            <div class="description_icon">
                                <span class="large-text">
                                    Giao hàng trong ngày
                                </span>
                                <span class="small-text">
                                    Với tất cả đơn hàng
                                </span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 text-center m-b-xs-10">
                        <div class="service_item">
                            <div class="icon icon_product">
                                <img src="public/image/icon/icon_3.png" alt="">
                            </div>
                            <div class="description_icon">
                                <span class="large-text">
                                    Sản phẩm an toàn
                                </span>
                                <span class="small-text">
                                    Cam kết chất lượng
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <-Begin-->
    <!--End-->
</div> 


<div class="main">
    <div class="container">
        <div class="row">
            <div class="col-md-3">

              
                <!--Begin-->
                <div class="box-adv" >
                    <div class="sidebar_banner" >
                         <?php $i=1; foreach ($data_banner as  $value) {  ?>
                        <div class="img_banner">
                            <a href="#">
                                <img src="public/image/slide/<?=$value['Hinh2']?>" class="img-responsive lazy" style="display:block;"><div class="figcaption"></div>
                            </a>

                        </div>
                          <?php } ?>
                        
                    </div>
                </div>
                <!--End-->
                
                <!-- Blog sidebar -->
                <div class="sidebar_blogs">
                    <h3 title="bài viết mới" class="sidebar_title">
                        Bài viết nổi bật
                    </h3>
                    <div class="blog_content">
                        <?php $i=1; foreach ($data_blog as  $value) {  ?>

                            <div class="article_item">
                                <div class="article_img">
                                    <a href="?act=tintuc&id=<?=$value['id']?>">
                                        <img src="public/image/tintuc/<?=$value['image']?>" alt="<?=$value['title']?>" title="<?=$value['title']?>">
                                    </a>
                                </div>
                                <div class="article_content clearfix">
                                    <div class="title">
                                        <h4><a href="?act=tintuc&id=<?=$value['id']?>" title="<?=$value['title']?>"><?=$value['title']?></a></h4>
                                    </div>
                                    <div class="article_meta">
                                                                               <div class="article_created">
                                            <i class="fa fa-calendar" aria-hidden="true"></i> <time datetime="<?=$value['date']?>"><?=$value['date']?></time>
                                        </div>
                                    </div>
                                    <div class="des">
                                        <p class="des1"><?=$value['tieude']?></p>

                                    </div>
                                    <a class="readmore" href="?act=tintuc&id=<?=$value['id']?>">Đọc tiếp <i class="fa fa-angle-double-right" aria-hidden="true"></i></a>
                                </div>
                            </div>

                        <?php } ?>                
                      
                    </div>
                </div>
                <!-- End blog sidebar -->
            </div>
            <div class="col-md-9">

                <div class="product_home">
                    <div class="product_home_image">
                        <a href="?act=shop&sp=1">
                            <img src="public/image/slide/iphone-12-banner.png" >
                            <div class="figcaption"></div>
                        </a>
                    </div>
                    <div class="clearfix">

                        <div class="section-heading">
                            <h2 >
                                <span>Điện thoại</span>
                            </h2>
                        </div>
                    </div>

                    <div class="clearfix">
                        <div class="product-list">

                           <?php 
                           if($data_sanpham1!=NULL){ 
                            for($r=0;$r<2;$r++){
                                ?>

                                <?php 
                                for ($i = $r*4; $i < (count($data_sanpham1)-4)*$r+4; $i++) {
                                    ?>

                                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6 product-wrapper zoomIn wow">
                                        <div class="product-block product-resize">
                                            <div class="product-image image-resize">
                                                <?php if($data_sanpham1[$i]['LoaiSale'] != '') { ?>
                                                <div class="sold-out"><?= $data_sanpham1[$i]['LoaiSale'] ?></div>
                                           <?php }else {?>
                                            <div class="sold-out hidden"></div>
                                        <?php } ?>
                                                <div class="product-sale hidden">
                                                    <span class="sale-lb"><?= $data_sanpham1[$i]['LoaiSale'] ?></span>
                                                </div>
                                                <a href="?act=detail&id=<?= $data_sanpham1[$i]['MaSP'] ?>">
                                                    <img class="first-img" src="public/image/sanpham/<?= $data_sanpham1[$i]['HinhAnh1'] ?>" alt="">
                                                </a>

                                                <div class="product-actions hidden-xs">
                                                    <div class="btn-add-to-cart" onclick="AddToCard(46444,1)">
                                                        <a href="?act=detail&id=<?= $data_sanpham1[$i]['MaSP'] ?>"><i class="fa fa-shopping-bag" aria-hidden="true"></i></a>
                                                    </div>
                                                    <div class="btn_quickview">
                                                        <a class="quickview" href="?act=detail&id=<?= $data_sanpham1[$i]['MaSP'] ?>"><i class="fa fa-eye"></i></a>
                                                    </div>
                                                </div>

                                            </div>
                                            <div class="product-info text-center m-t-xxs-20">
                                                <h3 class="pro-name">
                                                    <a href="?act=detail&id=<?= $data_sanpham1[$i]['MaSP'] ?>" title=""><?= $data_sanpham1[$i]['TenSP'] ?></a>
                                                </h3>
                                                <div class="pro-prices">
                                                    <span class="pro-price"><?= number_format($data_sanpham1[$i]['DonGia']) ?>&nbsp;₫</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                <?php }?>

                                <?php 
                            }
                        }?>


                    </div>
                </div>
                    <div class="show_more">
                        Mời bạn <a href="?act=shop&sp=1">Xem thêm các sản phẩm Điện thoại</a> khác
                    </div>
                </div>
                <div class="product_home">
                    <div class="product_home_image">
                        <a href="?act=shop&sp=2">
                            <img src="public/image/slide/galaxy.png" >
                            <div class="figcaption"></div>
                        </a>
                    </div>
                    <div class="clearfix">
                        <div class="section-heading">
                            <h2 >
                                <span>Hàng gia dụng</span>
                            </h2>
                        </div>
                    </div>

                    <div class="clearfix">
                        <div class="product-list">
                             <?php 
                            if($data_sanpham2!=NULL){ 
                                for($r=0;$r<2;$r++){
                        ?>

                         <?php 
                            for ($i = $r*4; $i < (count($data_sanpham2)-4)*$r+4; $i++) {
                                ?>

                                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6 product-wrapper zoomIn wow">
                                        <div class="product-block product-resize">
                                            <div class="product-image image-resize">
                                                  <?php if($data_sanpham2[$i]['LoaiSale'] != null) { ?>
                                                <div class="sold-out"><?= $data_sanpham2[$i]['LoaiSale'] ?></div>
                                           <?php }else {?>
                                            <div class="sold-out hidden"></div>
                                        <?php } ?>

                                                <a href="?act=detail&id=<?= $data_sanpham2[$i]['MaSP'] ?>">
                                                    <img class="first-img" src="public/image/sanpham/<?= $data_sanpham2[$i]['HinhAnh1'] ?>" alt="">
                                                </a>

                                                <div class="product-actions hidden-xs">
                                                    <div class="btn-add-to-cart" >
                                                        <a href="?act=detail&id=<?= $data_sanpham2[$i]['MaSP'] ?>"><i class="fa fa-shopping-bag" aria-hidden="true"></i></a>
                                                    </div>
                                                    <div class="btn_quickview">
                                                        <a class="quickview" href="?act=detail&id=<?= $data_sanpham2[$i]['MaSP'] ?>"><i class="fa fa-eye"></i></a>
                                                    </div>
                                                </div>

                                            </div>
                                            <div class="product-info text-center m-t-xxs-20">
                                                <h3 class="pro-name">
                                                    <a href="?act=detail&id=<?= $data_sanpham2[$i]['MaSP'] ?>" title=""><?= $data_sanpham2[$i]['TenSP'] ?></a>
                                                </h3>
                                                <div class="pro-prices">
                                                    <span class="pro-price"><?= number_format($data_sanpham2[$i]['DonGia']) ?>&nbsp;₫</span>
                                                     <del class="pro-compare-price"><?= number_format($data_sanpham2[$i]['DonGiaChinh']) ?>&nbsp;₫</del>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                            <?php }?>
                             <?php 
                            }
                        }?>
   
                        </div>
                    </div>
                    <div class="show_more">
                        Mời bạn <a href="?act=shop&sp=2">Xem thêm các sản phẩm</a> khác
                    </div>
                </div>

<!--                 <div class="product_home">
                    <div class="product_home_image">
                        <a href="?act=shop&sp=3">
                            <img src="public/image/slide/canon-banner.jpg" alt="">
                            <div class="figcaption"></div>
                        </a>
                    </div>
                    <div class="clearfix">
                        <div class="section-heading">
                            <h2 title="Sứa">
                                <span>Dụng cụ tập</span>
                            </h2>
                        </div>
                    </div>
                    <div class="clearfix">
                        <div class="product-list">


                          <?php 
                          if($data_sanpham3!=NULL){ 
                            for($r=0;$r<2;$r++){
                                ?>

                                <?php 
                                for ($i = $r*4; $i < (count($data_sanpham3)-4)*$r+4; $i++) {
                                    ?>

                                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6 product-wrapper zoomIn wow">
                                        <div class="product-block product-resize">
                                            <div class="product-image image-resize">
                                                  <?php if($data_sanpham3[$i]['LoaiSale'] != null) { ?>
                                                <div class="sold-out"><?= $data_sanpham3[$i]['LoaiSale'] ?></div>
                                           <?php }else {?>
                                            <div class="sold-out hidden"></div>
                                        <?php } ?>
                                               
                                                <a href="?act=detail&id=<?= $data_sanpham3[$i]['MaSP'] ?>">
                                                    <img class="first-img" src="public/image/sanpham/<?= $data_sanpham3[$i]['HinhAnh1'] ?>" alt="">
                                                </a>

                                                <div class="product-actions hidden-xs">
                                                    <div class="btn-add-to-cart" onclick="AddToCard(46444,1)">
                                                        <a href="?act=detail&id=<?= $data_sanpham3[$i]['MaSP'] ?>"><i class="fa fa-shopping-bag" aria-hidden="true"></i></a>
                                                    </div>
                                                    <div class="btn_quickview">
                                                        <a class="quickview" href="?act=detail&id=<?= $data_sanpham3[$i]['MaSP'] ?>"><i class="fa fa-eye"></i></a>
                                                    </div>
                                                </div>

                                            </div>
                                            <div class="product-info text-center m-t-xxs-20">
                                                <h3 class="pro-name">
                                                    <a href="?act=detail&id=<?= $data_sanpham3[$i]['MaSP'] ?>" title=""><?= $data_sanpham3[$i]['TenSP'] ?></a>
                                                </h3>
                                                <div class="pro-prices">
                                                    <span class="pro-price"><?= number_format($data_sanpham3[$i]['DonGia']) ?>&nbsp;₫</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                <?php }?>

                                <?php 
                            }
                        }?>

                        </div>
                    </div>
                    <div class="show_more">
                        Mời bạn <a href="?act=shop&sp=3">Xem thêm các sản phẩm</a> khác
                    </div>
                </div> -->
            </div>
        </div>
    </div>
</div>


<div class="partner">
    <div class="container">
        <div class="row">
            <div class="col-md-12">

                <!--Blog-->
                <section id="blog_index" class="container m-b-20">
                    <div class="row">
                        <div class="col-md-12 col-xs-12">
                            <div class="section-heading">
                                <h2 title="Tin tức nổi bật">
                                    <span>Tin tức nổi bật</span>
                                </h2>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div id="blog_index_list" class="owl-carousel">

                           <?php $i=1; foreach ($data_blog as  $value) {  ?>

                            <div class="article_item">
                                <div class="article_img">
                                    <a href="?act=tintuc&id=<?=$value['id']?>">
                                        <img src="public/image/tintuc/<?=$value['image']?>" alt="<?=$value['title']?>" title="<?=$value['title']?>">
                                    </a>
                                </div>
                                <div class="article_content clearfix">
                                    <div class="title">
                                        <h4><a href="?act=tintuc&id=<?=$value['id']?>" title="<?=$value['title']?>"><?=$value['title']?></a></h4>
                                    </div>
                                    <div class="article_meta">
                                       
                                        <div class="article_created">
                                            <i class="fa fa-calendar" aria-hidden="true"></i> <time datetime="<?=$value['date']?>"><?=$value['date']?></time>
                                        </div>
                                    </div>
                                    <div class="des">
                                        <p class="des1"><?=$value['tieude']?></p>

                                    </div>
                                    <a class="readmore" href="?act=tintuc&id=<?=$value['id']?>">Đọc tiếp <i class="fa fa-angle-double-right" aria-hidden="true"></i></a>
                                </div>
                            </div>

                        <?php } ?>             

                        </div>
                    </div>
                </section>
                <!--EndBlog-->
            </div>
        </div>
    </div>
</div>