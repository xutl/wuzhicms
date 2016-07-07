<?php defined('IN_WZ') or exit('No direct script access allowed'); ?><?php if(!isset($siteconfigs)) $siteconfigs=get_cache('siteconfigs'); include T("content","head",TPLID); ?>
<script language="javascript">
    function preview(oper)
    {
        if (oper < 10){
            bdhtml=window.document.body.innerHTML;//获取当前页的html代码
            sprnstr="<!--startprint"+oper+"-->";//设置打印开始区域
            eprnstr="<!--endprint"+oper+"-->";//设置打印结束区域
            prnhtml=bdhtml.substring(bdhtml.indexOf(sprnstr)+18); //从开始代码向后取html
            prnhtml=prnhtml.substring(0,prnhtml.indexOf(eprnstr));//从结束代码向前取html
            window.document.body.innerHTML=prnhtml;
            window.print();
            window.document.body.innerHTML=bdhtml;
        } else {
            window.print();
        }
    }
</script>
    <!--百度分享 -->
<link type="text/css" rel="stylesheet" href="<?php echo R;?>t3/css/baidu-fenxiang-style.css">
<div style="background: #f3f3f3">
    <div class="container">
        <ol class="breadcrumb" style="margin-bottom: 0px; font-size: 12px;">
            您现在的位置：
            <li><a href="<?php echo WEBURL;?>">首页</a></li>
            <li class="active"><a href="<?php echo WEBURL;?>index.php?m=affiche&f=index&v=listing">公告</a></li>
        </ol>
    </div>
</div>

<div class="container">
    <div class="col-xs-8">
        <div class="news-content" style="margin-top: 20px; border: none; padding-left: 0;">
            <h2 class="text-center"><?php echo $title;?> </h2>
            <div class="text-center color_999">时间：<?php echo date('Y-m-d H:i',$addtime);?> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;【<a href="javascript:;"  onclick="preview(1)">打印</a>】</div>
            <hr>
            <!--startprint1-->
            <div  class="content-p">
                <?php echo $content;?>
            </div>
            <!--endprint1-->
            <br>
            <br>
            <br>



            <!-------------------------- 分享 --------------------------------->
            <style type="text/css">
                .bdsharebuttonbox a { width: 55px!important; height: 55px!important; margin: 0 auto 10px!important; float: none!important; padding: 0!important; display: block; }
                .bdsharebuttonbox a img { width: 55px; height: 55px; }
                .bdsharebuttonbox .bds_tsina { background: url(<?php echo R;?>t3/images/gbRes_6.png) no-repeat center center/55px 55px; }
                .bdsharebuttonbox .bds_qzone { background: url(<?php echo R;?>t3/images/gbRes_4.png) no-repeat center center/55px 55px; }
                .bdsharebuttonbox .bds_tqq { background: url(<?php echo R;?>t3/images/gbRes_5.png) no-repeat center center/55px 55px; }
                .bdsharebuttonbox .bds_weixin { background: url(<?php echo R;?>t3/images/gbRes_2.png) no-repeat center center/55px 55px; }
                .bdsharebuttonbox .bds_sqq { background: url(<?php echo R;?>t3/images/gbRes_3.png) no-repeat center center/55px 55px; }
                .bdsharebuttonbox .bds_renren { background: url(<?php echo R;?>t3/images/gbRes_1.png) no-repeat center center/55px 55px; }
                .bd_weixin_popup .bd_weixin_popup_foot { position: relative; top: -12px; }
            </style>
            <div class="gb_resLay">
                <div class="gb_res_t"><span>分享到</span><i></i></div>
                <div class="bdsharebuttonbox">
                    <ul class="gb_resItms">
                        <li> <a title="分享到微信" href="#" class="bds_weixin" data-cmd="weixin" data-url="http://www.internetke.com/material/img/2013/1026/26.html"></a>微信好友 </li>
                        <li> <a title="分享到QQ好友" href="#" class="bds_sqq" data-cmd="sqq" data-url="http://www.internetke.com/material/img/2013/1026/26.html"></a>QQ好友 </li>
                        <li> <a title="分享到QQ空间" href="#" class="bds_qzone" data-cmd="qzone" data-url="http://www.internetke.com/material/img/2013/1026/26.html"></a>QQ空间 </li>
                        <li> <a title="分享到腾讯微博" href="#" class="bds_tqq" data-cmd="tqq" data-url="http://www.internetke.com/material/img/2013/1026/26.html"></a>腾讯微博 </li>
                        <li> <a title="分享到新浪微博" href="#" class="bds_tsina" data-cmd="tsina" data-url="http://www.internetke.com/material/img/2013/1026/26.html"></a>新浪微博 </li>
                        <li> <a title="分享到人人网" href="#" class="bds_renren" data-cmd="renren" data-url="http://www.internetke.com/material/img/2013/1026/26.html"></a>人人网 </li>
                    </ul>
                </div>
            </div>
            <script type="text/javascript">
                //全局变量，动态的文章ID
                var ShareURL = "";
                //绑定所有分享按钮所在A标签的鼠标移入事件，从而获取动态ID
                $(function () {
                    $(".bdsharebuttonbox  a").mouseover(function () {
                        ShareURL = $(this).attr("data-url");
                    });
                });

                /*
                 * 动态设置百度分享URL的函数,具体参数
                 * cmd为分享目标id,此id指的是插件中分析按钮的ID
                 *，我们自己的文章ID要通过全局变量获取
                 * config为当前设置，返回值为更新后的设置。
                 */
                function SetShareUrl(cmd, config) {
                    if (ShareURL) {
                        config.bdUrl = ShareURL;
                    }
                    return config;
                }

                // 插件的配置部分，注意要记得设置onBeforeClick事件，主要用于获取动态的文章ID
                window._bd_share_config = {
                    "common": {
                        onBeforeClick: SetShareUrl, "bdSnsKey": {}, "bdText": ""
                        , "bdMini": "2", "bdMiniList": false, "bdPic": "http://www.internetke.com/uploads/allimg/131026/1-1310261J0270-L.jpg", "bdStyle": "0", "bdSize": "24"
                    }, "share": {}
                };
                // 插件的JS加载部分
                with (document) 0[(getElementsByTagName('head')[0] || body)
                        .appendChild(createElement('script'))
                        .src = 'http://bdimg.share.baidu.com/static/api/js/share.js?v=89860593.js?cdnversion='
                        + ~(-new Date() / 36e5)];
            </script>

            <!-------------------------------/ 分享----------------------------------->


            <hr>

            <div class="before-and-next">
                <div class="row">
                    <div class="col-xs-6 manhangyichu"><?php if($previous_page['id']) { ?><a href="/index.php?m=affiche&f=index&v=show&&id=<?php echo $previous_page['id'];?>">上一篇：<?php echo strcut($previous_page['title'],35);?></a><?php } ?></div>
                    <div class="col-xs-6 text-right manhangyichu"><?php if($next_page['id']) { ?><a href="/index.php?m=affiche&f=index&v=show&&id=<?php echo $next_page['id'];?>">下一篇：<?php echo strcut($next_page['title'],35);?></a><?php } ?></div>
                </div>
            </div>

        </div>





    </div>


    <div class="col-xs-4">

        <div class="right-bg-box xielinebg  notice-right-screen" >
            <div class="lm-title margin_bottom10">
                <h3 class="lm-title-left font_size16">最近公告 </h3>
            </div>
            <div class="list-group ">
                <?php if(defined('IN_ADMIN') && !defined('HTML')) {
	echo "<div class=\"visual_div\" pc_action=\"affiche\" data=\"\"><a href=\"javascript:void(0)\" class=\"visual_edit\">修改</a>";
}
if(!class_exists('affiche_template_parse')) {
	$affiche_template_parse = load_class("affiche_template_parse", "affiche");
}
if (method_exists($affiche_template_parse, 'listing')) {
	$rs = $affiche_template_parse->listing(array('order'=>'addtime desc','start'=>'0','pagesize'=>'8','page'=>$page,));
	$pages = $affiche_template_parse->pages;$number = $affiche_template_parse->number;}?>
                <?php $n=1;if(is_array($rs)) foreach($rs AS $r) { ?>

                <a href="<?php echo $r[url];?>" class="list-group-item manhangyichu"><?php echo safe_htm($r['title']);?></a>
                <?php $n++;}?>
                <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
            </div>
            <br>
        </div>

    </div>

</div>
<?php if(!isset($siteconfigs)) $siteconfigs=get_cache('siteconfigs'); include T("content","foot",TPLID); ?>