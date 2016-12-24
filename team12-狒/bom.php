<style type="text/css">
body {width:1000px; margin:5px auto;}
#content {background-color:#CCEEFF; margin:10px; padding:5px; border:2px solid blue; font-size: 14pt; color:#030; line-height:28px;position:relative;
    top:20%;}
a {color:purple}
</style>
</head>
<body  background="icon/10.jpg">
<div id="content">
<table width="100%" border="1" >
        </br></br>
        <tr>
        <td width="17%"></td>
        <td width="16%"><img src='icon/milk.png' style="height:50%"></td>
        <td width="16%"><img src='icon/sugar.png' style="height:50%"></td>
        <td width="16%"><img src='icon/flour.png' style="height:80%"></td>
        <td width="16%"><img src='icon/clock.png' style="height:3%"></td>
        <td width="16%"><img src='icon/money.png' style="height:20%"></td>
        
        </tr>
<?php
require 'config.php';
global $conn;
$j=rand(50,90);
$sql="UPDATE food SET price=$j where id = '1'";
mysqli_query($conn,$sql);
$k=rand(70,100);
$sql="UPDATE food SET price=$k where id = '2'";
mysqli_query($conn,$sql);
$l=rand(50,120);
$sql="UPDATE food SET price=$l where id = '3'";
mysqli_query($conn,$sql);


$sqll = "select * from food;";
$results=mysqli_query($conn,$sqll);
    while (	$rs=mysqli_fetch_array($results)) {

    echo"<tr><td>" , $rs['fname'],
        "</td><td>", $rs['milk'],"克",
        "</td><td>", $rs['sugar'],"克",
        "</td><td>", $rs['flour'],"克",
        "</td><td>", $rs['time'],"秒",
        "</td><td>$", $rs['price'];        
    }

?> 
</table>    
<a href="gamepage.php" 
			<input type="submit" id="back">
			<img src="icon/back.png" style="height:8%">
			</a>
