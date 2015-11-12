<table width="661" border="0" cellspacing="0" cellpadding="0">
    <tr>
        <td>
	        <table width="661" border="0" cellspacing="0" cellpadding="0">
                <tr>
                    <td width="217" height="40" class="black"><?php echo $row['username']; ?></td>
                    <td width="5"></td>
                    <td width="439" height="40" class="black"><?php echo $row['userclass']; ?></td>
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
                    <td width="217" height="213" class="black"></td>
                    <td width="5"></td>
                    <td width="439" height="213" class="black"><?php echo $row['intro']; ?></td>
                </tr>
            </table>
	    </td>
    </tr>
    <tr>
        <td height="5"></td>
    </tr>
    <tr>
        <td>
		    <form action='update_score.php' method='POST' name="score" onSubmit="return check_data()">
	        <table width="661" border="0" cellspacing="0" cellpadding="0">
                <tr>
                    <td width="217" height="246" class="black"><div id="score_num"></div></td>
                    <td width="5"></td>
                    <td width="330" height="246" class="black left top">
					    <div style="padding:15px 0 16px 10px;">
			                <input type='hidden' name='judges_id' value='<?php echo $_SESSION['userid'] ?>' />
			                <input type='hidden' name='contestant_id' value='<?php echo $contestant_id ?>' />
			            	<input type='hidden' name='contestant_name' value='<?php echo $row['username'] ?>' />
			            	<label>总体配合:</label><input type='text' name='first' class="image-sprites" /></br>
			            	<label>表演:</label><input type='text' name='second' class="image-sprites" /></br>
			            	<label>表情:</label><input type='text' name='third' class="image-sprites" /></br>
							<!--<label>总体配合:</label><input type='text' name='fouth' class="image-sprites" /></br>
			                <label>表演:</label><input type='text' name='fifth' class="image-sprites" /></br>-->
					</td>
                    <td>
	        	        <table width="95" border="0" cellspacing="0" cellpadding="0">
                            <tr>
                              <td width="95" height="19" class="black"></td>
                            </tr>
                            <tr>
                              <td><input type="image" src="images/score_18.png" width="95" height="212" name="submit" value="提交"></td>
                            </tr>
                            <tr>
                              <td width="95" height="15" class="black"></td>
                            </tr>
                        </table>
                    </td>
                    <td width="14" height="246" class="black"></td>
                </tr>
            </table>
			</form>
	    </td>
    </tr>
    <tr>
        <td height="5"></td>
    </tr>
    <tr>
        <td width="661" height="33" class="black">
		    <marquee>本次活动共<?php echo check_contestant_num();?>位参赛选手，现在为第<?php echo check_contestant_location($contestant_id);?>位。</marquee>
		</td>
    </tr>
</table>
