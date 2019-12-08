$(document).ready(function(){
    $(".fa-cog").click(function(){
        if($(".settings-menu").hasClass("opened-settings")) {
            $(".settings-menu").removeClass("opened-settings");
        } else {
            $(".settings-menu").addClass("opened-settings");
        }
        if($(".options-menu").hasClass("opened-options")) {
            $(".options-menu").removeClass("opened-options");
        }
    });
    $(".fa-bars").click(function(){
        if($(".options-menu").hasClass("opened-options")) {
            $(".options-menu").removeClass("opened-options");
        } else {
            $(".options-menu").addClass("opened-options");
        }
        if($(".settings-menu").hasClass("opened-settings")) {
            $(".settings-menu").removeClass("opened-settings");
        }
    });
});