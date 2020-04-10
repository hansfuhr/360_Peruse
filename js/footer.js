window.onload = function () {
	$("#secondary").css("top", "calc(" + ($("#secondary").offset().top + $("footer").outerHeight(true) - $("footer").offset().top)+ "px)");
}