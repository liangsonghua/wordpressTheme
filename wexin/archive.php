<?php get_header();?>
<div class="liangsonghua">
    <a href="https://github.com/liangsonghua" title="进入github下载该源码" target="_blank">
        <dl>
            <dt><img src="<?php echo get_template_directory_uri().'/images/weixin_liangsonghua.png';?>"alt="" /></dt>
            <dd class="title">梁松华</dd>
            <dd class="des">我不是一个PHPer,请叫我工程师</dd>
        </dl>
    </a>
</div>
<?php while ( have_posts() ) : the_post();?>
    <div class="time"><?php echo liangsonghua_updated_on();?></div>
    <div class="wenzhang">
        <div class="content">
            <a href="<?php the_permalink();?>">
                <div class="wz_top"></div>
                <div class="wz_biaoti"><?php the_title();?></div>
                <div class="wz_img"><img width='278' height="185" src="<?php echo get_template_directory_uri().'/images/loading_k.png';?>" original='<?php echo dmeng_the_thumbnail();?>' lazy="y"></div></div>
        <div class="wz_jj">
            <?php echo mb_strimwidth(strip_tags($post->post_content),0,50);;?>
        </div>
        <div class="wz_more">阅读全文</div>
        </a>
    </div>
    </div>
<?php endwhile;?>
</body>
</html>




