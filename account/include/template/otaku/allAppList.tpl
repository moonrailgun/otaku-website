<{include file ="header.tpl"}>
<{include file ="navibar.tpl"}>
<{include file ="sidebar.tpl"}>
<{* TPLSTART 以上内容不需更改，保证该 TPL 页内的标签匹配即可 *}>
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
				</tr>
			<{/foreach}>
		  </tbody>
		</table>
	</div>
</div>
<{* TPLEND 以下内容不需更改，请保证该 TPL 页内的标签匹配即可 *}>
<{include file="footer.tpl" }>
