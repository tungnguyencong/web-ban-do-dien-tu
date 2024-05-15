 <div id="article">
    <div class="main">
        <div class="container">
            <div class="row">
                <div class="col-md-9">
                   <?php foreach ($data_tintuc as $value); ?>
                    <div class="breadcrumb clearfix">
                        <ul>
                            <li  class="home">
                                <a title="Đến trang chủ" href="?act=home" itemprop="url"><span itemprop="title">Trang chủ</span></a>
                            </li>
                            <li  class="icon-li">
                                <a title="Tin tức" href="?act=tintuc&id=<?=$value['id']?>" itemprop="url"><span itemprop="title">Tin tức</span></a>
                            </li>
                            <li class="icon-li"><strong><?= $value['title'];  ?></strong> </li>
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

                    <div class="news-detail articles_page clearfix">
                        <h1 title="" class="page-heading"><?= $value['title'];  ?></h1>
                        <div class="content-page">
                            <p class="createdat_article">
                                Ngày: <?= $value['date'];  ?>
                            </p>
                            <div class="content_article rte clearfix">
                                <div>
                                    <p><img alt="" src="public/image/tintuc/<?= $value['image'];  ?>" style="display:block; margin-left:auto; margin-right:auto" title="" /></p>

                                   <p>
                                       <?= $value['posts']?>
                                   </p>

                                        <p style="text-align:right"><strong><em>﻿Tổng hợp và sưu tầm</em></strong></p>
                                    </div>

                                </div>
                                <div class="author_article text-right"></div>
                                <div class="socials_article clearfix">
                                    <!-- AddThis Button BEGIN -->
                                    <div class="addthis_toolbox addthis_default_style">
                                        <a class="addthis_button_facebook_like" fb:like:layout="button_count"></a>


                                        <a class="addthis_button_google_plusone" g:plusone:size="medium"></a>
                                        <a class="addthis_counter addthis_pill_style addthis_nonzero"></a>
                                    </div>
                               
                                    <!-- AddThis Button END -->        </div>
                                    <div class="tag_article clearfix">
                                        <label>Từ khóa:</label>
                                        <ul class="clearfix">
                                            <li class="item">
                                                <a href="#" title="#"></a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="extra_blogs">
                                        <h4>
                                            Tin cùng danh mục
                                        </h4>
                                        <ul>
                                        </ul>
                                    </div>
                                </div>
                            </div>                    
                        </div>
                            <div class="col-md-3">

                                <!-- Blog menu -->
                                <div id="blog_menu" class="sidebar_blogs content_menu">
                                    <h3 title="danh mục blog" class="sidebar_title">Tin tức</h3>
                                    <ul id='nav_blog_sidebar' class='nav_sidebar'><li><a href='#'>Tin mới nhất</a></li>
                                        <li><a href='#'>Thể thao 24/7</a></li>
                                    </ul id='nav_blog_sidebar' class='nav_sidebar'>
                                </div>
                                <!-- End Blog menu -->
                                <!-- Blog sidebar -->
                                <div class="sidebar_blogs">
                                    <h3 title="bài viết mới" class="sidebar_title">
                                        Bài viết nổi bật
                                    </h3>
                                    <div class="blog_content">
                                        <?php foreach ($data_all as $value) {
                                            
                                         ?>
                                        <div class="article_item">
                                            <div class="article_img">
                                                <a href="?act=tintuc&id=<?=$value['id']?>">
                                                    <img src="public/image/tintuc/<?=$value['image']?>" alt="" title="">
                                                </a>
                                            </div>
                                            <div class="article_content clearfix">
                                                <div class="title">
                                                    <h4><a href="?act=tintuc&id=<?=$value['id']?>" title=""><?=$value['title']?></a></h4>
                                                </div>
                                               
                                                    <div class="article_created">
                                                        <i class="fa fa-calendar" aria-hidden="true"></i> <time datetime="<?=$value['date']?>"><?=$value['date']?></time>
                                                    </div>
                                                </div>
                                                <div class="des">
                                                    <p><?=$value['tieude']?></p>

                                                </div>
                                                <a class="readmore" href="?act=tintuc&id=<?=$value['id']?>">Đọc tiếp <i class="fa fa-angle-double-right" aria-hidden="true"></i></a>
                                            </div>
                                        </div>
                                    <?php } ?>

                                    
                                    
                                    
                                    </div>
                                </div>
                                <!-- End blog sidebar -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
