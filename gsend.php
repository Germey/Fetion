<?php
require 'fetion.php';


$fetion = new PHPFetion($_GET["user"], $_GET["key"]);	// �ֻ��š���������
$result =$fetion->send($_GET["number"], $_GET["text"]);	// �������ֻ��š���������

if(strpos($result, '���ŷ��ͳɹ�!') || strpos($result, '������Ϣ�ɹ�!')) {
    echo 'Success';
}

?>