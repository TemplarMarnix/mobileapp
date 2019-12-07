$(document).ready(function(){
    $(".settings-closed").click(function(){
        $(".settings-menu").addClass("opened-settings");
    });
    $(".settings-open").click(function(){
        $(".settings-menu").removeClass("opened-settings");
    });

    $(".options-closed").click(function(){
        $(".options-menu").addClass("opened-options");
    });
    $(".options-open").click(function(){
        $(".options-menu").removeClass("opened-options");
    });
});