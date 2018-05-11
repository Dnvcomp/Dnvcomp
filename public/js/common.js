$(window).scroll(function() {
	var st = $(this).scrollTop();

	$(".header_text").css({
		"transform" : "translate(0%, " + st + "%"
	});

	$(".sect_2 img").css({
		"transform" : "translate(0%, " + st  / 20 + "%"
	});
});