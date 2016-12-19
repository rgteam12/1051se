<?php
require 'config.php';
?>
<html>
<head>
<link rel="stylesheet"  href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
<link rel="javascript" href="jquery-1.11.3.min.js">
<script src="js/jquery.js" type="text/javascript">
</script>

<?PHP
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
	
	$_SESSION['ovenid']=$rb['ovenid'];
	$_SESSION['fname']=$rb['fname'];
	$_SESSION['finishtime']=$rb['finishtime'];
	
}
?>

<style type="text/css">
#buttonone{
	width:10%;
	height:10%;
	float:right;
	position:relative;
    top:-10%;
    left:-10%;
}
#buttontwo{
	width:10%;
	height:10%;
	float:right;
	position:relative;
    top:-10%;
    left:-10%;
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
#botton{
	width:30%;
	height:10%;
    float:left;
	position:relative;
	top:-10%;
    left:-10%;
}
</style>
<script  type="text/javascript">

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
	
	<body  background="icon/1.jpg" style="background-size:cover">

		<hr />
		<table style="width:30%;height:10%; margin:0 auto; text-align: center;" border="1">
		<tr>
			<td><img src="icon/milk1.png" style="height:50px">Milk</td> 
            <td><img src="icon/sugar.png" style="height:50px">Sugar</td> 
            <td><img src="icon/flour.png" style="height:50px">Flour</td> 
			<td><img src="icon/oven.png" style="height:50px">Oven</td>
            <td><img src="icon/money.png" style="height:50px">Money</td>
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
			<img src="icon/bom.png" style="height:100%">
			</a>
            </div>
            
                      
			<div id="buttontwo">
            <a href="shop.php">商店</a> </br> 
            <a href="shop.php" 
			<input type="submit" id="shop" value="商店" onclick="shop()">
			<img src="icon/shop.png" style="height:100%">
			</a>
		</div> 
	</body>	
    
    
	<div id="middle">
		<div id="mleftright">
			<div ><span id="time"> </span></div>
		</div>
          
        
    <div id="botton">
        <a href="clickstat.php" 
	    <input type="submit" id="bread" value="材料表" onclick="loadfood()">
	    <img src="icon/bread.png" style="height:100%">
		<input type="button" value="-肚子餓了嗎-" onclick="loadfood()"  style="font-size:30px; border-radius:180px 180px 20px 20px; background-color:#00DD00;">
        </a>
	</div>
         
         
	    <div id="mmiddle">
            
			<script>showoven();</script>
            <img src="icon/buttonoven.png" style="height:100%">
		</div>

    </div>
</body>
</html>