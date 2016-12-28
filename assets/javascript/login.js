
    //On Load 
    $(document).ready(function() {
        $("#wdw-login").show();
    });

   

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

         //CLOSURE - EXECUTE ONCE  -> Forgot Password 
      var forgotPassSuccessMessage = (function() {
      var executed = false;

        return function () {
          if (!executed) {
            executed = true;
            { swal("The Phoenix flied a message to you!", "Check your email!", "" );}
              PlaySound();
          }
        };
      })();




    // LOGIN THROUGH AJAX
      $('#clicklogin').on('click', function(e) {
        e.preventDefault();
        var requestedUsername = $('#txtUserEmail').val();
        var requestedPassword = $('#txtUserPassword').val();
        
        var sLink = "assets/api/api-login.php?userName="+requestedUsername+"&userPassword="+requestedPassword;
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

      //User Fetch  
          globalData();

        //IF condition to hceck if !null then create
        //$("#loginmodal").show();
        $(".modal-dialog").hide();
      //Success Message  
        loginSuccessMessage(); 
        });
      });


      //Forgotten Password 
        $('#btn-forgot-password').on('click', function() {
            var sEmailInput = $('#input-email').val();
            var sLink2 = "assets/api/api-forgot-password.php?emailForgot="+sEmailInput;

            $.ajax({
              "method":"get",
              "dataType":"JSON",
              "url": sLink2,
              "cache": false
            }).done(function() {
                forgotPassSuccessMessage(); // not displaying 
            });
        });


        //Register 
        $('#btn-register').on('click', function(){
          var regUsername = $('#txtusernamereg').val();
          var regPassword = $('#txtpasswordreg').val();
          var regEmail = $('#txtemailreg').val();
          var regFirstname = $('#firstnamereg').val(); 
          var regLastname  = $('#lastnamereg').val();
        
          var sLinkReg = "assets/api/api-add-user.php?userNameReg="+regUsername+"&userPasswordReg="+regPassword+"&userEmailReg="+regEmail+"&firstNameReg="+regFirstname+"&lastNameReg="+regLastname;
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


          var sLinkRegMail = "assets/api/api-email-reg.php?userNameReg="+regUsername+"&userEmailReg="+regEmail; 

          $.ajax({
            "method":"get",
            "url": sLinkRegMail,
            "dataType":"JSON",
            "cache": false 
          }).done(function(jRegUserMail) {
                  console.log("success");
                  
          }).fail(function(JRegUserFail) {
                  console.log("fail");
            })
          });





