// $(function(){
// 	$('.fa-search').hover{
// 		function(){
// 			$('ul.sub').slideDown(500);
// 		};

// 		function(){
// 			$('ul.sub',this).slideUp(300);
// 		};
// 	}
// });


$(document).ready(function(){

	// var click=1;


	// 	$(".border").click(function(){
	// 		click=click+1;
	// 	$(this).css("border","3px solid #3DB13D");
		
	// });


	// $(".border").click(function(){
	// 	if(click%2==0){
	// 		$(this).css("border","3px solid #fff");
	// 		click=0;
	// 	}
	// });

	$('.border').click(function(){
		if($(this).hasClass('border-on')){
			$(this).removeClass('border-on');
		}else{
			$(this).addClass('border-on');
		}
	});

});











$(document).ready(function(){
if( $(window).width() > 767 ){
	$('.fa-tv, .fa-film, .fa-desktop, .fa-ticket, .fa-clock-o').show();
	$('.icons i, nav.nav').show();
	$('li.ham i').hide();

}else{
		$('.fa-bars').css({position: 'absolute', zIndex: "1"});
		$('li.ham i').show();
		$('.icons i, ul.sub').hide();
		$('.fa-tv, .fa-film, .fa-desktop, .fa-ticket, .fa-clock-o').hide();
}

$(window).on('resize',function(){
		if( $(window).width() > 767 ){
		$('.nav-i').css({display: 'block'});
		$('.fa-tv, .fa-film, .fa-desktop, .fa-ticket, .fa-clock-o').show();

			$('.icons i, nav.nav').show();
			
			$('li.ham i').hide();


		}else{
				$('.nav-i').css({display: 'none'});
				$('li.ham i').show();
				$('.icons i, ul.sub').hide();
				$('.fa-tv, .fa-film, .fa-desktop, .fa-ticket, .fa-clock-o').hide();
				
		}
		
	});

		$('.fa-search, .ma').click(function(){
				$('ul.sub').toggle(500);
				
		});
});

$(document).ready(function(){

	$(".fa-bars").click(function(){
		$('.nav-i').stop(true).slideToggle();
		$('.fa-bars').css({position: 'absolute', zIndex: "1"});
	});
});
// $(document).ready(function(){
//     $(".fa-bars").click(function(){
//         $(".nav-i").slideUp("slow");
//     });
// });










