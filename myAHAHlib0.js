function callAHAH0(url, pageElement, callMessage) {
    document.getElementById(pageElement).innerHTML = callMessage;
        try {
            req0 = new XMLHttpreq0uest();
/* e.g. Firefox */
        } catch(e) {
            try {
            req0 = new ActiveXObject("Msxml2.XMLHTTP");
/* some versions IE */
            } catch (e) {
                try {
                req0 = new ActiveXObject("Microsoft.XMLHTTP");
/* some versions IE */
                } catch (E) {
                    req0 = false;
                }
            }
        }
        req0.onreadystatechange = function() {responseAHAH0(pageElement);};
		req0.open("GET",url,true);
        req0.send(null);
    }
function responseAHAH0(pageElement) {
    var output = '';
    if(req0.readyState == 4) {
        if(req0.status == 200) {
            output = req0.responseText;
            document.getElementById(pageElement).innerHTML = output;
        }
    }
}