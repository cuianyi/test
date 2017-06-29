<?php
/*获取用户发送信息处并理返回*/
require('./connect.php');
$data = htmlspecialchars($_POST['content']);
if(!empty($data)){
	$sql = "insert into chat_log(rec,sender,content) values('admin','user','" . $data . "')";
	error_log($sql);
	mysql_query($sql);
	echo $data; 
	exit;
}
