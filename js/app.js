// app.js

$(document).ready(function() {
   
    $(function(){
    $(".menu-item-has-children").hover(function(){
             $(this).children("ul").stop().fadeIn("slow");
       },
       function(){
             $(this).children("ul").stop().fadeOut("slow");   
    })
})
});
