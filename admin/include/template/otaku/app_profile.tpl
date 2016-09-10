<{include file ="header.tpl"}>
<{include file ="navibar.tpl"}>
<{include file ="sidebar.tpl"}>

<!-- START 以上内容不需更改，保证该TPL页内的标签匹配即可 -->

<{$osadmin_action_alert}>
<{$osadmin_quick_note}>

<div class="well">
    <ul class="nav nav-tabs">
      <li class="active"><a href="#home" data-toggle="tab">应用信息</a></li>
    </ul>	
	
	<div id="myTabContent" class="tab-content">
		<div class="tab-pane active in" id="home">
		<form id="tab" method="post" action="" autocomplete="off" enctype="multipart/form-data">
			<input type="hidden" name="app_id" value="<{$info.app_id}>">
			<label>应用名称</label>
			<input type="text" name="app_name" value="<{$info.app_name}>" class="input-xlarge" autofocus="true" required="true" >
			<label>应用类型</label>
			<!-- <input type="text" name="app_type" value="<{$_POST.app_type}>" class="input-xlarge" required="true" > -->
			<select name="app_type" class="input-xlarge">
				<option value ="app" <{if $info.app_type == "app"}>selected<{/if}>>app</option>
				<option value ="html" <{if $info.app_type == "html"}>selected<{/if}>>html</option>
				<!-- <option value="fetch" <{if $info.app_type == "fetch"}>selected<{/if}>>fetch</option> -->
			</select>
			<label>应用版本</label>
			<input type="text" name="app_version" value="<{$info.app_version}>" class="input-xlarge" required="true" >
			<label>应用作者</label>
			<input type="text" name="app_author" readonly="readonly" value="<{$info.app_author}>" class="input-xlarge" required>
			<label>应用图标</label>
			<input type="text" name="app_icon" value="<{$info.app_icon}>"  class="input-xlarge" required="true" >
			<label>应用说明</label>
			<textarea name="app_description" rows="5" class="input-xlarge"><{$info.app_description}></textarea>
			<label>应用快照</label>
			<textarea name="app_screenshots_json" rows="3" class="input-xlarge"><{$info.app_screenshots}></textarea>
			<label>更新应用压缩包<span class="label label-important" >如不修改请留空</span></label>
			<input type="file" class="form-control" name="file" id="file"/>
			<span id="helpBlock" class="help-block">请上传一个zip文件包。根目录是项目名命名的文件夹(重要!)</span>
			<div class="btn-toolbar">
				<button type="submit" class="btn btn-primary"><strong>更新</strong></button>
				<div class="btn-group"></div>
			</div>
		</form>
		</div>
	</div>
</div>


<!-- 操作的确认层，相当于javascript:confirm函数 -->
<{$osadmin_action_confirm}>

<!-- END 以下内容不需更改，请保证该TPL页内的标签匹配即可 -->
<{include file="footer.tpl" }>