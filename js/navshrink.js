// $(window).scroll(function(){
//     if($(document).scrollTop()>10){
//         $('nav').addClass('shrink');
//     }
//     else{
//         $('nav').removeClass('shrink');
//     }
// });


// //or

// // const nav = document.querySelector('nav');

// // window.addEventListener('scroll', function(){
// //     const offset = window.pageYOffset;

// //     if(offset>75){
// //         nav.classList.add('scroll');
// //     }
// //     else{
// //         nav.classList.remove('scroll');
// //     }
// // });

$(document).on("scroll", function(){
    if($(document).scrollTop() > 100){
        $("nav").addClass("shrink"); 
        $(".middle li a").addClass("shrink-black");
    }
    else{
        $("nav").removeClass("shrink");
        $(".middle li a").removeClass("shrink-black");
    }

})