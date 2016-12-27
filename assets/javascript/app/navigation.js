//Hide all wdw on load
$(document).ready(function () {
    $(".wdw").hide(); 
    $("#wdw-login").show();


 
});


$("#btn-account").click(function() {
    hideAllWindowsShowOne("wdw-account");
    console.log("tresting");
});

$("#btn-main").click(function() {
    hideAllWindowsShowOne("wdw-main");
});

$("#btn-faq").click(function() {
    hideAllWindowsShowOne("wdw-faq");
});

$("#btn-profile").click(function(){
    hideAllWindowsShowOne("wdw-profile");
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