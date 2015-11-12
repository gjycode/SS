function callAHAH2(url, pageElement, callMessage) {
    document.getElementById(pageElement).innerHTML = callMessage;
        try {
            req2 = new XMLHttpreq2uest();
/* e.g. Firefox */
        } catch(e) {
            try {
            req2 = new ActiveXObject("Msxml2.XMLHTTP");
/* some versions IE */
            } catch (e) {
                try {
                req2 = new ActiveXObject("Microsoft.XMLHTTP");
/* some versions IE */
                } catch (E) {
                    req2 = false;
                }
            }
        }
        req2.onreadystatechange = function() {responseAHAH2(pageElement);};
        myRand=parseInt(Math.random()*99999999999);
	    var modurl=url+"?rand="+myRand;
		req2.open("GET",modurl,true);
        req2.send(null);
    }
function responseAHAH2(pageElement) {
    var output = '';
    if(req2.readyState == 4) {
        if(req2.status == 200) {
            output = req2.responseText;
            document.getElementById(pageElement).innerHTML = output;
        }
    }
}