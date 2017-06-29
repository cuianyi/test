<?php
//获取用户发送的最新消息传递给客服
require('./connect.php');

ob_start();
str_repeat('', 4096);
ob_end_flush();
ob_flush();

while (true) {
	$sql = "select * from chat_log where rec='admin' and is_new = 1 order by log_id desc limit 1";
	$result = mysql_query($sql);
	if($row = mysql_fetch_assoc($result)){
		$sql = "update chat_log set is_new = 0 where log_id=". $row['log_id'];
		mysql_query($sql);
		echo "<script>parent.showMsg(" .  json_encode($row). ")</script>";
		ob_flush();
		flush();
		sleep(1);
	}
}