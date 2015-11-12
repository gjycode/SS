<?php
     $link=mysql_connect("localhost","root","root")or die("连接失败：".mysql_error());
	 mysql_select_db('ss')or die('不能选定数据库 ss:'.mysql_error());
	 mysql_query("set names 'utf8'");
?>