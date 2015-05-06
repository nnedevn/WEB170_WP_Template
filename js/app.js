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

$(document).ready(function(){
console.log('yai');

$('.menu-item-has-children li').hover(
                                      function(){
                                      	console.log('hover');
                                      	$('.sub-menu', this).stop().slideDown();
                                      });	
});
