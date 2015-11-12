<?php
    include "conn.php";
	//include "session.php";
?>
<?php
/*查询评委数*/
function check_judeges_num(){
    $query="SELECT * FROM judges";
	$result=mysql_query($query);
	$num=mysql_num_rows($result);
	return $num;
}

/*查询已打分评委数*/
function check_judges_score_num($contestant_id){
    $query="SELECT * FROM connect WHERE contestant_id = '$contestant_id'";
	$result=mysql_query($query);
	$num=mysql_num_rows($result);
	return $num;
}

/*查询选手数*/
function check_contestant_num(){
    $query="SELECT * FROM contestant";
	$result=mysql_query($query);
	$num=mysql_num_rows($result);
	return $num;
}

/*查询选手位置*/
function check_contestant_location($contestant_id){
	$num=check_contestant_num();
    $query="SELECT * FROM contestant";
	$result=mysql_query($query);
	$k=0;
	while($row=mysql_fetch_array($result)){
	    $k++;
	    if($row['userid']==$contestant_id){
		    return $k;
		}
	}
	
}

/*查询是否评分结束*/
function check_finish(){
    $num1=check_judeges_num();
	$num2=check_contestant_num();
	$sum=$num1*$num2;
	$query="SELECT * FROM connect";
	$result=mysql_query($query);
	$num0=mysql_num_rows($result);
	if($num0==$sum){
	    return 1;
	}else{
	    return 0;
	}
    }

/*查询即将打分的选手id*/
function check_noscore_id(){
	$num1=check_contestant_num();/*选手数*/
	$num2=check_judeges_num();/*评委数*/
	
	$query1="SELECT * FROM contestant";
	$result1=mysql_query($query1);
	$query2="SELECT * FROM connect";
	$result2=mysql_query($query2);
	
	$num0=mysql_num_rows($result2);
	if($num0==0){
	    $row3=mysql_fetch_array($result1,0);
	    return $row3['userid'];
	}else{
	    for($i=0;$i<$num1-1;$i++){
	        for($j=0;$j<$sum-1;$j++){
			    $query1="SELECT * FROM contestant";
	            $result1=mysql_query($query1);
	            $query2="SELECT * FROM connect";
	            $result2=mysql_query($query2);
	    		$row1=mysql_fetch_array($result1,$i);
	    		$row2=mysql_fetch_array($result2,$j);
	    		if($row1['userid']==$row2['contestant_id']){
	    			break;
	    		}else{
	    		    continue;
	    		}
	    	}
	    }
		$row3=mysql_fetch_array($result1,$i+1);
	    return $row3['userid'];
	}
}

/*评委是否打分*/
function check_score_or_not($jud_id,$con_id){
    $query="SELECT * FROM connect WHERE judges_id='$jud_id' and contestant_id = '$con_id'";
	$result=mysql_query($query);
	$k=mysql_num_rows($result);
	    if($k==0){
	        return 0;
	    }else{
	        return 1;
	    }
    }

/*查询分数尚未打完或正在进行的选手*/
function check_notall_score_id(){
	$query1="SELECT * FROM contestant";
	$result1=mysql_query($query1);
	while($row1=mysql_fetch_array($result1))
	{
	$id=$row1['userid'];
	$query3="SELECT * FROM connect WHERE contestant_id = '$id'";
			$result3=mysql_query($query3);
			$k=mysql_num_rows($result3);
			if($k>=0 && $k<2){
			    return $id;
				}

	}
	
}

/*查询选手总分*/
function check_totla_score($contestant_id){
    $query="SELECT * FROM connect WHERE contestant_id = '$contestant_id'";
	$result=mysql_query($query);
	$total=0;
	while($row=mysql_fetch_array($result)){
	    $total+=$row['lastscore'];
	}
	return $total;
}
?>