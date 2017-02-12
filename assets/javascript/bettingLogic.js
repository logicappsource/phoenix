var aUserNames = [];
var aBalances = [];

//setInterval
setInterval(function(){ 

    $.ajax({
        "url": "assets/api/api-betting-balance.php",
        "method": "get",
        "dataType": "JSON",
        "cache": false 
    }).done(function(jData) {

        $.each(jData, function(i, jUser) {
            //Empty 
            aUserNames.length = 0; 
            aBalances.length = 0; 

            var sUsername = jUser.userName; 
            var sCurrentBalance = jUser.userBalance;
            var iBalance = parseInt(sCurrentBalance);

            aUserNames.push(sUsername);
            aBalances.push(iBalance);

            currentBalanceStatus();

        })
            }).fail(function(jFail) {
            
            })
        
        }, 50000);

function currentBalanceStatus(){

   //console.log(aUserNames,aBalances);




    
}




function newBalanceWon() {

}

function newBalanceLost() {

}


function saveLostAmmount() {

}

function saveWonAmmount() {

}


