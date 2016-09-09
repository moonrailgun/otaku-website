<?php /* Smarty version Smarty-3.1.15, created on 2016-09-09 16:26:51
         compiled from "F:\XMAPP\htdocs\otaku\admin\include\template\otaku\allAppList.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2303957d2724bc9efd4-15701361%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '110d6b9f87179249da31daa08433dee7d560b7bc' => 
    array (
      0 => 'F:\\XMAPP\\htdocs\\otaku\\admin\\include\\template\\otaku\\allAppList.tpl',
      1 => 1473320138,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2303957d2724bc9efd4-15701361',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'allAppList' => 0,
    'app' => 0,
    'admin_url' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_57d2724bcbc374_37590141',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57d2724bcbc374_37590141')) {function content_57d2724bcbc374_37590141($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ("navibar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ("sidebar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


<div class="block">
	<a href="#page-stats" class="block-heading" data-toggle="collapse">应用列表</a>
	<div id="page-stats" class="block-body collapse in">
	<table class="table table-striped">
			<thead>
			<tr>
				<th>#</th>
				<th>应用名</th>
				<th>类型</th>
				<th>版本号</th>
				<th>作者</th>
				<th>描述</th>
				<th>文件</th>
			</tr>
			</thead>
			<tbody>
			<?php  $_smarty_tpl->tpl_vars['app'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['app']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['allAppList']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['app']->key => $_smarty_tpl->tpl_vars['app']->value) {
$_smarty_tpl->tpl_vars['app']->_loop = true;
?>
				<tr>
				<td><?php echo $_smarty_tpl->tpl_vars['app']->value['app_id'];?>
</td>
				<td><?php echo $_smarty_tpl->tpl_vars['app']->value['app_name'];?>
</td>
				<td><?php echo $_smarty_tpl->tpl_vars['app']->value['app_type'];?>
</td>
				<td><?php echo $_smarty_tpl->tpl_vars['app']->value['app_version'];?>
</td>
				<td><?php echo $_smarty_tpl->tpl_vars['app']->value['app_author'];?>
</td>
				<td><?php echo $_smarty_tpl->tpl_vars['app']->value['app_description'];?>
</td>
				<td><a class="btn btn-small" href="<?php echo $_smarty_tpl->tpl_vars['admin_url']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['app']->value['app_file'];?>
">下载</a></td>
				</tr>
			<?php } ?>
		  </tbody>
		</table>
	</div>
</div>

<?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php }} ?>
