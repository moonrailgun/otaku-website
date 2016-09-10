<?php

require '../include/init.inc.php';
$method = $app_id = $page_no = '';
extract($_GET, EXTR_IF_EXISTS);

if ($method == 'del' && !empty($app_id)) {
    $result = App::delApp($app_id);
    if ($result >= 0) {
        SysLog::addLog ( UserSession::getUserName(), 'DELETE',  'App' ,$app_id ,"删除APP[".$app_id."]成功");
        Common::exitWithSuccess ( '已删除','panel/users.php' );
    } else {
        OSAdmin::alert("error");
    }
}

$allAppList   = App::getAllAppList();
$isShowModify = UserSession::getUserGroup() == 1;
$confirm_html = OSAdmin::renderJsConfirm("icon-remove");

Template::assign('isShowModify', $isShowModify);
Template::assign('admin_url', ADMIN_URL);
Template::assign('allAppList', $allAppList);
Template::assign('osadmin_action_confirm', $confirm_html);
Template::display('otaku/allAppList.tpl');
