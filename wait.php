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
<?php if( check_finish()==0){?>

    <?if(check_judges_score_num($contestant_id)==check_judeges_num()){?>
        <p>总计<?php check_judeges_num()?>位评委评分结束，即将进入下一选手的评分...</p>
    	<?php 
    	sleep(5);
    	echo "<script>location.href='index.php';</script>";
    	?>
    <?php }else{ ?>

<table width="661" border="0" cellspacing="0" cellpadding="0">
    <tr>
        <td>
		    <table width="661" border="0" cellspacing="0" cellpadding="0">
                <tr>
                    <td width="217" height="40" class="black">
					    <?php echo $row['username'] ?>
					</td>
                    <td width="5"></td>
                    <td width="439" height="40" class="black"></td>
                </tr>
            </table>
		</td>
    </tr>
    <tr>
        <td height="5"></td>
    </tr>
    <tr>
        <td>
	        <table width="661" border="0" cellspacing="0" cellpadding="0">
              <tr>
                <td width="217" height="246" class="black">
				    已有<?php echo check_judges_score_num($contestant_id); ?>/<?php echo check_judeges_num(); ?>名评委打分
				</td>
                <td width="5"></td>
                <td width="439" height="246" class="black">
				    <?php if(check_judges_score_num($contestant_id)==0){
					        echo "0.00";
					      }else{ 
					        echo number_format(check_totla_score($contestant_id)/check_judges_score_num($contestant_id),2);
					      } ?>   
				</td> 
              </tr>
            </table>
	    </td>
    </tr>
    <tr>
        <td height="5"></td>
    </tr>
    <tr>
        <td width="661" height="33" class="black">
		    本次活动共<?php echo check_contestant_num();?>位参赛选手，现在为第<?php echo check_contestant_location($contestant_id);?>位。
		</td>
    </tr>
</table>
    <?php }  ?>
	
<?php }else{ ?>
    <p>本次活动评分结束，感谢您的莅临指导，谢谢！ </p>
<?php }  ?>