<html>
<head><title>resevation</title></head>
	<body>
<?php
	$name = $_POST["name"];
	$stdid = $_POST["stdid"];
	$seat1 = $_POST["seat1"];
	$seat2 = $_POST["seat2"];
	$seat3 = $_POST["seat3"];
	$seat4 = $_POST["seat4"];
	$seat5 = $_POST["seat5"];
	$seat6 = $_POST["seat6"];
	$seat7 = $_POST["seat7"];
	$seat8 = $_POST["seat8"];
	$seat9 = $_POST["seat9"];
	$seat10 = $_POST["seat10"];
	
	$start_time = $_POST["start_time"];
	$end_time = $_POST["end_time"];
	
	echo "이름 : $name<br>";
	echo "학번 : $stdid<br>";
	echo "선택된 자리 : $seat1 $seat2 $seat3 $seat4 $seat5 $seat6 $seat7 $seat8 $seat9 $seat10<br>";  
	$time= $end_time - $start_time;
	if($time >0.0)
		echo "총 $time 시간";
	else
		echo "try agin";
?>
	</body>
</html>
