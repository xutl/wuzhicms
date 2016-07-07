<?php defined('IN_WZ') or exit('No direct script access allowed'); ?><?php if(!isset($siteconfigs)) $siteconfigs=get_cache('siteconfigs'); include T("member","head"); ?>
<body  class="gray-bg">
<?php if($set_iframe==0) { ?>
<?php if(!isset($siteconfigs)) $siteconfigs=get_cache('siteconfigs'); include T("member","iframetop"); ?>
<?php } else { ?>
<div style="padding-top: 15px;"></div>
<?php } ?>
<div class="container-fluid  ie8-member">
    <div class="row row-40" >
        <?php if($set_iframe==0) { ?>
        <div class="col-sm-3 left-nav">             <!--左侧导航-->
            <nav class="navbar-default navbar-static-side" role="navigation">
                <div class="nav-close"><i class="fa fa-times-circle"></i>
                </div>
                <div class="slimScrollDiv" style="position: relative; width: auto; height: 100%;">
                    <div class="sidebar-collapse" style="width: auto; height: 100%;">
                        <?php if(!isset($siteconfigs)) $siteconfigs=get_cache('siteconfigs'); include T("member","left"); ?>
                    </div>
                </div>
            </nav>
            <!--end 左侧导航-->
        </div><!--col-sm-3--><?php } ?>

        <div class="<?php if($set_iframe==0) { ?>col-sm-9<?php } else { ?>col-sm-12<?php } ?> paddingleft0">
            <div class="row">
                <div class="col-sm-12">
                    <div class="ibox ibox-content float-e-margins">
                        <div class="row">
                            <div class="col-md-2">
                                <div class="thumbnail" style="border: none; text-align: center;">
                                    <img src="<?php echo avatar($this->uid, 180);?>" class="img-circle" style="border: 0px solid #f5f5f5;    box-shadow: 0 0 8px rgba(0,0,0,.15); margin-bottom: 20px; max-height: 120px;">
                                    <a href="index.php?m=member&f=index&v=avatar&set_iframe=<?php echo $set_iframe;?>" type="btn" class="btn btn-default btn-outline"><i class="fa fa-photo"></i> 更换头像</a>
                                </div>
                            </div>
                            <div class="col-md-5 mm--xinxi">
                                <h3 style="font-size: 24px; font-weight: 500; margin-top: 30px;">个人信息</h3>
                                <table class="table table-hover">
                                    <br>
                                    <tbody>
                                    <tr>
                                        <th scope="row">昵&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;称：</th>
                                        <td><?php echo $memberinfo['username'];?></td>
                                        <td><a href="index.php?m=member&f=index&v=set_username&set_iframe=<?php echo $set_iframe;?>" type="btn" class="btn btn-default btn-outline btn-xs" style="margin-bottom: 0px"><i class="fa fa-pencil-square-o"></i> 更改</a></td>
                                    </tr>
                                    <tr>
                                        <th scope="row">真实姓名：</th>
                                        <td><?php echo $memberinfo['truename'];?></td>
                                        <td><a href="index.php?m=member&f=index&v=profile&set_iframe=<?php echo $set_iframe;?>" type="btn" class="btn btn-default btn-outline btn-xs" style="margin-bottom: 0px"><i class="fa fa-pencil-square-o"></i> 更改</a></td>
                                    </tr>
                                    <tr>
                                        <th scope="row">注册邮箱：</th>
                                        <td><?php echo $memberinfo['email'];?></td>
                                        <td><a href="index.php?m=member&f=index&v=edit_email&set_iframe=<?php echo $set_iframe;?>" type="btn" class="btn btn-default btn-outline btn-xs" style="margin-bottom: 0px"><i class="fa fa-pencil-square-o"></i> 更改</a></td>
                                    </tr>
                                    <tr>
                                        <th scope="row">手机号码：
                                        </th>
                                        <td><?php echo $memberinfo['mobile'];?></td>
                                        <td><a href="index.php?m=member&f=index&v=edit_mobile" type="btn" class="btn btn-default btn-outline btn-xs" style="margin-bottom: 0px"><i class="fa fa-pencil-square-o"></i> 更改</a></td>
                                    </tr>
                                    <tr>
                                        <th scope="row">会 员 组：</th>
                                        <td><?php echo $groups[$memberinfo['groupid']]['name'];?></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <th scope="row">注册时间：</th>
                                        <td><?php echo date('Y-m-d',$memberinfo['regtime']);?></td>
                                        <td>注册IP: <?php echo $memberinfo['regip'];?></td>
                                    </tr>
                                    <tr>
                                        <th scope="row">最后登录：</th>
                                        <td><?php echo date('Y-m-d',$memberinfo['lasttime']);?></td>
                                        <td>登录IP: <?php echo $memberinfo['lastip'];?></td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class="col-md-5">
                                <div class="m-member-right">
                                    <h4>第三方授权</h4>
                                    <br>
                                    <div style="background: #f5f5f5; padding: 8px 12px; border-left: 2px solid #55aa55; margin-bottom: 5px" >
                                        <?php if($auth_result['weixin']) { ?>
                                        <div style="display: inline-block;  "><i class="fa fa-weixin" style="font-size: 24px; color: #55aa55; width: 30px;"></i> &nbsp;&nbsp;已授权&nbsp;&nbsp; 账号：<?php echo $auth_result['weixin']['nickname'];?></div>
                                        <div style="display: inline-block; float: right;    margin-top: 2px;"><a href="?m=member&v=remove_auth&type=weixin" type="btn" class="btn btn-danger  btn-xs"> 取消授权</a></div>
                                        <?php } else { ?>
                                        <div style="display: inline-block;  "><i class="fa fa-weixin" style="font-size: 24px; color: #55aa55; width: 30px;"></i> &nbsp;&nbsp;未授权&nbsp;&nbsp; 账号：-</div>
                                        <div style="display: inline-block; float: right;    margin-top: 2px;"><a href="?m=member&v=bind_auth&type=weixin" type="btn" class="btn btn-primary  btn-xs" target="_blank"> 授权</a></div>
                                        <?php } ?>
                                    </div>
                                    <div style="background: #f5f5f5; padding: 8px 12px; border-left: 2px solid #d78a10;margin-bottom: 5px" >
                                        <?php if($auth_result['sina']) { ?>
                                        <div style="display: inline-block;  "><i class="fa fa-weibo" style="font-size: 24px; color: #d78a10; width: 30px;"></i> &nbsp;&nbsp;已授权&nbsp;&nbsp; 账号：<?php echo $auth_result['sina']['nickname'];?></div>
                                        <div style="display: inline-block; float: right;    margin-top: 2px;"><a href="?m=member&v=remove_auth&type=sina" type="btn" class="btn btn-danger  btn-xs"> 取消授权</a></div>
                                        <?php } else { ?>
                                        <div style="display: inline-block;  "><i class="fa fa-weibo" style="font-size: 24px; color: #d78a10; width: 30px;"></i> &nbsp;&nbsp;未授权&nbsp;&nbsp; 账号：-</div>
                                        <div style="display: inline-block; float: right;    margin-top: 2px;"><a href="?m=member&v=bind_auth&type=sina" type="btn" class="btn btn-primary  btn-xs" target="_blank"> 授权</a></div>
                                        <?php } ?>
                                    </div>
                                    <div style="background: #f5f5f5; padding: 8px 12px; border-left: 2px solid #2ea7ca ;margin-bottom: 5px" >
                                        <?php if($auth_result['qq']) { ?>
                                        <div style="display: inline-block; line-height: 24px; "><i class="fa fa-qq" style="font-size: 24px; color: #2ea7ca; width: 30px;"></i> &nbsp;&nbsp;已授权 &nbsp;&nbsp;账号：<?php echo $auth_result['qq']['nickname'];?></div>
                                        <div style="display: inline-block; float: right;    margin-top: 2px;"><a href="?m=member&v=remove_auth&type=qq" type="btn" class="btn btn-danger  btn-xs" > 取消授权</a></div>
                                        <?php } else { ?>
                                        <div style="display: inline-block; line-height: 24px; "><i class="fa fa-qq" style="font-size: 24px; color: #2ea7ca; width: 30px;"></i> &nbsp;&nbsp;未授权 &nbsp;&nbsp;账号：-</div>
                                        <div style="display: inline-block; float: right;    margin-top: 2px;"><a href="?m=member&v=bind_auth&type=qq" type="btn" class="btn btn-primary  btn-xs" target="_blank"> 授权</a></div>
                                        <?php } ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <form id="myform" name="myfrom" class="form-horizontal tasi-form" method="post" action="">
                            <div class="panel-body">
                                <ul id="myTab" class="nav nav-tabs" role="tablist">
                                    <li role="presentation" class="active"><a href="#tabs2" role="tab" id="2tab" data-toggle="tab" aria-controls="tabs2" aria-expanded="false">中文信息</a></li>
                                </ul>
                                </li>
                                </ul>

                                <div id="myTabContent" class="tab-content">

                                    <div role="tabpanel" class="tab-pane fad active ine" id="tabs2" aria-labelledby="2tab">
                                        <table class="table table-striped table-advance table-hover">
                                            <tbody>

                                            <?php
            foreach($modelids as $modelid) {
                echo '<tr><td colspan="2" style="background-color: #F9F3D7;color: #060000;text-align: center;">'.$models[$modelid]['name'].'</td></tr>';
                                            $formdata = 'formdata_'.$modelid;
                                            $data = $$formdata;
                                            foreach ($data[0] as $field => $info) {
                                            if ($info['powerful_field'] || $field=='email_10') continue;
                                            if ($info['formtype'] == 'powerful_field') {
                                            foreach ($formdata['0'] as $_fm => $_fm_value) {
                                            if ($_fm_value['powerful_field']) {
                                            $info['form'] = str_replace('{' . $_fm . '}', $_fm_value['form'], $info['form']);
                                            }
                                            }
                                            foreach ($formdata['1'] as $_fm => $_fm_value) {
                                            if ($_fm_value['powerful_field']) {
                                            $info['form'] = str_replace('{' . $_fm . '}', $_fm_value['form'], $info['form']);
                                            }
                                            }
                                            }
                                            ?>
                                            <tr>
                                                <td class="text-right" width="150"><label class="control-label"><?php if ($info['star']) { ?>
                                                    <font color="red">*</font><?php } ?> <?php echo $info['name'] ?></label></td>
                                                <td>
                                                    <?php
                                            if($info['formtype']=='editor'){
                                            ?>
                                                    <div class="col-sm-12 col-xs-12"><?php echo $info['form'] ?><?php echo $info['remark'] ?></div>
                                                    <?php
                                            } else {?>
                                                    <div class="col-sm-6 col-xs-6"><?php echo $info['form'] ?><?php echo $info['remark'] ?></div>
                                                    <?php
                                            }
                                            ?>
                                                </td>
                                            </tr>
                                            <?php }

            }?>


                                            </tbody>
                                        </table>

                                    </div>

                                </div>



                                <div class="form-group">
                                    <label class="col-sm-2 col-xs-4 control-label"></label>
                                    <div class="col-lg-5 col-sm-5 col-xs-5 input-group">
                                        <input class="btn btn-info col-sm-12 col-xs-12" type="submit" name="submit" value="提交">
                                    </div>
                                </div>

                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
                    </div>
                </div>



<script>
    $(document).ready(function () {
        $('.form-groupinfo').iCheck({
            checkboxClass: 'icheckbox_square-green',
            radioClass: 'iradio_square-green',
        });
    });
</script>
<script type="text/javascript">
    $(function(){
        $(".form-horizontal").Validform({
            tiptype:3,
            callback:function(form){
                $("#submit").click();
            }

        });
    });

</script>
<?php if(!isset($siteconfigs)) $siteconfigs=get_cache('siteconfigs'); include T("member","foot"); ?>