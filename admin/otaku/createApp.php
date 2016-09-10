<?php
require '../include/init.inc.php';
$app_name = $app_type = $app_author = $app_version = $app_icon = $app_description = $app_screenshots_json = $owner_id = $app_url = '';

extract($_POST, EXTR_IF_EXISTS);

if (Common::isPost()) {
    if ($app_name == '' || $app_type == '' || $app_version == '') {
        OSAdmin::alert("error", ErrorMessage::NEED_PARAM);
    } else {
        $timeNow    = date("Y-m-d h:i:s");
        $input_data = array(
            'app_name'        => $app_name,
            'app_type'        => $app_type,
            'app_version'     => $app_version,
            'app_author'      => $app_author,
            'app_icon'        => $app_icon,
            'app_description' => $app_description,
            'app_screenshots' => $app_screenshots_json,
            'owner_id'        => $owner_id,
            'app_createdTime' => $timeNow,
            'app_updatedTime' => $timeNow,
        );

        if ($app_type == 'app') {
            //保存文件到本地
            if ($_FILES["file"]["type"] != "application/x-zip-compressed") {
                Common::exitWithError("文件类型出现错误", "otaku/createApp.php");
            }

            if ($_FILES["file"]["error"] > 0) {
                Common::exitWithError("文件传输过程中出现错误:" . $_FILES["file"]["error"], "otaku/createApp.php");
            }

            $file_extend = pathinfo($_FILES["file"]["name"])["extension"]; //文件扩展名
            $guid        = Common::guid();
            if (is_uploaded_file($_FILES['file']['tmp_name']) && move_uploaded_file($_FILES['file']['tmp_name'], Common::getSystemDir() . '/upload/' . $guid . "." . $file_extend)) {
                $file_path              = '/upload/' . $guid . "." . $file_extend;
                $input_data['app_file'] = $file_path;
                $input_data['app_size'] = $_FILES["file"]["size"];
            } else {
                Common::exitWithError("文件处理过程中出现错误", "otaku/createApp.php");
            }
        } else if ($app_type == 'html') {
            if (empty($app_url)) {
                Common::exitWithError(ErrorMessage::NEED_PARAM, "otaku/createApp.php");
            }

            $user_id = UserSession::getUserId();

            $project_file_path = Common::getSystemDir() . "/temp/" . $user_id . "/" . $app_name . "/otaku.project.json";
            if (!is_dir(dirname($project_file_path))) {
                //目录不存在
                //创建目录
                if (!mkdir(dirname($project_file_path), 0777, true)) {
                    Common::exitWithError("无法创建临时文件夹:" . $_FILES["file"]["error"], "otaku/createApp.php");
                }
            }
            $project_file = fopen($project_file_path, "w");
            $data         = array(
                'name'        => $app_name,
                'version'     => $app_version,
                'type'        => $app_type,
                'content'     => $app_url
            );
            fwrite($project_file, json_encode($data));
            fclose($project_file);

            $archive = new PHPZip();
            $guid    = Common::guid();
            $zipdir  = Common::getSystemDir() . "/temp/" . $user_id;
            $zipfile = Common::getSystemDir() . "/upload/" . $guid . ".zip";
            $archive->Zip($zipdir, $zipfile);

            $input_data['app_file'] = "/upload/" . $guid . ".zip";
            $input_data['app_size'] = filesize($zipfile);
        }

        $app_id = App::createApp($input_data);

        if ($app_id) {
            SysLog::addLog(UserSession::getUserName(), 'ADD', 'App', $user_id, json_encode($input_data));
            Common::exitWithSuccess('应用创建成功', 'otaku/createApp.php');
        } else {
            OSAdmin::alert("error");
        }
    }
}

$userInfo = UserSession::getSessionInfo();

Template::assign("_POST", $_POST);
Template::assign('userInfo', $userInfo);
Template::display('otaku/createApp.tpl');
