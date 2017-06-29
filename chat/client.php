<!DOCTYPE html>
<html>
<head>
	<title>我是用户</title>
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
			$.post('ajax_client.php',{'content':content},function(res){
				if(res != ""){
					$("textarea:eq(0)").append("你发送的内容：" +res + "\r\n");
					$("textarea:eq(1)").val("");
				}
			})
		})
		//ajax轮询的方式获取客服是否有和用户发送信息
		var setting = {
			'url' : 'from_server.php',
			'dataType' : 'json',
			'success' : function(res){
				var res = eval(res);
				if(res.content != ''){
					$("textarea:eq(0)").append("接收客服发送的内容：" +res.content + "\r\n");
					$.ajax(setting);
				}
			}
		};
		$.ajax(setting);
	})
	</script>
</head>
<body>
	<h4>我是用户</h4>
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