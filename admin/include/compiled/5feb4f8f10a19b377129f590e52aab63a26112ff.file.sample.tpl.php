<?php /* Smarty version Smarty-3.1.15, created on 2016-09-07 10:42:57
         compiled from "F:\XMAPP\htdocs\otaku\account\include\template\sample\sample.tpl" */ ?>
<?php /*%%SmartyHeaderCode:304757cf7eb1b74773-60576638%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5feb4f8f10a19b377129f590e52aab63a26112ff' => 
    array (
      0 => 'F:\\XMAPP\\htdocs\\otaku\\account\\include\\template\\sample\\sample.tpl',
      1 => 1473124367,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '304757cf7eb1b74773-60576638',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'samples' => 0,
    'sample' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_57cf7eb1b8b2d6_24525175',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57cf7eb1b8b2d6_24525175')) {function content_57cf7eb1b8b2d6_24525175($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ("navibar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ("sidebar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


<div class="block">
	<a href="#page-stats" class="block-heading" data-toggle="collapse">图表</a>
	<div id="page-stats" class="block-body collapse in">
	<table class="table table-striped">
			<thead>
			<tr>
				<th>#</th>
				<th>所有者</th>
			</tr>
			</thead>
			<tbody>
			<?php  $_smarty_tpl->tpl_vars['sample'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['sample']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['samples']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['sample']->key => $_smarty_tpl->tpl_vars['sample']->value) {
$_smarty_tpl->tpl_vars['sample']->_loop = true;
?>
				<tr>
				<td><?php echo $_smarty_tpl->tpl_vars['sample']->value['sample_id'];?>
</td>
				<td><?php echo $_smarty_tpl->tpl_vars['sample']->value['sample_content'];?>
</td>
				</tr>
			<?php } ?>
		  </tbody>
		</table>
	</div>
</div>

<?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php }} ?>
