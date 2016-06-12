<?php
/**
 * Created by PhpStorm.
 * User: liangsonghua
 * Date: 2016/6/11
 * Time: 17:52
 */
if ( ! function_exists( 'wexin_script' ) ) :
// 在init action处注册脚本，可以与其它逻辑代码放在一起
function wexin_script(){
    $url = get_template_directory_uri();
    // 注册样式表
    $styles = array(
        'defaultjs' => $url . '/js/jquery-1.6.2.min.js',
        'weixin' => $url . '/css/weixin.css',
        'uaredirect' => $url . '/js/uaredirect.js',
        'DD_belatedPNG' => $url . '/js/DD_belatedPNG.js',
        'sorry' => $url . '/sorry/css/index.css',
    );

    foreach( $styles as $k => $v ){
        wp_register_style( $k, $v, false );
    }

    // 注册脚本
}
endif;
add_action( 'wp_enqueue_scripts', 'wexin_script' );
/**
 * 获取文章发布 更新时间
 */
if ( ! function_exists( 'liangsonghua_updated_on' ) ) :
    function liangsonghua_updated_on() {
        $postDate = strtotime( get_the_date( 'c' ) );
        $updateDate = strtotime( get_the_modified_date('c') );
        $showTime = $updateDate >  $postDate ? $updateDate : $postDate;
        return date("Y-m-d H:i",$showTime);
    }
endif;
/*
 * 设置缩略图
 * */
function dmeng_the_thumbnail($size=array('300','600')) {
    $image_url = '';
    //如果有缩略图选择缩略图图片地址
    if ( has_post_thumbnail() ) {
        $image_url = wp_get_attachment_image_src( get_post_thumbnail_id() , $size);
        $image_url = $image_url[0];
    } else {
        //否则查找文章中有没图片
        global $post, $posts;
        $output = preg_match_all('/<img.+src=[\'"]([^\'"]+)[\'"].*>/i', $post->post_content, $matches);
        //如果文章里有图片，就选择第一张图片的地址
        if($output) $image_url = $matches[1][0];
    }
    return $image_url;
}