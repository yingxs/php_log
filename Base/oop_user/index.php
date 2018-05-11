<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Insert title here</title>
<link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>
<?php
function __autoload($_className){
	require $_className.'.class.php';
}

//实例化主类
if(isset($_GET['index'])){
	$_main = new Main($_GET['index']);
}else{
	$_main = new Main();
}

//载入界面
include $_main->_ui();

?>

</body>
</html>