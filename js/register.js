
$(document).ready(function() {
    
   $(".Coach").click(function() {
       $.post('classes/register.php',{type:"coach",selection:"coach"},function(){
           window.location.replace("login.html");
       });
   });
    
});

