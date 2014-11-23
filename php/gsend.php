
<?php
require 'fetion.php';


$fetion = new PHPFetion($_GET["user"], $_GET["key"]);	// 手机号、飞信密码
$result =$fetion->send($_GET["number"], $_GET["text"]);	// 接收人手机号、飞信内容
?>

<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
	</head>
	<body>
<?php

if(strpos($result,'请输入密码')){
	//登录失败
	echo "D";
}else if(strpos($result,'NoMessage')){
	//发送的消息为空
	echo "K";
}else if(strpos($result,'限制在500字')){
	//发送内容超长
	echo "L";
}else if(strpos($result, '短信发送成功!')) {
    //给自己发送成功
	echo "M";
}else if(strpos($result,'发送消息成功')){
	//给别人发送成功
	echo "O";
}else {
	//不是好友，发送失败
	echo "H";
}

?>
	</body>
</html>