<?php

?>
<!DOCTYPE html>
<html>
<head>
	<title>我是客服</title>
	<meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0,user-scalable=no">
	<script src="js/jquery-1.7.2.min.js"></script>
	<script type="text/javascript">
	$(function(){
		$("input[type=button]").click(function(){
			var content = $("textarea:eq(1)").val();
			if(content == ""){
				alert("内容必须输入!");
				return;
			}
			$.post('ajax_server.php',{'content':content},function(res){
				if(res != ""){
					$("textarea:eq(0)").append("你发送的内容：" +res + "\r\n");
					$("textarea:eq(1)").val("");
				}
			})
		})
	})
	function showMsg(msg) {
		$result = eval(msg);
		$("textarea:eq(0)").append("接收用户发送内容：" + $result.content + "\r\n");
	}
	</script>
</head>
<body>
	<h4>我是客服</h4>
	<iframe src="./from_client.php" width="0" height="0" frameborder="0"></iframe>
	<div class="client">
		<textarea rows="15" cols="100"></textarea>
		<br><br>
	</div>
	<div class="message">
		<textarea rows="3" cols="100"></textarea>
	</div>
	<input type='button' value="发送信息"/>

</body>
</html>