<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package wexin
 */
?>
<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title><?php bloginfo('name'); ?><?php wp_title(); ?></title>
    <meta name="generator" content="WordPress <?php bloginfo('version'); ?>" /> <!-- leave this for stats please -->
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" />
    <link rel="stylesheet" href="<?php echo get_template_directory_uri().'/css/weixin.css';?>" type="text/css"  />
    <script type="text/javascript" src="<?php echo get_template_directory_uri().'/js/jquery-1.6.2.min.js';?>"></script>
    <script type="text/javascript" src="<?php echo get_template_directory_uri().'/js/uaredirect.js';?>"></script>
    <script type="text/javascript" src="<?php echo get_template_directory_uri().'/js/DD_belatedPNG.js';?>"></script>
    <link rel="alternate" type="application/rss+xml" title="RSS 2.0" href="<?php bloginfo('rss2_url'); ?>" />
    <link rel="alternate" type="text/xml" title="RSS .92" href="<?php bloginfo('rss_url'); ?>" />
    <link rel="alternate" type="application/atom+xml" title="Atom 0.3" href="<?php bloginfo('atom_url'); ?>" />
    <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
    <?php wp_get_archives('type=monthly&format=link'); ?>
    <?php //comments_popup_script(); // off by default ?>
    <?php wp_head(); ?>
    <script type="text/javascript">
        var ImgLazy = function() {
            var $winH = $(window).height(); //获取窗口高度
            var $img = $("img[lazy='y']");  //获取页面上要延时加载的图片集合
            var $imgH = parseInt($img.height() / 2); //图片到一半的时候显示
            var $srcDef = "./images/loading_k.png";
            var runing=function() {
                $img.each(function(i) {//遍历img
                    var $src = $(this).attr("original"); //获取当前img URL地址
                    var $scroTop = $(this).offset(); //获取图片位置
                    if ($scroTop.top + $imgH >= $(window).scrollTop() && $(window).scrollTop() + $winH >= $scroTop.top + $imgH) {//判断窗口至上往下的位置
                        if ($(this).attr("src") == $srcDef) {
                            $(this).hide();
                        }
                        $(this).attr("src", function() { return $src }).fadeIn(300); //元素属性交换
                    }
                })
            }
            runing(); //页面刚载入时判断要显示的图片
            $(window).scroll(function() {
                runing(); //滚动刷新
            })
        };
        $(function() {
            ImgLazy();
        });
    </script>
</head>