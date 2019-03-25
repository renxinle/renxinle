<?php
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
</head>
<body>
    <h3>距离新年还有:</h3> 
    <span id="d"></span>天
    <span id="h"></span>时
    <span id="m"></span>分
    <span id="s"></span>秒

</body>
<script src="http://apps.bdimg.com/libs/jquery/2.1.4/jquery.min.js"></script>
<script type="text/javascript">
	$(function(){
        getInfo();
	})
	function getInfo(){
		var date=new Date();
        dates=date/1000;
        var str="2010/0/0 00:00:00";
		var end=new Date(str);
		ends=date/1000;
        // alert(dates);
        diff=ends-dates;
        if(diff>0){
          var d,h,m,s;
          var d=diff/24/60/60;
          var h=diff/60/60%24;
          var m=diff/60%60;
          var s=diff%60;
          $("#d").text(d);
          $("#h").text(h);
          $("#m").text(m);
          $("#s").text(s);
          setTimeout(getInfo);
        }
       
       
	}
</script>
</html>