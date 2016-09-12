<?php 
require 'include/init.inc.php';

$allAppList = App::getAllAppList();
$res = [];
for($i = 0;$i < count($allAppList);$i++){
	$appInfo = $allAppList[$i];

	$tmp["id"] = $appInfo["app_id"];
	$tmp["name"] = $appInfo["app_name"];
	$tmp["type"] = $appInfo["app_type"];
	$tmp["version"] = $appInfo["app_version"];
	$tmp["author"] = $appInfo["app_author"];
	$tmp["icon"] = $appInfo["app_icon"];
	$tmp["description"] = $appInfo["app_description"];
	$tmp["screenshots"] = $appInfo["app_screenshots"];
	$tmp["file"] = ADMIN_URL.'/'.$appInfo["app_file"];
	$tmp["size"] = $appInfo["app_size"];
	$tmp["description"] = $appInfo["app_description"];
	$tmp["createdTime"] = $appInfo["app_createdTime"];
	$tmp["updatedTime"] = $appInfo["app_updatedTime"];

	array_push($res, $tmp);
}

echo json_encode($res);

?>