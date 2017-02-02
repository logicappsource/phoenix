//Hide all wdw on load
$(document).ready(function () {
    $(".wdw").hide(); 
    $("#wdw-login").show();
});


$("#btn-coinflipit").click(function() {
    hideAllWindowsShowOne("wdw-coinflipit");
});


$("#btn-live-schedule").click(function() {
    hideAllWindowsShowOne("wdw-live-schedule");
});

$("#btn-online-schedule").click(function() {
    hideAllWindowsShowOne("wdw-online-schedule");
});

$("#btn-account").click(function() {
    hideAllWindowsShowOne("wdw-account");
});

$("#btn-main").click(function() {
    hideAllWindowsShowOne("wdw-main");
});

$("#btn-faq").click(function() {
    hideAllWindowsShowOne("wdw-faq");
});

$("#btn-edit-profile").click(function(){
    hideAllWindowsShowOne("wdw-edit-profile");
});

$("#btn-account-edit").click(function() {
    hideAllWindowsShowOne("wdw-account-edit");
});

$("#btn-billing-edit").click(function() {
    hideAllWindowsShowOne("wdw-billing-edit");
});

$("#btn-settings-edit").click(function() {
    hideAllWindowsShowOne("wdw-settings-edit");
});

$("#btn-session-edit").click(function() {
    hideAllWindowsShowOne("wdw-session-edit");
});


$("#btn-logout").click(function() {
    hideAllWindowsShowOne("wdw-logout");
});

function hideAllWindowsShowOne(sWindowId) {
        $(".wdw").fadeOut(500);
        $("#"+ sWindowId).fadeIn(500);
}