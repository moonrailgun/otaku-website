<?php

require ('../include/init.inc.php');
$method = $user_id = $page_no = '';
extract ( $_GET, EXTR_IF_EXISTS );

$allAppList = App::getAllAppList();

Template::assign('admin_url', ADMIN_URL);
Template::assign('allAppList', $allAppList);
Template::display('otaku/allAppList.tpl');

?>