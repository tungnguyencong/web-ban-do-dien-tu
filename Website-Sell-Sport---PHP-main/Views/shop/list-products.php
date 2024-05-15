<div class="col-md-9">

    <div class="breadcrumb clearfix">
        <ul>
            <li itemtype="http://shema.org/Breadcrumb" itemscope="" class="home">
                <a title="Đến trang chủ" href="/" itemprop="url"><span itemprop="title">Trang chủ</span></a>
            </li>
            <li class="icon-li"><strong>Sản phẩm</strong> </li>
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

 <div class="product-content">
    <h1 title="products" class="page_heading ">
        Sản phẩm
    </h1>
    <div class="sortPagibar m-b-15 clearfix">
        <div class="pull-left">
            <div class="collection_view">
                <button type="button" title="Gird" class="change_view change_view_active" data-view="grid">
                    <span class="icon_fallback_text">
                        <span class="fa fa-th" aria-hidden="true"></span>
                        <span class="fallback-text hidden">Dạng lưới</span>
                    </span>
                </button>
                <button type="button" title="List" class="change_view" data-view="list">
                    <span class="icon_fallback_text">
                        <span class="fa fa-th-list" aria-hidden="true"></span>
                        <span class="fallback-text hidden">Dạng danh sách</span>
                    </span>
                </button>
            </div>
        </div>
        <div class="pull-right">

            <div class="browse-tags">
               Số sản phẩm: <?= $data_tong ?>
            </div>
        </div>
    </div>
    <div class="product_list grid clearfix">

        <?php 
        if(isset($data) and $data != NULL){
            foreach ($data as  $value) {        
                ?>
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6 product-wrapper zoomIn wow">
                    <div class="product-block product-resize m-b-20">
                        <div class="product-image image-resize">
                            <div class="sold-out">Hot</div>
                            <a href="?act=detail&id=<?=$value['MaSP']?>">
                                <img class="first-img" src="public/image/sanpham/<?=$value['HinhAnh1']?>" alt="">
                            </a>
                            <div class="product-actions hidden-xs">
                                <div class="btn-add-to-cart" >
                                    <a href="?act=detail&id=<?=$value['MaSP']?>"><i class="fa fa-shopping-bag" aria-hidden="true"></i></a>
                                </div>
                                <div class="btn_quickview">
                                    <a class="quickview" href="?act=detail&id=<?=$value['MaSP']?>"><i class="fa fa-eye"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="product-info text-center m-t-xxs-20">
                            <h3 class="pro-name">
                                <!-- <a href="?act=detail&id=<?=$value['MaSP']?>" title="<?=$value['title']?>"><?= $value['MaSP']?></a> -->
                            </h3>
                            <div class="pro-prices">
                                <span class="pro-price"><?=number_format($value['DonGia'])?>&nbsp;₫</span>
                            </div>
                        </div>
                    </div>
                </div>
            <?php }}
            else{
                echo '<p> KHÔNG CÓ DỮ LIỆU </p>';}?>

                <div class="icon-loading" style="display: none;">
                    <div class="uil-ring-css">
                        <div></div>
                    </div>
                </div>
            </div>
            <div class="paginate">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" id="pagination">
                    <div class="row">
                         <?php if ($data_tong > 12 and isset($test)) { ?>

                        
                                      <?php  for ($i = 1; $i <= $data_tong / 12; $i++) { ?>            
                       
                                    <a class="page_node  current" href="?act=shop&trang=<?= $i ?>"><?= $i ?></a>                    
                                          
                         <?php } ?>
                     
                        <?php }
                                    ?>
                    </div>
                </div>
            </div>
        </div>
<!--Template--
    --End-->
</div>