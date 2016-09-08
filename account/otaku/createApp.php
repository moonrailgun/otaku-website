<?php
require '../include/init.inc.php';
$app_name = $app_type = $app_author = $app_version = $app_icon = $app_description = $app_screenshots_json = '';

extract($_POST, EXTR_IF_EXISTS);

if (Common::isPost()) {

}

$userInfo = UserSession::getSessionInfo();

Template::assign("_POST", $_POST);
Template::assign('userInfo', $userInfo);
Template::display('otaku/createApp.tpl');
