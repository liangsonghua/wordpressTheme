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

$.fn.postLike = function() {
    if  ($( this ).hasClass('done')) {
        alert('您已赞过该文章');
        return   false ;
    }  else  {
        $( this ).addClass('done');
        var id = $( this ).data( "id" ),
            action = $( this ).data('action'),
            rateHolder = $( this ).children('.count');
        var ajax_data = {
            action:  "specs_zan" ,
            um_id: id,
            um_action: action
        };
        $.post( "/wp-admin/admin-ajax.php" , ajax_data,
            function(data) {
                $(rateHolder).html(data);
            });
        return   false ;
    }
};
$(document).on( "click" ,  ".specsZan" ,
    function() {
        $( this ).postLike();
    });