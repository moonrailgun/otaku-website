<?php /* Smarty version Smarty-3.1.15, created on 2016-09-07 10:42:57
         compiled from "F:\XMAPP\htdocs\otaku\account\include\template\footer.tpl" */ ?>
<?php /*%%SmartyHeaderCode:3264357cf7eb1d5d637-05327883%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b1a7105a9593e866537ef738501b473447caabff' => 
    array (
      0 => 'F:\\XMAPP\\htdocs\\otaku\\account\\include\\template\\footer.tpl',
      1 => 1473215134,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3264357cf7eb1d5d637-05327883',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_57cf7eb1d60ae4_70553829',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57cf7eb1d60ae4_70553829')) {function content_57cf7eb1d60ae4_70553829($_smarty_tpl) {?>					<footer>
                        <hr>
                        <p class="pull-right"><a href="https://github.com/moonrailgun/otaku-for-cordova" target="_blank">Otaku!</a> copyright by <a href="http://www.moonrailgun.com" target="_blank">@moonrailgun</a>. </p>
                        <p>&copy; 2016 base with <a href="https://github.com/goglezon/OSAdmin" target="_blank">OSAdmin</a></p>
                    </footer>
				</div>
			</div>
		</div>
    <script src="<?php echo @constant('ADMIN_URL');?>
/assets/lib/bootstrap/js/bootstrap.js"></script>

<!-- 捷径的提示 -->

		<script type="text/javascript">	
			alertDismiss("alert-success", 3);
			alertDismiss("alert-info", 10);

			listenShortCut("icon-plus");
			listenShortCut("icon-minus");

			doSidebar();
		</script>
	</body>
</html>
<?php }} ?>
