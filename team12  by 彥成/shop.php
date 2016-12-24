<table border='5' width='1000'>
<tr>
<td>項目</td>
<td>價錢</td>
<td>數量</td>
</tr>
<?php
$a=rand(10,20);
$b=rand(10,20);
$c=rand(15,30);
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
</table>