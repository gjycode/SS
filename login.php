<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>SS评分系统</title>
	<link href="layout.css" rel="stylesheet" type="text/css" />
</head>

<?php
session_start();
include "conn.php";
?>

<body background="images/huibg.gif">
	<?php
	 if(!isset($_SESSION['username'])){
	?>
	
    <table align="center" style="margin-top:100px;" width="720" height="274" border="0" cellpadding="0" cellspacing="0">
    	<tr>
		    <td>
		        <table width="720" height="274" border="0" cellpadding="0" cellspacing="0">
			        <tr>
    		            <td>
    		            	<img src="images/index_01.jpg" width="78" height="273" alt="">
						</td>
    		            <td>
						    <form action="login_action.php" method="POST">
					        <table width="564" border="0" cellspacing="0" cellpadding="0">
    		                    <tr>
    		                        <td>
					        			<img src="images/index_02.jpg" width="564" height="93" />
					        		</td>
  		                        </tr>
    		                    <tr>
    		                        <td>
					        		    <table width="564" border="0" cellspacing="0" cellpadding="0">
    		                                <tr>
    		                                    <td>
					        		        		<img src="images/index_04.jpg" width="18" height="106" />
					        		        	</td>
    		                                    <td>
					        		        	    <table width="234" border="0" cellspacing="0" cellpadding="0">
    		                                            <tr>
    		                                                <td width="234" height="34">
					        		        					<input class="image-sprites2" type="text" name="username" maxlength="25" />
					        		        				</td>
  		                                       			 </tr>
    		                                      		<tr>
    		                                        		<td>
					        		        					<img src="images/index_07.jpg" width="234" height="37" />
					        		        				</td>
  		                                        		</tr>
    		                                    		<tr>
    		                                        		<td width="234" height="35">
															    <input class="image-sprites3" type="password" name="userpwd" maxlength="25" />
															</td>
  		                                        		</tr>
  		                                      		</table>
					        		        	</td>
    		                                    <td>
					        		        		<img src="images/index_06.jpg" width="312" height="106" />
					        		        	</td>
  		                                    </tr>
  		                                </table>
					        	    </td>
  		                        </tr>
    		                    <tr>
    		                        <td>
					        			<table  width="564" border="0" cellspacing="0" cellpadding="0">
    		                          		<tr>
    		                            		<td>
												    <input id="btnOK" type="image" src="images/index_09.jpg" width="77" height="74" name="submit" value="提交">
												</td>
    		                            		<td width="487" height="74" background="images/index_10.jpg">
												    <table style="margin-top:-15px;" width="487" border="0" cellspacing="0" cellpadding="0">
													    <tr>
														    <td width="290" align="right">
															    <input class="" type="radio" name="category" value="judges" checked >
															</td>
															<td width="" align="center">
															    <input class="" type="radio" name="category" value="admin" >
															</td>
													    </tr>
													</table>
												</td>
  		                            		</tr>
  		                          		</table>
					        		</td>
  		                        </tr>
	                        </table>
							</form>
						</td>
    		            <td>
    		            	<img src="images/index_03.jpg" width="78" height="273" alt="">
						</td>
			    	</tr>
			    </table>
			</td>
    	</tr>
    </table>
    <?php
		 }else{
	     if($_SESSION['value']=='admin'){
		     echo "管理员   ".$_SESSION['username']."已登录";
		 }else{
		     echo "评委   ".$_SESSION['username']."已登录";
		 }
	 }
	?>

</body>
</html>
