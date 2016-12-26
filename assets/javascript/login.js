
  //On Load 
  $(document).ready(function() {
       $("#wdw-login").show();
  });

  var globalUser; //Global scope
  //Text to object 
 // globalUser = JSON.parse(localStorage.user);
 //Error when loading 
  
  function PlaySound() {
        
          var snd = new Audio("./assets/phoenix.mp3"); // buffers automatically when created
          snd.play();
      }

  //CLOSURE - EXECUTE ONCE ->  LOGIN 
  var loginSuccessMessage = (function() {
  var executed = false;

    return function () {
      if (!executed) {

        executed = true;
        {swal("Phoenix Flying!", "You Successfully loggedin!", "success");}
          PlaySound();
      }
    };

  })();


  //CLOSURE - EXECUTE ONCE  -> Signup 
  var signUpSuccessMessage = (function() {
  var executed = false;

    return function () {
      if (!executed) {
        executed = true;
        { swal("The Phoenix greets you!", "You have signed up!", "success" );}
          PlaySound();
      }
    };

  })();



    // LOGIN THROUGH AJAX
      $('#clicklogin').on('click', function(e) {

        e.preventDefault();
        var requestedUsername = $('#txtUserEmail').val();
        var requestedPassword = $('#txtUserPassword').val();
        
        var sLink = "assets/login/login-new.php?userName="+requestedUsername+"&userPassword="+requestedPassword;
        $.ajax({
          "method":"get",
          "url": sLink,
          "dataType":"JSON",
          "cache":false

        }).done(function(jUser) { //success 
           
        globalUser = jUser; // only use global variable or local storage

        console.log(globalUser);

    // make object to string
        var localUser = JSON.stringify(jUser);

    // save/ update string to local storage
        localStorage.user = localUser;

      //NAv lbl = username 
      var sUsername = globalUser.userName; 
      var newUseNameLbl =  $('#lbl-nav-username').text(sUsername);

        //IF condition to hceck if !null then create
        //$("#loginmodal").show();
        $(".modal-dialog").hide();
        loginSuccessMessage();

        });
      });



   //Forgotten Password 
    $('#btn-forgot-password').on('click', function() {
        var sEmailInput = $('#input-email').val();
        var sLink2 = "assets/login/forgot-password.php?emailForgot="+sEmailInput;

        $.ajax({
          "method":"get",
          "dataType":"JSON",
          "url": sLink2,
          "cache": false
        }).done(function() {
          console.log("Success");
          //MEssage email sent with sweet alert 
        });
    });



  //Register 
  $('#btn-register').on('click', function(){
    var regUsername = $('#txtusernamereg').val();
    var regPassword = $('#txtpasswordreg').val();
    var regEmail = $('#txtemailreg').val();
    var regFirstname = $('#firstnamereg').val(); 
   // var regLastname  = $('#lastnamereg').val();

    var sLinkReg = "assets/login/api-add-user.php?userNameReg="+regUsername+"&userPasswordReg="+regPassword+"&userEmailReg="+regEmail+"&firstNameReg="+regFirstname;
    $.ajax({
      "method":"get",
      "url":sLinkReg,
      "dataType":"JSON",
      "cache":false 
    }).done(function(jRegUser) {
    
      //Success
      signUpSuccessMessage();
       $(".modal-dialog").hide();
       console.log(jRegUser);
    });
  });





