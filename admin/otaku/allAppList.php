<?php

require '../include/init.inc.php';
$method = $app_id = $page_no = '';
extract($_GET, EXTR_IF_EXISTS);

if ($method == 'del' && !empty($app_id)) {
    $info = App::getAppInfoById($app_id);
    if ($info["owner_id"] == UserSession::getUserId() || Common::isAdmin()) {
        //是应用所有者或管理员
        $result = App::delApp($app_id);
        if ($result >= 0) {
            SysLog::addLog(UserSession::getUserName(), 'DELETE', 'App', $app_id, "删除APP[" . $app_id . "]成功");
            Common::exitWithSuccess('已删除', 'panel/users.php');
        } else {
            OSAdmin::alert("error");
        }
    } else {
        Common::exitWithError('不是你的应用,无法删除', Common::getActionUrl());
    }
}

if(Common::isAdmin()) {
    //管理员能看见所有的应用
    $allAppList   = App::getAllAppList();
}else{
    $allAppList   = App::getOwnerAppList();
}

$isShowModify = Common::isAdmin();
$confirm_html = OSAdmin::renderJsConfirm("icon-remove");

Template::assign('isShowModify', $isShowModify);
Template::assign('allAppList', $allAppList);
Template::assign('osadmin_action_confirm', $confirm_html);
Template::display('otaku/allAppList.tpl');
