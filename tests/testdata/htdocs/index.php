<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Broccoli TEST</title>
		<link rel="stylesheet" href="./index_files/css.css" />
		<link rel="stylesheet" href="./../../../dist/broccoli-field-table.css" />
	</head>
	<body>
		<div class="instanceTreeView"></div>
		<div class="canvas" data-broccoli-preview="http://127.0.0.1:8088/tests/testdata/htdocs/editpage/index.html"></div>
		<div class="palette"></div>
		<div class="instancePathView"></div>
		<div class="test-funcs">
			<ul class="px2-horizontal-list">
				<li><a href="javascript:window.main.reloadBroccoli();">Reload</a></li>
				<li><a href="javascript:window.main.broccoli.historyBack(function(){alert('history Back done.');});">history Back</a></li>
				<li><a href="javascript:window.main.broccoli.historyGo(function(){alert('history Go done.');});">history Go</a></li>
				<li><a href="javascript:window.main.broccoli.copy(function(res){console.log(res);alert('copy done.');});">copy</a></li>
				<li><a href="javascript:window.main.broccoli.cut(function(res){console.log(res);alert('cut done.');});">cut</a></li>
				<li><a href="javascript:window.main.broccoli.paste(function(res){console.log(res);alert('paste done.');});">paste</a></li>
				<li><a href="javascript:window.main.broccoli.remove(function(res){console.log(res);alert('remove done.');});">remove</a></li>
				<li><a href="javascript:alert(window.main.broccoli.getSelectedInstance());">getSelectedInstance</a></li>
			</ul>
		</div>

		<!-- jQuery -->
		<script src="./index_files/jquery-3.5.1.min.js" type="text/javascript"></script>

		<!-- broccoli -->
		<script src="./../../../vendor/broccoli-html-editor/broccoli-html-editor/client/dist/broccoli.js"></script>

		<!-- broccoli-field-table -->
		<script src="./../../../dist/broccoli-field-table.js"></script>

		<!-- main.js -->
		<script src="./index_files/main.js" type="text/javascript"></script>
		<script type="text/javascript">
			$(window).on('load', function(){
				main.init({
					'serverType': 'php'
				},function(){
					console.log('TestPage: Initialize Broccoli: done');
				});
			});
		</script>
	</body>
</html>
