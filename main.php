<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<!--[if IE 8 ]> <html class="ie8" lang="en"> <![endif]-->
<!--[if IE 9 ]> <html class="ie9" lang="en"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!-->
<html lang="en"> <!--<![endif]--> 
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<link rel="stylesheet" type="text/css" href="style_main.css" />
<script language="JavaScript" src="jquery-3.3.1.js" charset="UTF-8"></script>
<title>中超联赛</title>
</head>
<script type="text/javascript">
function getMessage(year,input_id){
     $.ajax({
         type: "GET",
         url : "getMessage.php",
         data:{ids:input_id,
	 			year:year},
         success: function(resultData){
			$("#score_table").html(resultData);
         },
         error:function(xhr, status, errMsg){
             alert("Data transmission failed!");
         }
     });

}
function getWheel(year){
	for(var i=16;i<=30;i++){
			$("#table_wheel #t_i_"+i).show();
	}
     $.ajax({
         type: "GET",
         url : "getWheel.php",
         data:{year:year},
         success: function(resultData){
 			 for(var i=30;i>parseInt(resultData);i--){
 				$("#table_wheel #t_i_"+i).hide();
 			 }
         },
         error:function(xhr, status, errMsg){
             alert("Data transmission failed!");
         }
     });

}

</script>

<body onload="getMessage('2018','1');getWheel('2018');">
	<div class="menu_year_team">
		<ul id="ul_year">
			<li><span  id="li_title">
            	
            中超<br/>联赛</span></li>
            <li><a  class="active">2018</a></li>
            <li><a >2017</a></li>
            <li><a >2016</a></li>
			<li><a >2015</a></li>
            <li><a >2014</a></li>
            <li><a >2013</a></li>
            <li><a >2012</a></li>
            <li><a >2011</a></li>
            <li><a >2010</a></li>
            <li><a >2009</a></li>
            <li><a >2008</a></li>
            <li><a >2007</a></li>
            <li><a >2006</a></li>
            <li><a >2005</a></li>
            <li><a >2004</a></li>
            <li><a >2003</a></li>
            
		</ul>
		<ul id="ul_team">
			<li><span  id="li_title">数据<br/>画图</span></li>
		  	<li><a name='0' class="active">上海申鑫</a></li>
			<li><a name='1'>上海绿地申花</a></li>
			<li><a name='10'>深圳佳兆业</a></li>
			<li><a name='11'>辽宁沈阳宏运</a></li>
			<li><a name='12'>重庆斯威</a></li>
			<li><a name='13'>陕西国力</a></li>
			<li><a name='14'>青岛中能</a></li>
			<li><a name='15'>上海联城中邦</a></li>
			<li><a name='16'>武汉光谷</a></li>
			<li><a name='17'>厦门蓝狮</a></li>
			<li><a name='18'>长春亚泰</a></li>
			<li><a name='19'>河南建业</a></li>
			<li><a name='2'>云南红塔</a></li>
			<li><a name='20'>浙江绿城</a></li>
			<li><a name='21'>广州恒大淘宝</a></li>
			<li><a name='22'>成都谢菲联</a></li>
			<li><a name='23'>江苏苏宁易购</a></li>
			<li><a name='24'>大连一方</a></li>
			<li><a name='25'>上海上港</a></li>
			<li><a name='26'>武汉卓尔</a></li>
			<li><a name='27'>浙江毅腾</a></li>
			<li><a name='28'>石家庄永昌</a></li>
			<li><a name='29'>延边富德</a></li>
			<li><a name='3'>北京中赫国安</a></li>
			<li><a name='30'>河北华夏幸福</a></li>
			<li><a name='31'>天津权健</a></li>
			<li><a name='32'>贵州恒丰</a></li>
			<li><a name='4'>北京人和</a></li>
			<li><a name='5'>四川冠城</a></li>
			<li><a name='6'>大连实德</a></li>
			<li><a name='7'>天津泰达</a></li>
			<li><a name='8'>山东鲁能泰山</a></li>
			<li><a name='9'>广州富力</a></li>
		</ul>
	</div>
	<div class="div_content">
		<div id="div_content_score" >
        	<div id="score_wheel">
            	<table  id="table_wheel">
                	<tr>
						<td><input type="button" value=1></td>
						<td><input type="button" value=2></td>
						<td><input type="button" value=3></td>
                        <td><input type="button" value=4></td>
						<td><input type="button" value=5></td>
                        <td><input type="button" value=6></td>
						<td><input type="button" value=7></td>
						<td><input type="button" value=8></td>
                        <td><input type="button" value=9></td>
						<td><input type="button" value=10></td>
                        <td><input type="button" value=11></td>
						<td><input type="button" value=12></td>
						<td><input type="button" value=13></td>
                        <td><input type="button" value=14></td>
						<td><input type="button" value=15></td>
					</tr>
					<tr>
						<td><input type="button" value=16 id="t_i_16"/></td>
						<td><input type="button" value=17 id="t_i_17"/></td>
						<td><input type="button" value=18 id="t_i_18"/></td>
                        <td><input type="button" value=19 id="t_i_19"/></td>
						<td><input type="button" value=20 id="t_i_20"/></td>
                        <td><input type="button" value=21 id="t_i_21"/></td>
						<td><input type="button" value=22 id="t_i_22"/></td>
						<td><input type="button" value=23 id="t_i_23"/></td>
                        <td><input type="button" value=24 id="t_i_24"/></td>
						<td><input type="button" value=25 id="t_i_25"/></td>
                        <td><input type="button" value=26 id="t_i_26"/></td>
						<td><input type="button" value=27 id="t_i_27"/></td>
						<td><input type="button" value=28 id="t_i_28"/></td>
                        <td><input type="button" value=29 id="t_i_29"/></td>
						<td><input type="button" value=30 id="t_i_30"/></td>
					</tr>
                </table>
            </div>
			<div id="score_table">
				
			</div>
		</div>
	</div>
	<div class="div_content_paint">
    	<div class="div_content_paint_img">
            <img src="picture/0_zhexian.png" class="img_zhexian"/>
            <br/><br/><br/><br/><br/><br/>
            <img src="picture/0_pie.png" class="img_pie"/>
        </div>
	</div>
	<div class="menu_footer">
		
        <p>本网站所有数据均来自网络，若有侵权，请私聊QQ：120058446，一定立马删除！</p>
	</div>
</body>
<script>
$(document).ready(function(){
	$('#ul_year a').click(function(){// TODO		
		$("#ul_year li a.active").removeClass("active");
		var text=$(this).text();
		getMessage(text,'1');		
		$(this).addClass("active");
		getWheel(text);
		
	});
	$('#ul_team a').click(function(){// TODO		
		$("#ul_team li a.active").removeClass("active");
		var name_1="picture/"+$(this).attr("name")+"_zhexian.png";
		var name_2="picture/"+$(this).attr("name")+"_pie.png";
		$(".img_zhexian").attr("src",name_1);
		$(".img_pie").attr("src",name_2);
		$(this).addClass("active");
	});
	$('#table_wheel td input').click(function(){// TODO
		$("#ip1").val($(this).attr("value"));
		getMessage($("#ul_year li a.active").text(),$(this).attr("value"));
	});
});
</script>
</html>