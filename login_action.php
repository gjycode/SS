<?php
session_start();
include "conn.php";
?>
<?php
	 $name=$_POST['username'];
	 $pwd=$_POST['userpwd'];
	 if($_POST['category']=="admin"){
	     $query="SELECT * FROM admin WHERE username='$name'";
	     $result=mysql_query($query);
		 $num=mysql_num_rows($result);
	     if($num>0){
		    $row=mysql_fetch_row($result);
			$username=$row[1];
			$userpwd=$row[2];
			if($pwd==$userpwd){
	            $_SESSION['username']=$name;
			    $_SESSION['value']='admin';
				echo "<script type='text/javascript'>alert('管理员已经成功登录！');location.href='admin/index.php'</script>";
		    }else{
				echo "<script type='text/javascript'>alert('请检查您的管理员密码！');history.go(-1)</script>";
			}
	    }else{
	        echo "<script type='text/javascript'>alert('请检查您的管理员账号与密码！');history.go(-1)</script>";
	    }
	 }else{
	     $query="SELECT * FROM judges WHERE username='$name'";
	     $result=mysql_query($query);
		 $num=mysql_num_rows($result);
	     if($num>0){
		     $row=mysql_fetch_array($result);
			 $username=$row['username'];
			 $userpwd=$row['userpwd'];
			 if($pwd==$userpwd){
	                $_SESSION['username']=$name;
			        $_SESSION['value']='judges';
                    $_SESSION['userid']=$row['userid'];					
				    echo "<script type='text/javascript'>alert('评委已经成功登录！');location.href='index.php'</script>";
		        }else{
				    echo"<script type='text/javascript'>alert('请检查您的评委密码！');history.go(-1)</script>";
				}
	    }else{
	        echo "<script type='text/javascript'>alert('请检查您的评委账号与密码！');history.go(-1)</script>";
	    }
	 }
?>