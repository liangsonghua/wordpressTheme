<?php
ob_start();
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

    /* 访问计数 */
function getPostViews($postID){
    $count_key = 'post_views_count';
    $count = get_post_meta($postID, $count_key, true);
    if($count==''){
        delete_post_meta($postID, $count_key);
        add_post_meta($postID, $count_key, '0');
        return "0 次";
    }
    return $count.' 次';
}

function setPostViews($postID) {
    $count_key = 'post_views_count';
    $count = get_post_meta($postID, $count_key, true);
    if($count==''){
        $count = 0;
        delete_post_meta($postID, $count_key);
        add_post_meta($postID, $count_key, '0');
    }else{
        if(empty($_COOKIE[$postID]) || $_COOKIE[$postID] != 'readed') {
            setcookie($postID, 'readed', time() + 24 * 60 * 60);
            $count++;
            update_post_meta($postID, $count_key, $count);
        }
    }
}
//开启评论
function wp33516_open_comments_for_pages( $status, $post_type, $comment_type ) {
    if ( 'page' === $post_type ) {
        $status = 'open';
    }
    return $status;
}
add_filter( 'get_default_comment_status', 'wp33516_open_comments_for_pages', 10, 3 );
function aurelius_comment($comment, $args, $depth)
{
    $GLOBALS['comment'] = $comment; ?>
    <li class="comment" id="li-comment-<?php comment_ID(); ?>">
        <div class="gravatar"> <?php if (function_exists('get_avatar') && get_option('show_avatars')) { echo get_avatar($comment, 48); } ?>
            <?php comment_reply_link(array_merge( $args, array('reply_text' => '回复','depth' => $depth, 'max_depth' => $args['max_depth']))) ?> </div>
        <div class="comment_content" id="comment-<?php comment_ID(); ?>">
            <div class="clearfix">
                <?php printf(__('<cite class="author_name">%s</cite>'), get_comment_author_link()); ?>
                <div class="comment-meta commentmetadata">发表于：<?php echo get_comment_time('Y-m-d H:i'); ?></div>
                &nbsp;&nbsp;&nbsp;<?php edit_comment_link('修改'); ?>
            </div>

            <div class="comment_text">
                <?php if ($comment->comment_approved == '0') : ?>
                    <em>你的评论正在审核，稍后会显示出来！</em><br />
                <?php endif; ?>
                <?php comment_text(); ?>
            </div>
        </div>
    </li>
<?php } ?>