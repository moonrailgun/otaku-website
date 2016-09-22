<?php
require '../include/init.inc.php';

if (Common::isPost()) {
    $user_id = UserSession::getUserId();

    $file_info     = $_FILES['file'];
    $file_name     = $file_info['name'];
    $file_type     = $file_info['type'];
    $file_tmp_name = $file_info['tmp_name'];
    $file_error    = $file_info['error'];
    $file_size     = $file_info['size'];

    if ($file_error == 0) {
        $timeNow = date("Y-m-d h:i:s");

        $input_data = array(
            'pic_name'        => $file_name,
            'pic_type'        => $file_type,
            'pic_size'        => $file_size,
            'owner_id'        => $user_id,
            'pic_createdTime' => $timeNow,
        );

        $file_extend = pathinfo($_FILES["file"]["name"])["extension"]; //文件扩展名
        $guid        = Common::guid();
        $file_path   = '/upload/picspace/' . $user_id . "/" . $guid . "." . $file_extend;

        if (!is_dir(Common::getSystemDir() . dirname($file_path))) {
            //目录不存在
            //创建目录
            if (!mkdir(Common::getSystemDir() . dirname($file_path), 0777, true)) {
                die("无法创建临时文件夹");
            }
        }
        if (is_uploaded_file($file_tmp_name) && move_uploaded_file($file_tmp_name, Common::getSystemDir() . $file_path)) {
            $input_data['pic_file'] = $file_path;
        } else {
            die('文件传输过程中出现错误');
        }

        //写入数据库
        $pic_id = PicSpace::insertPic($input_data);
        if ($pic_id) {
            exit($pic_id);
        } else {
            exit("失败");
        }
    }
}

Template::display('otaku/pic_upload.tpl');
