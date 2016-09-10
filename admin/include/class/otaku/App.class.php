<?php
if (!defined('ACCESS')) {exit('Access denied.');}

class App extends OtakuBase
{
    private static $table_name = 'app';
    // 查询字段
    //private static $columns = array('app_id', 'app_name', 'app_type', 'app_version', 'app_author', 'app_description', 'app_screenshots', 'app_file');
    private static $columns = 'app_id,app_name,app_type,app_version,app_author,app_description,app_screenshots,app_file,app_size,app_createdTime,app_updatedTime';

    public static function getTableName()
    {
        return parent::$table_prefix . self::$table_name;
    }

    public static function getAllAppList()
    {
        $db   = self::__instance();
        $sql  = "select ".self::$columns." from " . self::getTableName();
        
        $list = $db->query($sql)->fetchAll();
        if ($list) {
            return $list;
        }
        return array();
    }

    public static function createApp($app_info){
        if (! $app_info || ! is_array ( $app_info )) {
            return false;
        }
        $db=self::__instance();
        $id = $db->insert ( self::getTableName(), $app_info );
        return $id;
    }
}