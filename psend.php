<?php
require 'fetion.php';


$fetion = new PHPFetion($_POST["user"], $_POST["key"]);	// �ֻ��š���������
$result =$fetion->send($_POST["number"], $_POST["text"]);	// �������ֻ��š���������

if(strpos($result, '���ŷ��ͳɹ�!') || strpos($result, '������Ϣ�ɹ�!')) {
    echo 'Success';
}

?>