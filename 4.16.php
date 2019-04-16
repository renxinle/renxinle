<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
</head>
<body>
    <a href="javascript:websocket()">运行 Websocket</a>
</body>
<script type="text/javascript">
	function websocket(){
	    if("WebSocket" in window){
	    	alert("谢谢使用Websocket");
	    }	
	    var ws =new WebSocket("ws://loaclhost:81/echo");
	    ws.onopen =function(){
	    	ws.send('发送数据');
	    	alert("数据发送中");
	    }
	    ws.onmessage =function(evt){
	    	var received_msg=evt.data;
	    	alert("数据已经接收");
	    }
	    ws.onclose =function(){
	    	alert("数据已经关闭");
	    }
	    else{
	    	alert("您的浏览器不支持Websocket");
	    }
	}
</script>
</html>