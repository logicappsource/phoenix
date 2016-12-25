//Hide all wdw on load
$(document).ready(function () {
    $(".wdw").hide(); 
});



$("#btn-main").click(function() {
    hideAllWindowsShowOne("wdw-main");
});


function hideAllWindowsShowOne(sWindowId) {
        $(".wdw").fadeOut(500);
        $("#"+ sWindowId).fadeIn(500);
}