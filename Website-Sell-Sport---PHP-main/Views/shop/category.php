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
<!-- <div class="box-product widget_block_sidebar">
    <div class="title_product_related widget_title_sidebar">
        <h3>
            Sản phẩm Hot
        </h3>
    </div>
    <ul class="list_product_related widget_list_sidebar clearfix">
       <?php 
            if(isset($data) and $data != NULL){
                foreach ($data as  $value) {        
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
    <?php }}else{
            echo '<p> KHÔNG CÓ DỮ LIỆU </p>';}?>
    </ul>
</div> -->
</div>