<?php
if (!defined('ACCESS')) {exit('Access denied.');}

class App extends OtakuBase
{
    private static $table_name = 'app';
    // 查询字段
    //private static $columns = array('app_id', 'app_name', 'app_type', 'app_version', 'app_author', 'app_description', 'app_screenshots', 'app_file');
    private static $columns = 'app_id,app_name,app_type,app_version,app_author,app_icon,app_description,app_screenshots,app_file,app_size,owner_id,app_createdTime,app_updatedTime';

    public static function getTableName()
    {
        return parent::$table_prefix . self::$table_name;
    }

    public static function getAllAppList()
    {
        $db  = self::__instance();
        $sql = "select " . self::$columns . " from " . self::getTableName();

        $list = $db->query($sql)->fetchAll();
        if ($list) {
            return $list;
        }
        return array();
    }

    public static function getOwnerAppList()
    {
        $db  = self::__instance();
        $sql = "select " . self::$columns . " from " . self::getTableName() . " where owner_id=" . UserSession::getUserId();

        $list = $db->query($sql)->fetchAll();
        if ($list) {
            return $list;
        }
        return array();
    }

    public static function getAppInfoById($app_id)
    {
        if (!$app_id || !is_numeric($app_id)) {
            return false;
        }
        $db        = self::__instance();
        $condition = array("AND" => array("app_id[=]" => $app_id));
        $list      = $db->select(self::getTableName(), self::$columns, $condition);

        if ($list) {
            return $list[0];
        }
        return array();
    }

    public static function createApp($app_info)
    {
        if (!$app_info || !is_array($app_info)) {
            return false;
        }
        $db = self::__instance();
        $id = $db->insert(self::getTableName(), $app_info);
        return $id;
    }

    public static function updateApp($app_id, $app_info)
    {
        if (!$app_info || !is_array($app_info)) {
            return false;
        }
        $db        = self::__instance();
        $condition = array("app_id" => $app_id);

        $id = $db->update(self::getTableName(), $app_info, $condition);
        return $id;
    }

    public static function delFile($file_path)
    {
        $fileRealPath = Common::getSystemDir() . $file_path;

        if (is_file($fileRealPath)) {
            if (unlink($fileRealPath)) {
                //删除成功
                return true;
            } else {
                if (chmod($fileRealPath, 0777)) {
                    unlink($fileRealPath);
                    return true;
                } else {
                    return false;
                };
            }
        }
    }

    public static function delApp($app_id)
    {
        if (!$app_id || !is_numeric($app_id)) {
            return false;
        }
        $info = self::getAppInfoById($app_id);
        if (!$info) {
            return false;
        }

        //delete file
        self::delFile($info["app_file"]);

        //delete data
        $db        = self::__instance();
        $condition = array("app_id" => $app_id);
        $result    = $db->delete(self::getTableName(), $condition);
        return $result;
    }
}
