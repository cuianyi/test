<?php
/*获取客服发送信息处并理返回*/
require('./connect.php');
$data = htmlspecialchars($_POST['content']);
if(!empty($data)){
	$sql = "insert into chat_log(rec,sender,content) values('user','admin','" . $data . "')";
	error_log($sql);
	mysql_query($sql);
	echo $data; 
	exit;
}