$(document).ready(function(){
    function swapstyles(){
        if($("#style_sheet").attr("href")=="/css/geo.min.css"){
            $("#style_sheet").attr("href","/css/bootstrap.min.css");
            $("#swapstyles").html("More Beautiful Layout");
        } else{
            $("#style_sheet").attr("href","/css/geo.min.css");
            $("#swapstyles").html("Less Beautiful Layout");
        }
    }
    $("#swapstyles").click(swapstyles);
    $("[name='anonymous']").bootstrapSwitch({
        state: false,
        onText: "Anonymous",
        offText: $("[name='anonymous']").attr("data-user"),
        offColor: "info",
        onColor: "default"
    });
});
