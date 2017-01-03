    //Profile Edit -> Update Profile
$('#btn-update-profile').on('click', function () {
    var sFtName = $('#profile-edit-first-name').val();
    var sLName = $('#profile-edit-last-name').val();
    var sPLayerType = $('#profile-edit-job-type').val();
    var sAvail = $('#optionsRadios').val();
    var sProfileTxt = $('#profile-edit-profile').val();

var sLink = "assets/api/api-update-profile.php?userFirstName="+sFtName+"&userLastName="+sLName+"&playerType="+sPLayerType+"&avail="+sAvail+"&userProfileTxt="+sProfileTxt;

    $.ajax({
        "url": sLink,
        "method":"get",
        "dataType": "JSON",
        "cache": false
    }).done(function(jUser) {
        console.log(jUser);

    }).fail(function(jFail) {
        console.log(jFail);
     });
    })


        //Account Edit -> Update Pass + Username
    $('#btn-update-password').on('click', function() {
        var sOldPass = $('#account-edit-old-password').val();
        var sNewPass= $('#account-edit-new-password').val(); 
        var sNewPass2 = $('#account-edit-confirm-new-password').val();

        var link = "assets/api/api-account-edit.php?userPassword="+sOldPass+"&userPasswordNew="+sNewPass; 

        $.ajax({
            "url": link,
            "method":"get",
            "dataType":"JSON",
            "cache": false 
        }).done(function(jPass) {
            console.log(jPass);
            swal("Good job!", "You clicked the button!", "success")

    }).fail(function(jFail) {
            console.log(jFail);
            swal("Good job!", "You clicked the button!", "Failed")
        });
    })

    $('#btn-change-username').on('click', function() {
        var sUserName = $('#account-edit-new-username').val();
        
        var link2 = "assets/api/api-account-edit.php?userName="+sUserName;
        $.ajax({
            "url":link2,
            "method":"get",
            "dataType": "JSON",
            "cache": false 
        }).done(function(username) {
              swal("Good job!", "You clicked the button!", "success")
        })
    })
