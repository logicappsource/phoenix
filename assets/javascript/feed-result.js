
setInterval(function(){
    
    $.ajax({
        "method":"get",
        "dataType": "xml",
        "url": "assets/api/api-pokerstars-tournements.php",
        "cache": false 
    }).done(function(xmlData) {
        console.log(xmlData);


    //var x2js = new x2js(); 
    //var jsonObj = x2js.xml2json(xmlData);




    }).fail(function(jFail) {
        console.log(jFail);
    })
    /*

  function loadXMLDoc(dname) {
        if (window.XMLHttpRequest) {
            xhttp=new XMLHttpRequest();
        }
        else {
            xhttp=new ActiveXObject("Microsoft.XMLHTTP");
        }
        xhttp.open("GET",dname,false);
        xhttp.send();
        return xhttp.responseXML;
    }


    var xmlDoc = loadXMLDoc("test.xml");
    var x2js = new X2JS();
    var jsonObj = x2js.xml2json(xmlDoc);
*/

 }, 100000);

