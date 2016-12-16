<table width="50%" border="1" >
        </br></br>

        <tr>
        <td width="10%">麵包名稱</td>
        <td width="8%">糖</td>
        <td width="8%">麵粉</td>
        <td width="8%">牛奶</td>
        <td width="8%">烘焙時間</td>
        <td width="8%">賣取金錢</td>
        
        
        </tr>
<?php
require 'config.php';
$sql = "select * from food where id = '2';";
$results=mysqli_query($conn,$sql);
$text="";
    while (	$rs=mysqli_fetch_array($results)) {

    echo"<tr><td>" , $rs['fname'],
        "</td><td>", $rs['sugar'], 
        "</td><td>", $rs['milk'],
        "</td><td>", $rs['flour'],
        "</td><td>", $rs['time'],
        "</td><td>", $rs['price'];   
        
    }
?>
<form method='post' action='stated.php'>
<td><input type='text' name='num'><input type='submit' value='確認'></td>
