<?php defined('IN_WZ') or exit('No direct script access allowed'); ?><?php if(!isset($siteconfigs)) $siteconfigs=get_cache('siteconfigs'); include T("content","head",TPLID); ?>
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
        <div class="notice-list margin_top30">
            <h4>网站公告</h4>
            <div class="list-group">
                <!--status="status=2"-->
                <?php if(defined('IN_ADMIN') && !defined('HTML')) {
	echo "<div class=\"visual_div\" pc_action=\"affiche\" data=\"\"><a href=\"javascript:void(0)\" class=\"visual_edit\">修改</a>";
}
if(!class_exists('affiche_template_parse')) {
	$affiche_template_parse = load_class("affiche_template_parse", "affiche");
}
if (method_exists($affiche_template_parse, 'listing')) {
	$rs = $affiche_template_parse->listing(array('order'=>'addtime desc','start'=>'0','pagesize'=>'10','page'=>$page,));
	$pages = $affiche_template_parse->pages;$number = $affiche_template_parse->number;}?>
                <?php $n=1;if(is_array($rs)) foreach($rs AS $r) { ?>

                <a href="<?php echo $r[url];?>" class="list-group-item manhangyichu"><span class="badge"><?php echo date('Y-m-d',$r[addtime]);?></span> <?php echo safe_htm($r['title']);?></a>
                <?php $n++;}?>
                <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>

            </div>
        </div>

        <!-- start-五指分页-->

        <div class="page-ination" style="text-align:center;">
            <div class="page-in">
                <ul class="pagination">
                    <?php echo $pages;?>
                </ul>
            </div>
        </div>
        <!--end  五指分页 -->

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
	$rs = $affiche_template_parse->listing(array('order'=>'addtime desc ','start'=>'0','pagesize'=>'8','page'=>$page,));
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