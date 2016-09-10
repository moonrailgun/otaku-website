<?php
require '../include/init.inc.php';
$app_name = $app_type = $app_author = $app_version = $app_icon = $app_description = $app_screenshots_json = $owner_id = '';

extract($_POST, EXTR_IF_EXISTS);

if (Common::isPost()) {
    if ($app_name == '' || $app_type == '' || $app_version == '') {
        OSAdmin::alert("error", ErrorMessage::NEED_PARAM);
    } else {
        //保存文件到本地
        if ($_FILES["file"]["type"] == "application/x-zip-compressed") {
            if ($_FILES["file"]["error"] > 0) {
                OSAdmin::alert("error", ErrorMessage::ERROR);
            } else {
                $file_extend = pathinfo($_FILES["file"]["name"])["extension"]; //文件扩展名
                $guid        = Common::guid();
                if (is_uploaded_file($_FILES['file']['tmp_name']) && move_uploaded_file($_FILES['file']['tmp_name'], __DIR__ . '/../upload/' . $guid . "." . $file_extend)) {
                    $file_path  = '/upload/' . $guid . "." . $file_extend;
                    $timeNow    = date("Y-m-d h:i:s");
                    $input_data = array(
                        'app_name'        => $app_name,
                        'app_type'        => $app_type,
                        'app_version'     => $app_version,
                        'app_author'      => $app_author,
                        'app_icon'        => $app_icon,
                        'app_description' => $app_description,
                        'app_screenshots' => $app_screenshots_json,
                        'app_file'        => $file_path,
                        'app_size'        => $_FILES["file"]["size"],
                        'owner_id'        => $owner_id,
                        'app_createdTime' => $timeNow,
                        'app_updatedTime' => $timeNow,
                    );
                    $app_id = App::createApp($input_data);

                    if ($app_id) {
                        SysLog::addLog(UserSession::getUserName(), 'ADD', 'App', $user_id, json_encode($input_data));
                        Common::exitWithSuccess('应用创建成功', 'otaku/createApp.php');
                    } else {
                        OSAdmin::alert("error");
                    }
                }
            }
        } else {
            //类型错误
            var_dump($_FILES["file"]);
            OSAdmin::alert("error", ErrorMessage::ERROR_FILE_TYPE);
        }
    }
}

$userInfo = UserSession::getSessionInfo();

Template::assign("_POST", $_POST);
Template::assign('userInfo', $userInfo);
Template::display('otaku/createApp.tpl');
