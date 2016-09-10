<?php
require '../include/init.inc.php';

$app_id = $app_name = $app_type = $app_author = $app_version = $app_icon = $app_description = $app_screenshots_json = '';
extract($_REQUEST, EXTR_IF_EXISTS);

Common::checkParam($app_id);

$app_info = App::getAppInfoById($app_id);
if (empty($app_info)) {
    Common::exitWithError(ErrorMessage::USER_NOT_EXIST, "panel/index.php");
}

if (Common::isPost()) {
    //提交修改
    if ($app_id == '' || $app_name == '' || $app_type == '' || $app_version == '') {
        OSAdmin::alert("error", ErrorMessage::NEED_PARAM);
    } else {
        $timeNow     = date("Y-m-d h:i:s");
        $update_data = array(
            'app_name'        => $app_name,
            'app_type'        => $app_type,
            'app_version'     => $app_version,
            'app_icon'        => $app_icon,
            'app_description' => $app_description,
            'app_screenshots' => $app_screenshots_json,
            'app_updatedTime' => $timeNow,
        );
        
        $res = App::updateApp($app_id, $update_data);
        if ($res > 0) {
            SysLog::addLog(UserSession::getUserName(), 'MODIFY', 'App', $app_id, json_encode($update_data));
            Common::exitWithSuccess('更新完成', 'panel/index.php');
        } else {
            OSAdmin::alert("error");
        }
    }
    //TODO 文件包更新
}

Template::assign('info', $app_info);
Template::display('otaku/app_profile.tpl');
