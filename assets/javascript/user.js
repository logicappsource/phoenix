 var globalUser; //Global scope

    //Text to object 
  // globalUser = JSON.parse(localStorage.user);
  //Error when loading 
    
  function PlaySound() {
            var snd = new Audio("./assets/data/phoenix.mp3"); // buffers automatically when created
            snd.play();
        }

 //GLobal User Data Fetch -> login 
 function globalData () {
       //Username 
      var newUseNameLbl =  $('#lbl-nav-username').text(globalUser.userName);
      var newUseNameLbls =  $('#lbl-username').text(globalUser.userName);
      //Balance 
      var iBalance = globalUser.userBalance;
      var dollar = "$";

      var nBalance = $('#lbl-menu-balance').text(dollar + iBalance);
      var uBalance = $('#user-balance').text(globalUser.userBalance);

      //Staminapoitns
      var iUserStamina = $("#lblStaminaPoints").text(globalUser.staminapoints);
      //Usericon-Sidebar
      $('#user-icon').attr('src', globalUser.userIcon);
      //usericon-nav
      $('#user-icon-nav').attr('src', globalUser.userIcon);
      //userprofileTxt 
      $('#lbl-profile-txt').append(globalUser.userProfileTxt);
      //usericon-Profile
      $('#profile-icon').attr('src', globalUser.userIcon);
      //Fullname - PRfile 
      $('#lbl-fullname').append(globalUser.userFirstName + "  " +  globalUser.userLastName);
     
        }


