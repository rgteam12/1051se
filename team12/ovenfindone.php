<?PHP
require 'config.php';
$ovenid=$_POST['ovenid'];

		$sql="select * from oven where ovenid=$ovenid;";
        $results=mysqli_query($conn,$sql);
        while ($rs=mysqli_fetch_array($results))
        {
            $fname = $rs['fname'];
			$count = $rs['fcount'];
        }
$sql="update oven set fname='',fcount='0',finishtime='00:00:00',status='0' where ovenid=$ovenid ;";
mysqli_query($conn,$sql)or die ("ERROE");
$sql="select * from food where fname='$fname';";
$result=(mysqli_query($conn,$sql));
while($row=mysqli_fetch_array($result))
{
	$fmoney=$row['price'];
}
	$sql="select * from user where id = '1';";
        $results=mysqli_query($conn,$sql);
        while ($rs=mysqli_fetch_array($results))
        {
            $umoney = $rs['money'];
        }
        $newmoney = $umoney+($fmoney*$count);
$sql="update user set money='$newmoney' where id = '1';";
mysqli_query($conn,$sql)or die ("ERROE");
mysqli_query($conn,$sql)or die ("ERROR3");
echo "<script>alert('成功賣出!恭喜你獲得".$fmoney*$count."元!');location.href = 'gamepage.php';</script>";


?>