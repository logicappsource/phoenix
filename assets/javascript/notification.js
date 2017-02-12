
/*************Fetch Results ********************************/

	//Update 10 sec 
    /*
	setInterval(function() {
	     //Check poker result with PS - API 
		function checkPokerResults() {

			console.log("print every 10 sec ");
		}
	},10000);
*/



      function notifyMe() {
        // Let's check if the browser supports notifications
        if (!("Notification" in window)) {
          alert("This browser does not support desktop notification"); 
        }

        // Let's check whether notification permissions have already been granted
        else if (Notification.permission === "granted") {
          // If it's okay let's create a notification
         
        }

        // Otherwise, we need to ask the user for permission
        else if (Notification.permission !== 'denied') {
          Notification.requestPermission(function (permission) {
            // If the user accepts, let's create a notification
            if (permission === "granted") {
              var notification = new Notification("Hi there!");
            }
          });
        }

      // At last, if the user has denied notifications, and you 
      // want to be respectful there is no need to bother them any more.
    }
    notifyMe();

		    var bResults = false;

		    if(bResults == true) {
		    	notifyWin()
		    } else {
		    	notifyLoose() 
		    }

 
    		//if winning call this func
    function notifyWin() {
    	 var theMessage = "You have won a bet X Ammount"; // + ammount bet 
    	 //PlaySound();
    	 //play sound implementation

	    setInterval(function(){
	      // message is empty and sData contains A
	      $.get("assets/data/results-won.json", function(sData){

	        $("#lblMessage").text(sData);
	        if(theMessage != sData){
	          var notification = new Notification(sData);
	          theMessage = sData;  // message is A
	        }
      })

    }, 5000)

    };
    	    //if loose call 
    function notifyLoose() {
    
      

	    	 var theMessage = "You have lost your bet"; // - ammount bet

 		//PlaySound();
	    setInterval(function(){
	      // message is empty and sData contains A
	      $.get("assets/data/results-loose.json", function(sData){

        $("#lblMessage").text(sData);
        if(theMessage != sData){
          var notification = new Notification(sData);
          theMessage = sData;  // message is A
        }
      })
    }, 5000)
    };



/*
    var theMessage = "";
    setInterval(function(){
      // message is empty and sData contains A
      $.get("messages.txt", function(sData){

        $("#lblMessage").text(sData);
        if(theMessage != sData){
          var notification = new Notification(sData);
          theMessage = sData;  // message is A
        }

      })

    }, 3000)*/
