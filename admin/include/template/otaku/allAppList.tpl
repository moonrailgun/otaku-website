<{include file ="header.tpl"}>
<{include file ="navibar.tpl"}>
<{include file ="sidebar.tpl"}>
<{* TPLSTART 以上内容不需更改，保证该 TPL 页内的标签匹配即可 *}>

<{$osadmin_action_alert}>
<{$osadmin_quick_note}>

<div class="block">
	<a href="#page-stats" class="block-heading" data-toggle="collapse">应用列表</a>
	<div id="page-stats" class="block-body collapse in">
	<table class="table table-striped">
			<thead>
			<tr>
				<th>#</th>
				<th>应用名</th>
				<th>类型</th>
				<th>版本号</th>
				<th>作者</th>
				<th>描述</th>
				<th>文件</th>
				<th>更新时间</th>
				<{if $isShowModify == true}>
				<th>操作</th>
				<{/if}>
			</tr>
			</thead>
			<tbody>
			<{foreach name=allAppList from=$allAppList item=app}>
				<tr>
				<td><{$app.app_id}></td>
				<td><{$app.app_name}></td>
				<td><{$app.app_type}></td>
				<td><{$app.app_version}></td>
				<td><{$app.app_author}></td>
				<td><{$app.app_description}></td>
				<td><a class="btn btn-small" href="<{$admin_url}>/<{$app.app_file}>">下载</a></td>
				<td><{$app.app_updatedTime}></td>
				<{if $isShowModify == true}>
				<td>
				<a href="app_profile.php?app_id=<{$app.app_id}>" title= "修改" ><i class="icon-pencil"></i></a>
				<a data-toggle="modal" href="#myModal" title= "删除" ><i class="icon-remove" href="allAppList.php?page_no=<{$page_no}>&method=del&app_id=<{$app.app_id}>" ></i></a>
				</td>
				<{/if}>
				</tr>
			<{/foreach}>
		  </tbody>
		</table>
	</div>
</div>

<!-- 操作的确认层，相当于javascript:confirm函数 -->
<{$osadmin_action_confirm}>

<!-- END 以下内容不需更改，请保证该TPL页内的标签匹配即可 -->
<{include file="footer.tpl" }>
