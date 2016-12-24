<?PHP
date_default_timezone_set('Asia/Taipei');
	require 'config.php';
	//$user=$_SESSION['id'];
	$fid=$_POST['id'];
	$fname=$_POST['fname'];
	$fsugar=$_POST['sugar'];
	$fmilk=$_POST['milk'];
	$fflour=$_POST['flour'];
	$ftime=$_POST['time'];
	$price=$_POST['price'];
	$count=$_POST['count'];
	$sumtime=$count * $ftime; 
	//印出值:玩家,製作食物ID,食物名稱,時間,食物材料包數,數量,總需要時間
	//echo "玩家:".$user."食物:".$fid."時間:".$ftime."數量:".$count."總需時間:".$sumtime."<br/>";
	//$ovencount:看玩家有幾個空置的烤爐
	$sql="select count(uoven) as a from oven where status='0';";
	$result=mysqli_query($conn,$sql);
	while($row=mysqli_fetch_array($result)){
		$ovencount=$row['a'];
	}
	//空置烤爐>0,製作開始
	//空置烤爐=0,停止製作
	if($ovencount>0) 
	{
	//當前時間
	$starttime=date("Y-m-d h:i:s");
	//當前時間+製作總時間
	//mktime(h,i,s,m,d,y)
	$finishtime=date("Y-m-d H:i:s",mktime(date("h"),date("i"),date("s")+ $sumtime ,date("m"),date("d"),date("Y")));
	//echo "NOW:".$starttime."<br/>";
	//echo "FIN:".$finishtime;
	//$oven找出第一個空置的烤爐
	$sql="select * from oven where status='0';";
	$result=mysqli_query($conn,$sql);
	while($row=mysqli_fetch_array($result)){
		$oven=$row['uoven'];
		break;
	}
	
	//更新$oven的資料,foodname,starttime,finishtime,status
	$sql="update oven set fname='$fname',fcount='$count',finishtime='$finishtime' ,status='1' where uoven='$oven';";
	mysqli_query($conn,$sql)or die("ERROR");
	//扣玩家的材料包

	$sql="select * from user ;";
	$result=mysqli_query($conn,$sql);
	while($row=mysqli_fetch_array($result))
	{
		$umilk=$row['milk'];
		$usugar=$row['sugar'];
		$uflour=$row['flour'];
	}

	$newmilk=$umilk - $fmilk * $count;
	$newsugar=$usugar - $fsugar * $count;
	$newflour=$uflour - $fflour * $count;
	//echo "玩家FOODPACKAGE:".$_SESSION['foodpackage']."新的FOODPACKAGE:".$newfoodpackage;

	echo $newmilk . "<br>";
	echo $newsugar . "<br>";
	echo $newflour . "<br>";

	$sql="update user set milk='$newmilk' , sugar= '$newsugar' , flour='$newflour' where id = '1';";
	mysqli_query($conn,$sql)or die("ERROR");
	echo "<script>alert('開始製作中....');location.href = 'gamepage.php';</script>";
	}
else {	
	echo "<script>alert('現在沒有空的烤爐');location.href = 'gamepage.php';</script>";
}
?>