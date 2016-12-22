<style type="text/css">
body {width:480px; margin:10px auto;}
#content {background-color:#CCEEFF; margin:10px; padding:10px; border:2px solid blue; font-size: 14pt; color:#030; line-height:28px}
a {color:purple}
</style>
</head>
<body  background="icon/2.jpg">
<div id="content">


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
<td><img src='icon/milk.png' style="height:20%"></td>
<td>$<?php echo $a;?> </td>
<td><input type='text' name='num'><input type='submit' value='確認'></td>
</tr>
</form>

<form method='post' action='controller.php'>
<input type='hidden' name='act' value='sugar'>
<input type='hidden' name='price' value='<?php echo $b;?>'>
<tr>
<td><img src='icon/sugar.png' style="height:20%"></td>
<td>$<?php echo $b;?></td>
<td><input type='text' name='num'><input type='submit' value='確認'></td>
</tr>
</form>
<tr></tr>
<tr></tr>
<tr></tr>
<form method='post' action='controller.php'>
<input type='hidden' name='act' value='flour'>
<input type='hidden' name='price' value='<?php echo $c;?>'>
<tr>
<td><img src='icon/flour.png' style="height:20%"></td>
<td>$<?php echo $c;?></td>
<td><input type='text' name='num'><input type='submit' value='確認'></td>
</tr>
</form>

<form method='post' action='controller.php'>
<input type='hidden' name='act' value='oven'>
<input type='hidden' name='price' value='<?php echo $d;?>'>
<tr>
<td><img src='icon/oven1.png' style="height:20%"></td>
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
