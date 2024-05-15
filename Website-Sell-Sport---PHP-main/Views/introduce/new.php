
<div id="blog-template">
    <div class="main">
        <div class="container">
            <div class="row">
                <div class="col-md-9">

                    <div class="breadcrumb clearfix">
                        <ul>
                            <li itemtype="http://shema.org/Breadcrumb" itemscope="" class="home">
                                <a title="Đến trang chủ" href="/" itemprop="url"><span itemprop="title">Trang chủ</span></a>
                            </li>
                            <li class="icon-li"><strong>Tin tức</strong> </li>
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

                    <div class="news-content">
                        <h1 title="tin tức" class="page-heading">
                            Tin tức
                        </h1>
                        <div class="blog_wrap">
                            <?php foreach ($data_all as $value) { ?>
                                
                           
                            <article class="blog_item clearfix">
                                <div class="blog_item_image text-center">
                                    <a href=""><img src="public/image/tintuc/<?=$value['image']?>" alt=""></a>
                                </div>
                                <div class="blog_item_content">
                                    <a href="?act=tintuc&id=<?=$value['id']?>" title="">
                                        <h2 title=""><?=$value['title']?></h2>
                                    </a>
                                    <p>
                                       <?=$value['date']?>
                                    </p>
                                    <div class="blog-content-short-description"><p><?=$value['tieude']?></p>
                                    </div>
                                </div>
                            </article>
                        <?php } ?>

                        
                    
                        </div>
                        <!-- Paginate -->
                        <!-- End paginate -->
                    </div>                    </div>
                    <div class="col-md-3">

                        <!-- Blog menu -->
                        <div id="blog_menu" class="sidebar_blogs content_menu">
                            <h3 title="danh mục blog" class="sidebar_title">Tin tức</h3>
                            <ul id='nav_blog_sidebar' class='nav_sidebar'><li><a href='#'>Về các sản phẩm nổi bật</a></li>
                                <li><a href='#'>So sánh các sản phẩm</a></li>
                            </ul id='nav_blog_sidebar' class='nav_sidebar'>
                        </div>
                        <!-- End Blog menu -->
                        <!-- Blog sidebar -->
                        <div class="sidebar_blogs">
                            <h3 title="bài viết mới" class="sidebar_title">
                                Bài viết nổi bật
                            </h3>

                            <div class="blog_content">
                                 <?php foreach ($data_all as $value) { ?>
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
                                        <div class="article_meta">
                                           
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