$(document).on("scroll", function(){
    if($(document).scrollTop() > 100){
        $("nav").addClass("expand"); 
        $("img.log").addClass("log-expand");
    }
    else{
        $("nav").removeClass("expand");
        $("img.log").removeClass("log-expand");
    }

})