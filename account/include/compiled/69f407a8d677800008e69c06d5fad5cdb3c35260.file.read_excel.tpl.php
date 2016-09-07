<?php /* Smarty version Smarty-3.1.15, created on 2016-09-06 09:19:59
         compiled from "F:\XMAPP\htdocs\OSAdmin\uploads\include\template\sample\read_excel.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2136557ce19bf279ca1-37930664%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '69f407a8d677800008e69c06d5fad5cdb3c35260' => 
    array (
      0 => 'F:\\XMAPP\\htdocs\\OSAdmin\\uploads\\include\\template\\sample\\read_excel.tpl',
      1 => 1473124367,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2136557ce19bf279ca1-37930664',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'output' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_57ce19bf28aa07_30604472',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57ce19bf28aa07_30604472')) {function content_57ce19bf28aa07_30604472($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ("navibar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ("sidebar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<!-- TPLSTART 以上内容不需更改，保证该TPL页内的标签匹配即可 -->
<div class="block">
	<a href="#page-stats" class="block-heading" data-toggle="collapse">读取Excel.xls</a>
	<div id="page-stats" class="block-body collapse in">
	
	<form id="tab" method="post" action="" autocomplete="off" ENCTYPE="multipart/form-data">
				<hr />
				<label>只限于xls文件</label>
				<input type="file" name="excel"  id="DropDownTimezone"  class="input-xlarge">
				 
				<div class="btn-toolbar">
				<button type="submit" class="btn btn-primary"><strong>提交</strong></button>
				<div class="btn-group"></div>
				</div>
		</form>
		<pre>
		读取Excel.xls文件输出结果
		<?php echo $_smarty_tpl->tpl_vars['output']->value;?>

		</pre>
	</div>
</div>
<!-- TPLEND 以下内容不需更改，请保证该TPL页内的标签匹配即可 -->
<?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
