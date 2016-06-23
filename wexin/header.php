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
    <meta name="Keywords" content="算法爱好者 PHPer C++工程师">
    <meta name="description" content="欢迎访问，每日一个分享，每周一个秘诀，从你开始，代码人生">
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" />
    <link rel="stylesheet" href="<?php echo get_template_directory_uri().'/css/weixin.css';?>" type="text/css"  />
    <script type="text/javascript" src="<?php echo get_template_directory_uri().'/js/jquery-1.11.2.min.js';?>"></script>
    <script type="text/javascript" src="<?php echo get_template_directory_uri().'/js/uaredirect.js';?>"></script>
    <script type="text/javascript" src="<?php echo get_template_directory_uri().'/js/DD_belatedPNG.js';?>"></script>
    <script type="text/javascript" src="<?php echo get_template_directory_uri().'/js/single.js';?>"></script>
</head>
<body>