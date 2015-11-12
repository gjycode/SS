<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>评分</title>
<link href="layout.css" rel="stylesheet" type="text/css" />
<script language="javascript" type="text/javascript" src="myAHAHlib.js"></script>
<script language="javascript" type="text/javascript" src="myAHAHlib0.js"></script>
<script language="javascript" type="text/javascript" src="check-data.js"></script>
<script language="javascript" type="text/javascript">

	var timerHandle;
            timerHandle = setInterval("callAHAH('wait.php','wait','Loading...')", 3000);
            timerHandle0 = setInterval("callAHAH0('score_num.php','score_num','分数')", 1000);
			function releaseTimer() {
                clearInterval(timerHandle);
				clearInterval(timerHandle0);
            }
	
</script>



</head>

<body background="images/bg-1.jpg">
<div style="display:none;">
<?php
session_start();
include "conn.php";
include "session.php";
include "function.php";
?>
<?php
$contestant_id=check_notall_score_id();
$query="SELECT * FROM contestant WHERE userid = '$contestant_id'";
$result=mysql_query($query);
$row=mysql_fetch_array($result);
?>
</div>

<table width="661" border="0" align="center" cellpadding="0" cellspacing="0">
    <tr class="black">
        <td width="661" height="34">
		    <?php echo $_SESSION['username']; ?>&nbsp;&nbsp;&nbsp;欢迎您    <a href="destroy.php">注销</a>
        </td>
    </tr>
    <tr>
        <td width="661" height="8"></td>
    </tr>
    <tr>
	    <td>
            <?php if( check_finish()==0){?>
            
                <?php if( check_score_or_not($_SESSION['userid'],$contestant_id)==0){ 
            	include "score.php";
            	}else{ ?>
                <div id="wait"></div>
                <?php } ?>
            	
            <?php }else{ ?>
                <p>本次活动评分结束，感谢您的莅临指导，谢谢！ </p>
            <?php } ?>
		</td>
    </tr>

</table>
</body>
</html>
