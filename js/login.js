$(document).ready(function() {

    $("#loginCoach").click(function() {
       
       $("#type").val("coach");
       $(".login").fadeIn(1000);
       $(".choice").fadeOut(1000);
       
    });
    
    $("#loginStudent").click(function() {
        $("#type").val("student");
       $(".login").fadeIn(1000);
       $(".choice").fadeOut(1000);
    });
    
});