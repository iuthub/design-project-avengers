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
		$('.nav-i').slideToggle();
		$('.fa-bars').css({position: 'absolute', zIndex: "1"});
	});
});
// $(document).ready(function(){
//     $(".fa-bars").click(function(){
//         $(".nav-i").slideUp("slow");
//     });
// });








//    w3School source;
var x, i, j, selElmnt, a, b, c;
/*look for any elements with the class "custom-select":*/
x = document.getElementsByClassName("custom-select");
for (i = 0; i < x.length; i++) {
  selElmnt = x[i].getElementsByTagName("select")[0];
  /*for each element, create a new DIV that will act as the selected item:*/
  a = document.createElement("DIV");
  a.setAttribute("class", "select-selected");
  a.innerHTML = selElmnt.options[selElmnt.selectedIndex].innerHTML;
  x[i].appendChild(a);
  /*for each element, create a new DIV that will contain the option list:*/
  b = document.createElement("DIV");
  b.setAttribute("class", "select-items select-hide");
  for (j = 0; j < selElmnt.length; j++) {
    /*for each option in the original select element,
    create a new DIV that will act as an option item:*/
    c = document.createElement("DIV");
    c.innerHTML = selElmnt.options[j].innerHTML;
    c.addEventListener("click", function(e) {
        /*when an item is clicked, update the original select box,
        and the selected item:*/
        var y, i, k, s, h;
        s = this.parentNode.parentNode.getElementsByTagName("select")[0];
        h = this.parentNode.previousSibling;
        for (i = 0; i < s.length; i++) {
          if (s.options[i].innerHTML == this.innerHTML) {
            s.selectedIndex = i;
            h.innerHTML = this.innerHTML;
            y = this.parentNode.getElementsByClassName("same-as-selected");
            for (k = 0; k < y.length; k++) {
              y[k].removeAttribute("class");
            }
            this.setAttribute("class", "same-as-selected");
            break;
          }
        }
        h.click();
    });
    b.appendChild(c);
  }
  x[i].appendChild(b);
  a.addEventListener("click", function(e) {
      /*when the select box is clicked, close any other select boxes,
      and open/close the current select box:*/
      e.stopPropagation();
      closeAllSelect(this);
      this.nextSibling.classList.toggle("select-hide");
      this.classList.toggle("select-arrow-active");
    });
}
function closeAllSelect(elmnt) {
  /*a function that will close all select boxes in the document,
  except the current select box:*/
  var x, y, i, arrNo = [];
  x = document.getElementsByClassName("select-items");
  y = document.getElementsByClassName("select-selected");
  for (i = 0; i < y.length; i++) {
    if (elmnt == y[i]) {
      arrNo.push(i)
    } else {
      y[i].classList.remove("select-arrow-active");
    }
  }
  for (i = 0; i < x.length; i++) {
    if (arrNo.indexOf(i)) {
      x[i].classList.add("select-hide");
    }
  }
}
/*if the user clicks anywhere outside the select box,
then close all select boxes:*/
document.addEventListener("click", closeAllSelect);

