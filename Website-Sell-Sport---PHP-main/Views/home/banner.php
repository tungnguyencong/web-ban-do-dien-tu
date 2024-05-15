<div class="slideshow">
    <div class="container">
        <div class="row">
            <div class="col-md-3">
            </div>
            <div class="col-md-9 ">

                <div class="homeslider">
                    <div id="owl-slider" class="owl-carousel owl-carousel-banner">
                         <?php $i=1; foreach ($data_banner as  $value) {  ?>
                        <div class="item">
                            <a href="#"><img src="public/image/slide/<?=$value['HinhAnh']?>" alt="<?=$value['alt']?>"></a>
                        </div>
                         <?php } ?>
                        
                    </div>
                </div>
<!--Template--
    --End-->
</div>
</div>
</div>
</div>