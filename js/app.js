// app.js

//THis is one version that somewhat works. 

// $(document).ready(function() {
//     console.log("ready!");

//     $(".menu-item-has-children")
//         .mouseenter(function() {
//           console.log('enter');

//           $('#main-menu-items > *').addClass('show');

//         })
//         .mouseleave(function() {
//             console.log('leave');
//         });
// });

$(document).ready(function() {
    console.log('yai');

    $(function(){
    $(".menu-item-has-children").hover(function(){
             $(this).children("ul").stop().fadeIn("slow");
       },
       function(){
             $(this).children("ul").stop().fadeOut("slow");   
    })
})
});
