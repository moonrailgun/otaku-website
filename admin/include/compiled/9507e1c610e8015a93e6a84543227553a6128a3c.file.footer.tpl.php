<?php /* Smarty version Smarty-3.1.15, created on 2016-09-09 16:26:48
         compiled from "F:\XMAPP\htdocs\otaku\admin\include\template\footer.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2553357d272482337b1-92823075%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9507e1c610e8015a93e6a84543227553a6128a3c' => 
    array (
      0 => 'F:\\XMAPP\\htdocs\\otaku\\admin\\include\\template\\footer.tpl',
      1 => 1473215134,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2553357d272482337b1-92823075',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_57d272482377c3_47968601',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57d272482377c3_47968601')) {function content_57d272482377c3_47968601($_smarty_tpl) {?>					<footer>
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
