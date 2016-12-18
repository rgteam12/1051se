
<?php
require 'config.php';
?>
<html>
<head>
<link rel="stylesheet"  href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
<link rel="javascript" href="jquery-1.11.3.min.js">
<script src="js/jquery.js" type="text/javascript">
//var fbhtml_url=window.location.toString();
</script>



<?PHP

//把玩家資料用SESSION 記起來，升級功能
$sql = "SELECT * FROM user ";
$result = mysqli_query($conn,$sql);
	while($row=mysqli_fetch_array($result)) {
	$_SESSION['id'] = $row['id'];
	$_SESSION['sugar']=$row['sugar'];
	$_SESSION['flour']=$row['flour'];
	$_SESSION['milk']=$row['milk'];
	$_SESSION['money']=$row['money'];
    $_SESSION['oven']=$row['oven'];

}

$sql = "SELECT * FROM oven ";
$result=mysqli_query($conn,$sql);
while($rb=mysqli_fetch_array($result)){
	if($rb['ovenid']==1){
	$_SESSION['ovenid']=$rb['ovenid'];
	$_SESSION['fname']=$rb['fname'];
	$_SESSION['finishtime']=$rb['finishtime'];
	}
}

?>


<style type="text/css">
#container{
	margin:20px auto;
	padding: 6px;
	width:90%;
	height:85%;
	border-radius:40px;
	background-image: url("icon/kitchen_background11.jpg");
	
	background-size:cover;
}
#top{
	width:100%;
	height:15%;
	margin:0 auto;
}
#account{
	width:70%;
	height:100%;
	float:left;
	position:relative;
	top:20%;
	left:3%;
	margin:0 auto;
/*	transform: rotate(1deg); 
	transform: skewZ(20deg);
*/

	
}
#buttonone{
	width:10%;
	height:10%;
	float:right;
	margin:0 auto;
	
}
#buttontwo{
	width:10%;
	height:10%;
	float:right;
	margin:0 auto;
}
#middle{
	width:100%;
	height:70%;
	
}
#mleftright{
	width:15%;
	height:100%;
	float:left;
	position:relative;
	top:5%;
}
#mmiddle{
	width:70%;
	height:70%;
	position:relative;
	top:10%;
	float:left;
	overflow-y:hidden;
	overflow-x:auto;
	white-space:nowrap;
	border-bottom:5px;
	border-top:0px;
	border-style:solid;
	background-color:#f2f2f2;
	opacity:0.95;
	padding:0px;

}

#bottom{
	width:30%;
	height:10%;
   float:left;
	position:relative;
	top:5%;

	
}
#mmmiddle{
	background-image: url("icon/background1.jpg");
}

#middlediv,#mmmiddle{
	position:absolute;
	border:10px solid;
	border-radius:20px;
	bottom:15%;
	left:20%;
	width:60%;
	height:60%;
	background-image: url("icon/background1.jpg");
}
#div000{
	position:relative;
	left:5%;
	width:85%;
	float:left;
	overflow-y:hidden;
	overflow-x:auto;
	white-space:nowrap;
}
#div001{
	position:relative;
	top:10%;
	left:5%;
	width:85%;
	float:left;
	height:85%;
	overflow-x:hidden;
	overflow-y:auto;
	white-space:nowrap;
}
#div002{
	position:absolute;
	width:90%;
	height:60%;
	border-top:5px; 
	border-left:10%; 
	border-right:15px; 
	border-bottom:15px; 
	top:30%;
	left:5%;
	border-style:solid;
	border-radius:20px;
		background-color: #e6b900;
}
#actable td{
	width:50px;
	
	
}
#actable{
	background-color:white;
	padding:0;
	background-image: url("icon/background1.jpg");
	border-radius:30px;
	color:white;
	
}
</style>
<script  type="text/javascript">
function recheck(){
　setTimeout('ShowTime()',10000);
}

//function 名稱不能取close
function loadmsg(postID) {
	DIV='div002';
$.ajax({
		url: 'ingredient.php',
		dataType: 'html',
		type: 'POST',
		data: { id: postID},
		error: function(xhr) {
			$('#'+DIV).html(xhr);
			},
		success: function(response) {
			$('#'+DIV).html(response);
			}
	});
}

function loadfood(){
	//$('#mmmiddle').show();
	$("#mmmiddle").fadeIn("slow");
	$("#div000").fadeIn("slow");
	$('#middlediv').hide();
	DIV='div000';
$.ajax({
	url: 'clickstat.php',
	datatype:'html',
	type:'POST',
	error:function(xhr){
		$('#'+DIV).html(xhr);
	},
	success: function(response) {
		$('#'+DIV).html(response); 
	}
	});
}
function closestat(obj,a){
	//document.getElementById(a).style.display = "none";
	 $("#"+a).fadeOut("slow");
	}

function shop(){
	//$('#middlediv').show();
	$("#middlediv").fadeIn("slow");
		$('#mmmiddle').hide();
	$('#div001').load('shop.php');
	
	
}
function bom(){
	$("#middlediv").fadeIn("slow");
	$('#mmmiddle').hide();
	$('#div001').load('bom.php');
	
}
function showoven(){
	DIV='mmiddle';
$.ajax({
	url: 'showoven.php',
	datatype:'html',
	datatype:'html',
	type:'POST',
	error:function(xhr){
		$('#'+DIV).html(xhr);
	},
	success: function(response) {
		$('#'+DIV).html(response); 
	}
	});
}
</script>

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>team8</title>
	</head>
	
	<body>

		<hr />
		<table style="width:30%;height:10%; margin:0 auto; text-align: center;" border="1">
		<tr>
			<td>Milk</td> 
            <td>Sugar</td> 
            <td>Flour</td> 
			<td>Oven</td>
            <td>Money</td>
		</tr>
		<tr>
            <?php
			echo "<td>{$_SESSION['milk']}</td>";
            echo "<td>{$_SESSION['sugar']}</td>";
            echo "<td>{$_SESSION['flour']}</td>";
            echo "<td>{$_SESSION['oven']}</td>";
            echo "<td>{$_SESSION['money']}</td>";
            ?>
            
        </tr>
        </table>
        <div id="buttonone">
               <a href="bom.php">材料表</a> </br>  
               
               <a href="bom.php" 
			<input type="submit" id="bom" value="材料表" onclick="bom()">
			<img src="icon/bom.jpg" style="height:100%">
			</a>
            
            
				
			</div>
			<div id="buttontwo">
            <a href="shop.php">商店</a> </br> 
            
            <a href="shop.php" 
			<input type="submit" id="shop" value="商店" onclick="shop()">
			<img src="icon/shop.jpg" style="height:100%">
			</a>
				
		</div>
        
	</body>	
    
    
	
	<script>
		var fbhtml_url=window.location.toString();
	</script>
    
	<div id="middle">
		<div id="mleftright">
			<div ><span id="time"> </span></div>
		</div>
        
        
        
        
        
    <div id="bottom">
            <a href="clickstat.php" 
			<input type="submit" id="bread" value="材料表" onclick="loadfood()">
			<img src="icon/bread.jpg" style="height:100%">
		<input type="button" value="-開始烤麵包-" onclick="loadfood()"  style="font-size:36px; border-radius:180px 180px 20px 20px;">
        </a>
	</div>
        
        
        
        
        
        
	    <div id="mmiddle">
			<script>showoven();</script>
		</div>
        
        
        
				<div id="mmmiddle" style="display:none">
				<input type="button" onclick="closestat(this,'mmmiddle')" value="X" class="btn btn-danger" style="position:relative; left:10%;">
				<div id="div000" style="display:"></div>
				<div id="div002" ></div>
			</div>
	</div>

	
	<div id="middlediv" style="display:none" >
	<input type="button"  onclick="closestat(this,'middlediv')" value="X" class="btn btn-danger" style="position:relative; left:7%">
	<div id="div000" style="display:"></div>
	<div id="div001" style="margin:0 auto;"></div>
	</div>

</div>
	
</body>
</html>