<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>评分</title>
<link href="layout.css" rel="stylesheet" type="text/css" />
<script language="javascript" type="text/javascript" src="myAHAHlib.js"></script>
<script language="javascript" type="text/javascript">

	var timerHandle;
            timerHandle = setInterval("callAHAH('wait.php','wait','分数')", 1000);
            
			function releaseTimer() {
                clearInterval(timerHandle);
            }
	
</script>


</head>
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
<body onunload="releaseTimer()">


<table width="720" border="1" align="center" cellpadding="0" cellspacing="0">
    <tr>
        <td>
		    <?php echo $_SESSION['username']; ?>已登录    <a href="destroy.php">注销</a>
        </td>
    </tr>
</table>
    <div id="wait"></div>

</body>
</html>
