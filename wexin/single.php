<!Doctype html>
<html lang="en" xmlns="http://www.w3.org/1999/html">
<head>
    <meta charset="UTF-8">
    <title> <?php echo the_title();?></title>
    <link rel="stylesheet" href="<?php echo get_template_directory_uri().'/css/page_mp_article_improve_combo2e4987.css';?>" type="text/css"  />
    <link rel="stylesheet" href="<?php echo get_template_directory_uri().'/css/page_mp_article_improve2d1390.css';?>" type="text/css"  />
    <link rel="stylesheet" href="<?php echo get_template_directory_uri().'/css/not_in_mm2c9cd6.css';?>" type="text/css"  />
    <link rel="stylesheet" href="<?php echo get_template_directory_uri().'/css/bootstrap.min.css';?>" type="text/css"  />
    <script type="text/javascript" src="<?php echo get_template_directory_uri().'/js/jquery-1.11.2.min.js';?>"></script>
    <script type="text/javascript" src="<?php echo get_template_directory_uri().'/js/single.js';?>"></script>
</head>
<body id="activity-detail" class="zh_CN mm_appmsg not_in_mm" ontouchstart="">
<div id="js_cmt_mine" class="discuss_container editing access" style="display:none;">
    <div class="discuss_container_inner">
        <h2 class="rich_media_title"><?php echo the_title();?></h2>
        <span id="log"></span>
    </div>
</div>
<div id="md-viewer" class="rich_media">
    <div class="rich_media_inner">
        <div id="page-content">
            <div id="img-content" class="rich_media_area_primary">
                <h2 class="rich_media_title" id="activity-name">
                    <?php echo the_title();?>
                </h2>
                <div class="rich_media_meta_list">
                    <em id="post-date" class="rich_media_meta rich_media_meta_text"><?php echo liangsonghua_updated_on();?></em>
                    <a class="rich_media_meta rich_media_meta_link rich_media_meta_nickname" href="javascript:void(0);" id="post-user"><?php echo the_author();?></a>
                    <span class="rich_media_meta rich_media_meta_text rich_media_meta_nickname"><?php echo the_author();?></span>
                </div>
                <div class="rich_media_content " id="js_content">
                         <?php while(have_posts()):the_post();?>
                    <?php setPostViews(get_the_ID());?>
                    <?php echo the_content(); ?>
                             <div class="rich_media_tool" id="js_sg_bar">
                                 <!--                         <a class="media_tool_meta meta_primary"  href="" target="_blank">阅读原文</a>-->
                                 <div class="media_tool_meta tips_global meta_primary">阅读 <span><span id="sg_readNum3"><?php echo getPostViews(get_the_ID()); ?> </span></span></div>
                            </div>
                         <?php endwhile;?>
                </div>
            </div>

        </div>
    </div>
<!--        <p class="clearfix"><a href="#commentform" class="button float right" >发表评论</a> </p>-->

<!--                <div class="comments-template">-->
<!--            --><?php //comments_template(); ?>
<!--        </div>-->
</div>

    <script type="text/javascript">var cnzz_protocol = (("https:" == document.location.protocol) ? " https://" : " http://");document.write(unescape("%3Cspan id='cnzz_stat_icon_1254491718'%3E%3C/span%3E%3Cscript src='"s4.cnzz.com/z_stat.php%3Fid%3D1254491718' type='text/javascript'%3E%3C/script%3E"));</script>
</body>
</html>