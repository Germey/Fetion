<?php
require 'fetion.php';


$fetion = new PHPFetion($_POST["user"], $_POST["key"]);	// 手机号、飞信密码
$result =$fetion->send($_POST["number"], $_POST["text"]);	// 接收人手机号、飞信内容

if(strpos($result, '短信发送成功!') || strpos($result, '发送消息成功!')) {
    echo 'Success';
}

?>