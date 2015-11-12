<?php
    include "conn.php";
?>
<?php
    $judges_id=$_POST['judges_id'];
	$contestant_id=$_POST['contestant_id'];
	$contestant_name=$_POST['contestant_name'];
	$first_score=$_POST['first'];
	$second_score=$_POST['second'];
	$third_score=$_POST['third'];
	$lastscore=$first_score + $second_score + $third_score;
	$query="INSERT INTO connect (judges_id,contestant_id,first,second,third,lastscore) VALUES ('$judges_id','$contestant_id','$first_score','$second_score','$third_score','$lastscore')";
	$result=mysql_query($query);
	$num=mysql_affected_rows();
	if($num>0){
	    echo "<script type='text/javascript'>alert('您已经成功为选手".$contestant_name."评分!');history.go(-1)</script>";
	}else{
	    echo "<script type='text/javascript'>alert('评分错误！');history.go(-1)</script>";
	}
?>