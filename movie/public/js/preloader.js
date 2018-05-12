$(document).ready(function(){
    // Activate Carousel
    $("#myCarousel").carousel({interval: 6000,  wrap: true, pause: "hover"});
    
    // Enable Carousel Indicators
    $(".item1").click(function(){
        $("#myCarousel").carousel(0);
    });
    $(".item2").click(function(){
        $("#myCarousel").carousel(1);
    });
    $(".item3").click(function(){
        $("#myCarousel").carousel(2);
    });
    // Enable Carousel Controls
    $(".left").click(function(){	
        $("#myCarousel").carousel("prev");
    });
    $(".right").click(function(){
        $("#myCarousel").carousel("next");
    });
});


// $("#toggle").click(function(){
//         $(this).toggleClass('on');
//         $("#resize").toggleClass("active");
//     });

var modal=document.getElementById('id01');
window.onclick=function(event){
    if (event.target == modal) {
        modal.style.display = "none";
    }
}

//nav slide down

$(document).ready(function(){

    window.setInterval(function(){
    // $("div .active .text").fadeIn(3000);
        if($(".carousel-inner .active").length == 0){
            $(".carousel-inner .item").find(".text").fadeOut();
            console.log("lol");
        }else{
            $(".carousel-inner .active").find(".text").fadeIn(3000);
        }
    }, 1);
});