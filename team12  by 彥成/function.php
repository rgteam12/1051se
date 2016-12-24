<?php
require('config.php');
function milk($num,$a){
    global $conn;
    $price = $num*$a;
    $sql="update user set milk=milk+$num, money=money-$price where id='1';";
    return mysqli_query($conn,$sql);
}
function sugar($num,$b){
    global $conn;
    $price = $num*$b;
    $sql="update user set sugar=sugar+$num, money=money-$price where id='1';";
    return mysqli_query($conn,$sql);
}
function flour($num,$c){
    global $conn;
    $price = $num*$c;
    $sql="update user set flour=flour+$num, money=money-$price where id='1';";
    return mysqli_query($conn,$sql);
}
function oven($num,$d){   
    global $conn;
    $sql="select * from oven ";
$result=mysqli_query($conn,$sql);
while($row=mysqli_fetch_array($result)){
	$uoven=$row['uoven'];
}
    $uoven=$uoven+1;
    $price = $num*$d;
    $sql="update user set oven=oven+$num, money=money-$price where id='1';";
    mysqli_query($conn,$sql);
    $sql="insert into oven (uoven) value('$uoven');";
    return mysqli_query($conn,$sql);
}
?>