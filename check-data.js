function check_data(){
    var score1 = document.score.first.value;
	if (score1.length == 0){
	    alert ("您尚有选项未打分！");
		document.score.first.select();
		return false;
	}
	if(isNaN(score1)){
        alert("总体配合 项必须为数字!");
        document.score.first.select();
        return false;
    }
	if(score1 < 0 | score1 > 10){
	    alert("总体配合 项分数必须介于 0~10 之间!");
        document.score.first.select();
        return false;
	}

	var score2 = document.score.second.value;
	if (score2.length == 0){
	    alert ("您尚有选项未打分！");
		document.score.second.select();
		return false;
	}
	if(isNaN(score2)){
        alert("表演 项必须为数字!");
        document.score.second.select();
        return false;
    }
	if(score2<0 | score2>10){
	    alert("表演 项分数必须介于 0~10 之间!");
        document.score.second.select();
        return false;
	}
	
	var score3 = document.score.third.value;
	if (score3.length == 0){
	    alert ("您尚有选项未打分！");
		document.score.third.select();
		return false;
	}
	if(isNaN(score3)){
        alert("表情 项必须为数字!");
        document.score.third.select();
        return false;
    }
	if(score3<0 | score3                                    >10){
	    alert("表情 项分数必须介于 0~10 之间!");
        document.score.third.select();
        return false;
	}
	
	
	var lastscore = score1 + score2 +score3;
	var answer=confirm("您确定为选手XXX的最终评分为 "+lastscore);
	if(answer==true){
	    alert("确定提交当前总分?");
		return true;
	}else{
	    alert("确定不提交当前总分?");
		return false;
	}
}