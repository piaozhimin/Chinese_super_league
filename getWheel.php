<?php
	$year=$_GET['year'];
	$sql="SELECT count(DISTINCT `wheel`) count FROM `race_data` WHERE year=$year";
	$con = mysqli_connect("localhost","root","");  		
	mysqli_select_db($con,"python");  		
	mysqli_query($con,"set names 'utf8'");  
	$result = mysqli_query($con,$sql);
	$result_row = mysqli_fetch_array($result);
	$count=$result_row['count'];//获得聊天对象的名称
	echo $count;
?>