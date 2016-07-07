<?php defined('IN_WZ') or exit('No direct script access allowed'); ?><?php $is_iframe = isset($is_iframe) ? $is_iframe : 0;?>
<ul class="nav" id="side-menu">
    <li style="padding-top: 10px;"></li>
    <li>
        <a class="<?php if($is_iframe) { ?>J_menuItem<?php } ?>" href="index.php?m=member&f=index&v=main"><i class="fa fa-home" style="font-size:18px;margin-top:8px;"></i> <span class="nav-label">我的主页</span></a>
    </li>
    <li onclick="open_navbar();" class="active">
        <a href="#"><i class="fa fa-edit"></i> <span class="nav-label">我的信息夹</span><span class="fa arrow"></span></a>
        <ul class="nav nav-second-level">
            <li><a class="<?php if($is_iframe) { ?>J_menuItem<?php } ?>" href="?m=order&f=order_goods&v=listing">我的订单</a></li>
            <li><a class="<?php if($is_iframe) { ?>J_menuItem<?php } ?>" href="?m=order&f=index&v=point_listing">积分兑换</a></li>

            <li><a class="<?php if($is_iframe) { ?>J_menuItem<?php } ?>" href="?m=affiche&f=affiche&v=sys">系统公告</a></li>

            <li><a class="<?php if($is_iframe) { ?>J_menuItem<?php } ?>" href="?m=message&f=message&v=listing">私　信</a></li>
            <li><a class="<?php if($is_iframe) { ?>J_menuItem<?php } ?>" href="?f=postinfo&v=contribute_list">投稿</a></li>
            <li><a class="<?php if($is_iframe) { ?>J_menuItem<?php } ?>" href="?m=guestbook&f=myissue&v=listing">我的提问</a></li>
            <!--
            <li><a class="<?php if($is_iframe) { ?>J_menuItem<?php } ?>" href="?m=dianping&v=index&v=mydianping">我的点评</a></li>
            <li><a class="<?php if($is_iframe) { ?>J_menuItem<?php } ?>" href="?m=member&f=favorite&v=mec">我收藏的企业</a></li>
            <li><a class="<?php if($is_iframe) { ?>J_menuItem<?php } ?>" href="?m=member&f=favorite&v=tuan">我收藏的团购</a></li>
            -->
            <li><a class="<?php if($is_iframe) { ?>J_menuItem<?php } ?>" href="?m=order&f=address&v=listing">收货地址管理</a></li>
            <!--<li><a class="<?php if($is_iframe) { ?>J_menuItem<?php } ?>" href="?m=receipt&f=receipt&v=listing">发票申请</a></li>-->
        </ul>
    </li>
    <li onclick="open_navbar();" class="active">
        <a href="#"><i class="fa fa-user"></i> <span class="nav-label">帐号管理</span><span class="fa arrow"></span></a>
        <ul class="nav nav-second-level">
            <li><a class="<?php if($is_iframe) { ?>J_menuItem<?php } ?>" href="?m=member&f=index&v=profile">帐号设置</a></li>
            <li><a class="<?php if($is_iframe) { ?>J_menuItem<?php } ?>" href="?m=member&f=index&v=account_safe">账户安全</a></li>
            <li><a class="<?php if($is_iframe) { ?>J_menuItem<?php } ?>" href="?m=pay&f=payment&v=listing">账户余额</a></li>
            <li><a class="<?php if($is_iframe) { ?>J_menuItem<?php } ?>" href="?m=credit&f=mycredit&v=listing">账户积分</a></li>
            <li><a class="<?php if($is_iframe) { ?>J_menuItem<?php } ?>" href="?m=member&f=index&v=edit_password">修改密码</a></li>
        </ul>
    </li>

    <?php if($admin_rs) { ?>
    <li onclick="open_navbar();" class="">
        <a href="#"><i class="fa fa-cogs"></i> <span class="nav-label">管理中心</span><span class="fa arrow"></span></a>
        <ul class="nav nav-second-level">
            <li><a class="<?php if($is_iframe) { ?>J_menuItem<?php } ?>" href="<?php echo adminurl('?m=member&f=index&v=add&_menuid=30&_submenuid=74');?>">添加会员</a>
            </li>
            <li><a class="<?php if($is_iframe) { ?>J_menuItem<?php } ?>" href="<?php echo adminurl('?m=member&f=index&v=listing&_menuid=30');?>">管理会员</a>
            </li>
        </ul>
    </li>
    <?php } ?>
</ul>