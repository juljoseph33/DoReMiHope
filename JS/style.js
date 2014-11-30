$(document).ready(function() {
	$(".show_hide").click(function () {
		var num = $(this).attr('id');
		$('.'+num).toggle();
		if ($('.'+num).is(':visible')) {
			$('#'+num).text(' Read Less');
		}
		else {
			$('#'+num).text(' ...Read More');
		}
    });
 //    var width = $(window).width()/2 + ' px';
 //    var height = $(window).height()/2;
 //    $(".repeat").css({ 
 //     "background-image": "url(../Img/logo.png)",
 //     "background-size": "100%"
	// });
	$.backstretch("Img/logo.png");
});