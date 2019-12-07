$(document).ready(function(){
    $(".settings-closed").click(function(){
        $(".settings-options").addClass("opened-settings");
    });
    $(".settings-open").click(function(){
        $(".settings-menu").removeClass("opened-settings");
    });
});