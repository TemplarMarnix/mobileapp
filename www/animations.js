$(document).ready(function(){
    $(".settings-closed").click(function(){
        $(".settings-menu").addClass("opened-settings");
    });
    $(".settings-open").click(function(){
        $(".settings-menu").removeClass("opened-settings");
    });
});