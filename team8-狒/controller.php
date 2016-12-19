<?php
require('function.php');

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
if(! isset($_POST["act"])) {
	exit(0);
}

$act =$_POST["act"];
switch($act) {
	case "milk":
		$num=$_POST['num'];
        $price=$_POST['price'];
        //$a=$_POST['a'];
        if($num*$price > $_SESSION['money']){
            echo "<script>alert('大哥，你沒錢了!');window.location='shop.php';</script>";
        }else{
            if(milk($num,$price))
                echo "<script>alert('Successfully!');window.location='gamepage.php';</script>";
            else
                echo "<script>alert('Failed!');window.location='shop.php';</script>";
        }
        break;
    case "sugar":
		$num=$_POST['num'];
        $price=$_POST['price'];
        if($num*$price > $_SESSION['money']){
            echo "<script>alert('大哥，你沒錢了!');window.location='shop.php';</script>";
        }else{
            if(sugar($num,$price))
                echo "<script>alert('Successfully!');window.location='gamepage.php';</script>";
            else
                echo "<script>alert('Failed!');window.location='shop.php';</script>";
        }
        break;
    case "flour":
        $num=$_POST['num'];
        $price=$_POST['price'];
        if($num*$price > $_SESSION['money']){
            echo "<script>alert('大哥，你沒錢了!');window.location='shop.php';</script>";
        }else{
            if(flour($num,$price))
                echo "<script>alert('Successfully!');window.location='gamepage.php';</script>";
            else
                echo "<script>alert('Failed!');window.location='shop.php';</script>";
        }
        break;  
    case "oven":
        $num=$_POST['num'];
        $price=$_POST['price'];
        if($num*$price > $_SESSION['money']){
            echo "<script>alert('大哥，你沒錢了!');window.location='shop.php';</script>";
        }else{
            if(oven($num,$price))
                echo "<script>alert('Successfully!');window.location='gamepage.php';</script>";
            else
                echo "<script>alert('Failed!');window.location='shop.php';</script>";
        }
        break;
/*    case "makebread":
           
*/           
	default:
}
?>