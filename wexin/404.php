<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <link rel="stylesheet" href="<?php echo get_template_directory_uri().'/sorry/css/index.css';?>" type="text/css"  />
    <title>该页面不存在</title>
</head>
<body onload ="load()">
<script language="javascript">
    <!--
    var targetUrl="http://"+window.location.host
    var count=9;
    function load()
    {
        timeout=setInterval("setBegin()",850);
    }
    function setBegin()
    {
        count--;
        document.getElementById('tipNum').innerHTML=count;
        if(count==0)
        {
            go();
        }
    }
    function go()
    {
        window.location.href=targetUrl;
        window.clearInterval(timeout);
    }
    //-->
</script>
<div class="zhezhao"></div>
<div id="container"><img class="shopimg" src="<?php echo get_template_directory_uri().'/sorry/images/sorry.gif';?>" /></div>
<div class="copyright">
    <dl>
        <dd class="logo"><a href="<?php echo home_url();?>" title="进入博客" target="_blank"></a></dd>
        <dd class="b">这里是404，即将在 <strong><span id="tipNum">9</span></strong> 秒之后进入 ，或点击<a href="<?php echo home_url();?>" title="直接进入首页" target="_blank">直接进入</a></dd>
    </dl>
</div>
</body>
</html>