<?php
    include "conn.php";
    include "function.php";
?>
<?php
$contestant_id=check_notall_score_id();
$query="SELECT * FROM contestant WHERE userid = '$contestant_id'";
$result=mysql_query($query);
$row=mysql_fetch_array($result);
?>
已有<?php echo check_judges_score_num($contestant_id); ?>/<?php echo check_judeges_num(); ?>名评委打分