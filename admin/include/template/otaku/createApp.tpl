<{include file ="header.tpl"}>
<{include file ="navibar.tpl"}>
<{include file ="sidebar.tpl"}>
<!-- START 以上内容不需更改，保证该TPL页内的标签匹配即可 -->

<{$osadmin_action_alert}>
<{$osadmin_quick_note}>
    
<div class="well">
    <ul class="nav nav-tabs">
      <li class="active"><a href="#home" data-toggle="tab">请填写应用信息</a></li>
    </ul>	
	
	<div id="myTabContent" class="tab-content">
		<div class="tab-pane active in" id="home">
		<form id="tab" method="post" action="" autocomplete="off" enctype="multipart/form-data">
			<input type="hidden" name="owner_id" value="<{$userInfo.user_id}>">
			<label>应用名称</label>
			<input type="text" name="app_name" value="<{$_POST.app_name}>" class="input-xlarge" autofocus="true" required="true" >
			<label>应用类型</label>
			<!-- <input type="text" name="app_type" value="<{$_POST.app_type}>" class="input-xlarge" required="true" > -->
			<select name="app_type" class="input-xlarge">
				<option value ="app">app</option>
				<option value ="html">html</option>
				<option value="fetch">fetch</option>
			</select>
			<label>应用版本</label>
			<input type="text" name="app_version" value="<{if $_POST.app_version=='' }>1.0.0<{else}><{$_POST.app_version}><{/if}>" class="input-xlarge" required="true" >
			<label>应用作者</label>
			<input type="text" name="app_author" readonly="readonly" value="<{$userInfo.user_name}>" class="input-xlarge" required pattern="\d{11}">
			<label>应用图标</label>
			<input type="text" name="app_icon" value="<{$_POST.app_icon}>"  class="input-xlarge" required="true" >
			<label>应用说明</label>
			<textarea name="app_description" rows="5" class="input-xlarge"><{$_POST.app_description}></textarea>
			<label>应用快照</label>
			<textarea name="app_screenshots_json" rows="3" class="input-xlarge"><{$_POST.app_screenshots_json}></textarea>
			<label>应用压缩包</label>
			<input type="file" class="form-control" name="file" id="file"/>
			<span id="helpBlock" class="help-block">请上传一个zip文件包。根目录是项目名命名的文件夹(重要!)</span>
			<div class="btn-toolbar">
				<button type="submit" class="btn btn-primary"><strong>提交</strong></button>
				<div class="btn-group"></div>
			</div>
		</form>
		</div>
	</div>
</div>
<!-- END 以下内容不需更改，请保证该TPL页内的标签匹配即可 -->
<{include file="footer.tpl" }>