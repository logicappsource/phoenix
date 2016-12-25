//Hide all wdw on load
$(document).ready(function () {
    $(".wdw").hide(); 
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

function hideAllWindowsShowOne(sWindowId) {
        $(".wdw").fadeOut(500);
        $("#"+ sWindowId).fadeIn(500);
}