window.onload = function () {
	// console.log($("#secondary").offset().top);
	// $("#secondary").css("top", ($("#secondary").offset().top + $("footer").height() - $("#secondary").height() + $("header").height() - $("footer").position().top) + "px");
	$("#secondary").css("top", ("calc(" + ($("#secondary").offset().top + $("footer").outerHeight(true) - $("footer").offset().top))+ "px - 0.5em)");
	// console.log($("#secondary").css("top"));
}