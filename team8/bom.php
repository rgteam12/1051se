<table width="50%" border="1" >
        </br></br>
		<p> 材料表 </p> 
        <tr>
        <td width="10%">麵包名稱</td>
        <td width="8%">糖(份)</td>
        <td width="8%">麵粉(份)</td>
        <td width="8%">牛奶(份)</td>
        <td width="8%">烘焙時間</td>
        <td width="8%">賣取金錢</td>
        
        </tr>
<?php
require 'config.php';
global $conn;
$a=rand(2,8);
$sql="UPDATE food SET sugar=$a where id = '1'";
mysqli_query($conn,$sql);
$b=rand(2,8);
$sql="UPDATE food SET sugar=$b where id = '2'";
mysqli_query($conn,$sql);
$c=rand(2,8);
$sql="UPDATE food SET sugar=$c where id = '3'";
mysqli_query($conn,$sql);
$d=rand(3,9);
$sql="UPDATE food SET flour=$d where id = '1'";
mysqli_query($conn,$sql);
$e=rand(3,9);
$sql="UPDATE food SET flour=$e where id = '2'";
mysqli_query($conn,$sql);
$f=rand(3,9);
$sql="UPDATE food SET flour=$f where id = '3'";
mysqli_query($conn,$sql);
$g=rand(5,15);
$sql="UPDATE food SET milk=$g where id = '1'";
mysqli_query($conn,$sql);
$h=rand(5,15);
$sql="UPDATE food SET milk=$h where id = '2'";
mysqli_query($conn,$sql);
$i=rand(5,15);
$sql="UPDATE food SET milk=$i where id = '3'";
mysqli_query($conn,$sql);
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
        "</td><td>", $rs['sugar'], 
        "</td><td>", $rs['milk'],
        "</td><td>", $rs['flour'],
        "</td><td>", $rs['time'],
        "</td><td>", $rs['price'];            
    }

?> 
</table>   
<a href="gamepage.php">返回</a> </br>  

