$(document).ready(function(){
    $("#fname").focus(function(){
        $(this).css("background-color", "#cccccc");
    });
});

$("submit").click(function(e){
    e.preventDefault();
    $(".wrap").hide();
});