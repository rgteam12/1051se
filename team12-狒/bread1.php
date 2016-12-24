<style type="text/css">
body {width:1000px; margin:5px auto;}
#content {background-color:#CCEEFF; margin:10px; padding:5px; border:2px solid blue; font-size: 14pt; color:#030; line-height:28px;position:relative;
    top:5%;}
a {color:purple}
</style>
</head>
<body  background="icon/5.jpg">
<div id="content">
<table width="100%" border="1" >
        </br></br>

        <tr>
        <td width="15%">麵包名稱</td>
        <td width="14%">糖</td>
        <td width="14%">麵粉</td>
        <td width="14%">牛奶</td>
        <td width="14%">烘焙時間</td>
        <td width="14%">賣取金錢</td>
        <td width="14%">數量</td>
        
        
        </tr>
<?php
require 'config.php';
$sql = "select * from food where id = '1';";
$results=mysqli_query($conn,$sql);
$text="";
    while (	$rs=mysqli_fetch_array($results)) {
        	$fname=$rs['fname'];
        	$sugar=$rs['sugar'];
            $milk=$rs['milk'];
        	$flour=$rs['flour'];
        	$time=$rs['time'];
            $price=$rs['price'];
    echo"<tr><td>" , $rs['fname'],
        "</td><td>", $rs['sugar'], 
        "</td><td>", $rs['milk'],
        "</td><td>", $rs['flour'],
        "</td><td>", $rs['time'],
        "</td><td>", $rs['price'],
        "</td><td>";
    }
?>
<form method='post' action='stated.php'>
<input type='text'  name='id' value='<?php echo $id ;?>' hidden/>
<input type='text'  name='fname' value='<?php echo $fname ;?>' hidden/>
<input type='text'  name='sugar' value='<?php echo $sugar ;?>' hidden/>
<input type='text'  name='milk' value='<?php echo $milk ;?>' hidden/>
<input type='text'  name='flour' value='<?php echo $flour ;?>' hidden/>
<input type='text'  name='time' value='<?php echo $time ;?>' hidden/>
<input type='text'  name='price' value='<?php echo $price ;?>' hidden/>
<select class='btn btn-success' name='count' id='count' onchange='checkfood()'>


    <?php
    for($i=0;$i<=20;$i++){
    echo "<option value=".$i.">".$i."</option>";
    }
    ?>
</select>
<input type='submit' id='submit' value='請選擇數量' class='btn btn-success' disabled/>
</form>

    <?php
        $sql="select * from user where id = '1';";
        $results=mysqli_query($conn,$sql);
        while ($rs=mysqli_fetch_array($results))
        {
            $umilk = $rs['milk'];
            $usugar = $rs['sugar'];
            $uflour = $rs['flour'];
        }
    ?>


<script>
function checkfood(){

	var milk = <?php echo $umilk;?>;
    var sugar = <?php echo $usugar;?>;
    var flour = <?php echo $uflour;?>;
    
	var fmilk=<?php echo $milk;?>;
    var fsugar=<?php echo $sugar;?>;
    var fflour=<?php echo $flour;?>;

	var count=document.getElementById("count").value;

	var sum1=count * fmilk;
    var sum2=count * fsugar;
    var sum3=count * fflour;
	if(milk < sum1 || sugar < sum2 || flour < sum3){
		document.getElementById("submit").disabled=true;
		document.getElementById("submit").value="材枓不足";
		 
	}else{
		document.getElementById("submit").disabled=false;
		document.getElementById("submit").value="開始烤囉";
	}
	
}

</script>