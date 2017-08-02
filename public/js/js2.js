$(document).ready(function() {

	$(document).scroll(function(){
  	var top = $(window).scrollTop();

	  console.log(top)
		if(top>800){
			$('#page-scroll').addClass('page-scroll-top');
		}
		else{
			$('#page-scroll').removeClass('page-scroll-top');
		}

		if(top>750){
	   	$('#fecha').addClass('fecha-fixed');
	   	$('#menu-lateral').addClass('menu-lateral-fixed');
	   	$('#sede').addClass('body-body');
		}
		else{
			$('#fecha').removeClass('fecha-fixed');
	   	$('#menu-lateral').removeClass('menu-lateral-fixed');
      $('#sede').removeClass('body-body');
		}
		if(top>20){
	   	$('#menu-lateral2').addClass('menu-lateral-fixed2');
		}
		else{
	   	$('#menu-lateral2').removeClass('menu-lateral-fixed2');
		}

	});
});
