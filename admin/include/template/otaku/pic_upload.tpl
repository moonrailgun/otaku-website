<{include file ="header.tpl"}>
<{include file ="navibar.tpl"}>
<{include file ="sidebar.tpl"}>
<!-- START 以上内容不需更改，保证该TPL页内的标签匹配即可 -->

<{$osadmin_action_alert}>
<{$osadmin_quick_note}>
<link rel="stylesheet" href="../assets/lib/webuploader-0.1.5/webuploader.css">
<link rel="stylesheet" href="../assets/css/pic_upload.css">
<script type="text/javascript" src="../assets/lib/webuploader-0.1.5/webuploader.min.js"></script>
<script type="text/javascript" src="../assets/js/pic_upload.js"></script>
<div class="well">
	<ul class="nav nav-tabs">
	  <li class="active"><a href="#home" data-toggle="tab">上传图片</a></li>
	</ul>

	<!--dom结构部分-->
	<div class="page-container">
		<p>您可以尝试文件拖拽，使用QQ截屏工具，然后激活窗口后粘贴，或者点击添加图片按钮</p>

		<div id="uploader" class="wu-example">
		    <div class="queueList">
		        <div id="dndArea" class="placeholder">
		            <div id="filePicker"></div>
		            <p>或将照片拖到这里，单次最多可选300张</p>
		        </div>
		    </div>
		    <div class="statusBar" style="display:none;">
		        <div class="progress">
		            <span class="text">0%</span>
		            <span class="percentage"></span>
		        </div><div class="info"></div>
		        <div class="btns">
		            <div id="filePicker2"></div><div class="uploadBtn">开始上传</div>
		        </div>
		    </div>
		</div>
	</div>
</div>

<!-- END 以下内容不需更改，请保证该TPL页内的标签匹配即可 -->
<{include file="footer.tpl" }>