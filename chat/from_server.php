<?php
//获取客服发送的最新消息传递给用户
require('./connect.php');
set_time_limit(0);

while (true) {
	$sql = "select * from chat_log where rec='user' and is_new = 1 order by log_id desc limit 1";
	$result = mysql_query($sql);
	if($row = mysql_fetch_assoc($result)){
		$sql = "update chat_log set is_new = 0 where log_id=". $row['log_id'];
		mysql_query($sql);
		die(json_encode($row));
	}
}