<?php /* Smarty version Smarty-3.1.15, created on 2016-09-08 15:28:16
         compiled from "F:\XMAPP\htdocs\otaku\account\include\template\otaku\createApp.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2153357d0d1e7299af0-61784458%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '16dffdfd5746bcbde94ae41e2d1141c5787da792' => 
    array (
      0 => 'F:\\XMAPP\\htdocs\\otaku\\account\\include\\template\\otaku\\createApp.tpl',
      1 => 1473319694,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2153357d0d1e7299af0-61784458',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_57d0d1e72bfea2_93253908',
  'variables' => 
  array (
    'osadmin_action_alert' => 0,
    'osadmin_quick_note' => 0,
    'userInfo' => 0,
    '_POST' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57d0d1e72bfea2_93253908')) {function content_57d0d1e72bfea2_93253908($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ("navibar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ("sidebar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<!-- START 以上内容不需更改，保证该TPL页内的标签匹配即可 -->

<?php echo $_smarty_tpl->tpl_vars['osadmin_action_alert']->value;?>

<?php echo $_smarty_tpl->tpl_vars['osadmin_quick_note']->value;?>

    
<div class="well">
    <ul class="nav nav-tabs">
      <li class="active"><a href="#home" data-toggle="tab">请填写应用信息</a></li>
    </ul>	
	
	<div id="myTabContent" class="tab-content">
		<div class="tab-pane active in" id="home">
		<form id="tab" method="post" action="" autocomplete="off" enctype="multipart/form-data">
			<input type="hidden" name="owner_id" value="<?php echo $_smarty_tpl->tpl_vars['userInfo']->value['user_id'];?>
">
			<label>应用名称</label>
			<input type="text" name="app_name" value="<?php echo $_smarty_tpl->tpl_vars['_POST']->value['app_name'];?>
" class="input-xlarge" autofocus="true" required="true" >
			<label>应用类型</label>
			<input type="text" name="app_type" value="<?php echo $_smarty_tpl->tpl_vars['_POST']->value['app_type'];?>
" class="input-xlarge" required="true" >
			<label>应用版本</label>
			<input type="text" name="app_version" value="<?php if ($_smarty_tpl->tpl_vars['_POST']->value['app_version']=='') {?>1.0.0<?php } else { ?><?php echo $_smarty_tpl->tpl_vars['_POST']->value['app_version'];?>
<?php }?>" class="input-xlarge" required="true" >
			<label>应用作者</label>
			<input type="text" name="app_author" readonly="readonly" value="<?php echo $_smarty_tpl->tpl_vars['userInfo']->value['user_name'];?>
" class="input-xlarge" required pattern="\d{11}">
			<label>应用图标</label>
			<input type="text" name="app_icon" value="<?php echo $_smarty_tpl->tpl_vars['_POST']->value['app_icon'];?>
"  class="input-xlarge" required="true" >
			<label>应用说明</label>
			<textarea name="app_description" rows="5" class="input-xlarge"><?php echo $_smarty_tpl->tpl_vars['_POST']->value['app_description'];?>
</textarea>
			<label>应用快照</label>
			<textarea name="app_screenshots_json" rows="3" class="input-xlarge"><?php echo $_smarty_tpl->tpl_vars['_POST']->value['app_screenshots_json'];?>
</textarea>
			<label>应用压缩包</label>
			<input type="file" class="form-control" name="file" id="file"/>
			<span id="helpBlock" class="help-block">请上传一个zip文件包。根目录是项目名命名的文件夹(重要!)</span>
			<div class="btn-toolbar">
				<button type="submit" class="btn btn-primary"><strong>提交</strong></button>
				<div class="btn-group"></div>
			</div>
		</form>
		</div>
	</div>
</div>
<!-- END 以下内容不需更改，请保证该TPL页内的标签匹配即可 -->
<?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
