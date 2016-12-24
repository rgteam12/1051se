<style type="text/css">
body {width:1050px; margin:10px auto;}
#content {background-color:#CCEEFF; margin:10px; padding:10px; border:2px solid blue; font-size: 14pt; color:#030; line-height:28px}
a {color:purple}
#btn {
	-moz-box-shadow: 3px 4px 0px 0px #8a2a21;
	-webkit-box-shadow: 3px 4px 0px 0px #8a2a21;
	box-shadow: 3px 4px 0px 0px #8a2a21;
	background:-webkit-gradient(linear, left top, left bottom, color-stop(0.05, #c62d1f), color-stop(1, #f24437));
	background:-moz-linear-gradient(top, #c62d1f 5%, #f24437 100%);
	background:-webkit-linear-gradient(top, #c62d1f 5%, #f24437 100%);
	background:-o-linear-gradient(top, #c62d1f 5%, #f24437 100%);
	background:-ms-linear-gradient(top, #c62d1f 5%, #f24437 100%);
	background:linear-gradient(to bottom, #c62d1f 5%, #f24437 100%);
	filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#c62d1f', endColorstr='#f24437',GradientType=0);
	background-color:#c62d1f;
	-moz-border-radius:12px;
	-webkit-border-radius:12px;
	border-radius:12px;
	border:1px solid #d02718;
	display:inline-block;
	cursor:pointer;
	color:#ffffff;
	font-family:Arial;
	font-size:13px;
	padding:5px 22px;
	text-decoration:none;
	text-shadow:0px 1px 0px #810e05;
}
#btn:hover {
	background:-webkit-gradient(linear, left top, left bottom, color-stop(0.05, #f24437), color-stop(1, #c62d1f));
	background:-moz-linear-gradient(top, #f24437 5%, #c62d1f 100%);
	background:-webkit-linear-gradient(top, #f24437 5%, #c62d1f 100%);
	background:-o-linear-gradient(top, #f24437 5%, #c62d1f 100%);
	background:-ms-linear-gradient(top, #f24437 5%, #c62d1f 100%);
	background:linear-gradient(to bottom, #f24437 5%, #c62d1f 100%);
	filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#f24437', endColorstr='#c62d1f',GradientType=0);
	background-color:#f24437;
}
#btn:active {
	position:relative;
	top:1px;
}

</style>
</head>
<body  background="icon/2.jpg">
<div id="content">
<table border='5' width='1000'>
<tr>
<td>項目</td>
<td>價錢</td>
<td>數量</td>
</tr>
<?php
$a=rand(5,10);
$b=rand(5,10);
$c=rand(10,20);
$d=rand(1000,2000);
?>
<form method='post' action='controller.php'>
<input type='hidden' name='act' value='milk'>
<input type='hidden' name='price' value='<?php echo $a;?>'>
<tr>
<td>Milk</td>
<td>$<?php echo $a;?> </td>
<td><input type='text' name='num'><input type='submit' value='確認'></td>
</tr>
</form>

<form method='post' action='controller.php'>
<input type='hidden' name='act' value='sugar'>
<input type='hidden' name='price' value='<?php echo $b;?>'>
<tr>
<td>Sugar</td>
<td>$<?php echo $b;?></td>
<td><input type='text' name='num'><input type='submit' value='確認'></td>
</tr>
</form>

<form method='post' action='controller.php'>
<input type='hidden' name='act' value='flour'>
<input type='hidden' name='price' value='<?php echo $c;?>'>
<tr>
<td>Flour</td>
<td>$<?php echo $c;?></td>
<td><input type='text' name='num'><input type='submit' value='確認'></td>
</tr>
</form>

<form method='post' action='controller.php'>
<input type='hidden' name='act' value='oven'>
<input type='hidden' name='price' value='<?php echo $d;?>'>
<tr>
<td>Oven</td>
<td>$<?php echo $d;?></td>
<td><input type='text' name='num'><input type='submit' value='確認'></td>
</tr>
</form>
<!--
<form method='post' action='controller.php'>
<input type='hidden' name='act' value=''>

<tr>
<td></td>
<td></td>
<td><input name='ok'><input type='submit' value='確認'></td>
</tr>
</form>
-->
</div>
</body>
</table>
<a href="gamepage.php" style="text-decoration:none"><button id="btn";>我不買了!!</button></a>