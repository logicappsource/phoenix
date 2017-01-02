$('#btn-update-profile').on('click', function () {
console.log("testing");
var sFtName = $('#profile-edit-first-name').val();
var sLName = $('#profile-edit-last-name').val();
var sPLayerType = $('#profile-edit-job-type').val();
var sAvail = $('#optionsRadios').val();
var sProfileTxt = $('#profile-edit-profile').val();

console.log(sProfileTxt);
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


