<?php
	$year=$_GET["year"];
	$input_id=$_GET["ids"];
	$sql="SELECT * FROM `race_data` WHERE year=$year and wheel=$input_id";
	$con = mysqli_connect("localhost","root","");  		
	mysqli_select_db($con,"python");  		
	mysqli_query($con,"set names 'utf8'");  
	$result = mysqli_query($con,$sql);
	echo "<table  id=\"table_wheel\">
			<tr >
				<th scope=\"col\">比赛时间</th>	 		 	
				<th scope=\"col\">比赛轮次</th>
				<th scope=\"col\">主队名称</th>
				<th scope=\"col\">比分</th>
				<th scope=\"col\">客队名称</th>
			</tr>";
	$count=1;
	foreach($result as $n){
		 if($count%2!=0){
			 echo"<tr class=\"td_one\">
					<td >{$n['time']}</td>
					<td>{$n['wheel']}</td>
					<td>{$n['home_team']}</td>
					<td>{$n['score']}</td>
					<td>{$n['guest_team']}</td>
				</tr>
			";	
		 }
		 else{
			 echo"<tr class=\"td_two\">
					<td >{$n['time']}</td>
					<td>{$n['wheel']}</td>
					<td>{$n['home_team']}</td>
					<td>{$n['score']}</td>
					<td>{$n['guest_team']}</td>
				</tr>
			";	 
		}
		$count=$count+1;
	}
	echo "</table>";
?>