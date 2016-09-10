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
    $info = App::getAppInfoById($app_id);
    if ($info["owner_id"] != UserSession::getUserId() && !Common::isAdmin()) {
        Common::exitWithError('不是你的应用,无法修改', Common::getActionUrl());
    }

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

        //存储文件
        if (!empty($_FILES['file']['tmp_name'])) {
            if ($_FILES["file"]["type"] != "application/x-zip-compressed") {
                //OSAdmin::alert("error", ErrorMessage::ERROR_FILE_TYPE);
                Common::exitWithError("文件类型错误", "otaku/app_profile.php?app_id=" . $app_id);
            } else {
                if ($_FILES["file"]["error"] > 0) {
                    //OSAdmin::alert("error", ErrorMessage::ERROR);
                    Common::exitWithError("处理文件时发生错误,错误码:" . $_FILES["file"]["error"], "otaku/app_profile.php?app_id=" . $app_id);
                } else {
                    $file_extend = pathinfo($_FILES["file"]["name"])["extension"]; //文件扩展名
                    $guid        = Common::guid();
                    if (is_uploaded_file($_FILES['file']['tmp_name']) && move_uploaded_file($_FILES['file']['tmp_name'], __DIR__ . '/../upload/' . $guid . "." . $file_extend)) {

                        $file_path               = '/upload/' . $guid . "." . $file_extend;
                        $update_data['app_file'] = $file_path;
                        $update_data['app_size'] = $_FILES["file"]["size"];

                        //删除旧文件
                        $old_file_path = $info['app_file'];
                        App::delFile($old_file_path);
                    }
                }
            }
        }

        $res = App::updateApp($app_id, $update_data);
        if ($res > 0) {
            SysLog::addLog(UserSession::getUserName(), 'MODIFY', 'App', $app_id, json_encode($update_data));
            Common::exitWithSuccess('更新完成', "otaku/app_profile.php?app_id=" . $app_id);
        } else {
            OSAdmin::alert("error");
        }
    }
}

Template::assign('info', $app_info);
Template::display('otaku/app_profile.tpl');
