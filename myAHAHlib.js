function callAHAH(url, pageElement, callMessage) {
    document.getElementById(pageElement).innerHTML = callMessage;
        try {
            req = new XMLHttpRequest();
/* e.g. Firefox */
        } catch(e) {
            try {
            req = new ActiveXObject("Msxml2.XMLHTTP");
/* some versions IE */
            } catch (e) {
                try {
                req = new ActiveXObject("Microsoft.XMLHTTP");
/* some versions IE */
                } catch (E) {
                    req = false;
                }
            }
        }
        req.onreadystatechange = function() {responseAHAH(pageElement);};
        myRand=parseInt(Math.random()*99999999999);
	    var modurl=url+"?rand="+myRand;
		req.open("GET",modurl,true);
        req.send(null);
    }
function responseAHAH(pageElement) {
    var output = '';
    if(req.readyState == 4) {
        if(req.status == 200) {
            output = req.responseText;
            document.getElementById(pageElement).innerHTML = output;
        }
    }
}