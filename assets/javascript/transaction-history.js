var aHistory= []; 
var aUses = [];

        if(localStorage.user) {
            var sUserLocalStorage = localStorage.user;
            aUsers = JSON.parse(sUserLocalStorage);
        
        }

        var sLink = "assets/api/api-transaction-history.php"; 
        $.ajax({
            "url": sLink,
            "method":"get",
            "dataType": "JSON",
            "cache": false 
        }).done(function(jHistory){

            jHistory.forEach(function(oHistory,i){
                
            var sTeam = oHistory.team;
            aHistory.push(sTeam);
            var sAmmount = oHistory.betammount;
            aHistory.push(sAmmount);
            var sDate = oHistory.date;
            aHistory.push(sDate);
            var bWinBoolean = oHistory.winboolean;
            aHistory.push(bWinBoolean);
            var sHistoryId = oHistory.historyid; 
            aHistory.push(sHistoryId);


             $("#lblHistory").append(
                        '<tr>' +
                        '<th scope="row">'+'<h4>'+oHistory.team + '</h4>'+ '</th>' +
                        '<td>' + '<h4>' +"$ "+ oHistory.betammount + '</h4>' + '</td>' +
                        '<td class="historyPrice">' + oHistory.date + '</td>' +
                        '<td><i class="fa arrow-up" aria-hidden="true"></i></td>' + 
                        '</tr>'); 

            })

        }).fail(function(jfail) {
            console.log(jfail);
        });


