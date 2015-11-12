<?php
	 session_start();
     $_SESSION = array();
     if (isset($_COOKIE[session_name()])){
	     setcookie(session_name(), '', time()-42000, '/');
		 }
	 echo "<script type='text/javascript'>alert('您已经成功退出！');location.href='index.php'</script>";
?>