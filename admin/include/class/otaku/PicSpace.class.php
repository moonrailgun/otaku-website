<?php
if (!defined('ACCESS')) {exit('Access denied.');}

class PicSpace extends OtakuBase{
	private static $table_name = 'pic';

	private static $columns = 'pic_id,pic_name,pic_type,pic_file,pic_size,owner_id,pic_createdTime';

	public static function getTableName()
    {
        return parent::$table_prefix . self::$table_name;
    }

    public static function insertPic($pic_info){
    	if (!$pic_info || !is_array($pic_info)) {
            return false;
        }
        $db = self::__instance();
        $id = $db->insert(self::getTableName(), $pic_info);
        return $id;
    }
}