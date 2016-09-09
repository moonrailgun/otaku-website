<?php /* Smarty version Smarty-3.1.15, created on 2016-09-08 10:31:06
         compiled from "F:\XMAPP\htdocs\otaku\account\include\template\panel\quicknote_modify.tpl" */ ?>
<?php /*%%SmartyHeaderCode:3073057d0cd6a960310-88964713%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'bd106a4641a471232f212289184a9f84edc4e493' => 
    array (
      0 => 'F:\\XMAPP\\htdocs\\otaku\\account\\include\\template\\panel\\quicknote_modify.tpl',
      1 => 1473124367,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3073057d0cd6a960310-88964713',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'osadmin_action_alert' => 0,
    'osadmin_quick_note' => 0,
    'quicknote' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_57d0cd6a97fe47_72287197',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57d0cd6a97fe47_72287197')) {function content_57d0cd6a97fe47_72287197($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ("navibar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ("sidebar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<!-- START 以上内容不需更改，保证该TPL页内的标签匹配即可 -->
<?php echo $_smarty_tpl->tpl_vars['osadmin_action_alert']->value;?>

<?php echo $_smarty_tpl->tpl_vars['osadmin_quick_note']->value;?>

    
<div class="well">
    <ul class="nav nav-tabs">
      <li class="active"><a href="#home" data-toggle="tab">请填写quick note</a></li>
    </ul>	
	
	<div id="myTabContent" class="tab-content">
		  <div class="tab-pane active in" id="home">

           <form id="tab" method="post" action="">
				<label><span class="label label-info">不支持HTML代码</span></label>
				<textarea name="note_content" rows="3" class="input-xlarge" required="true"><?php echo $_smarty_tpl->tpl_vars['quicknote']->value['note_content'];?>
</textarea>
				
				<div class="btn-toolbar">
					<button type="submit" class="btn btn-primary"><strong>提交</strong></button>
				</div>
			</form>
        </div>
    </div>
</div>
	
<!-- END 以下内容不需更改，请保证该TPL页内的标签匹配即可 -->
<?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
