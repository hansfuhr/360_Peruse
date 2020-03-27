window.onload = function () {
	console.log($("#secondary").offset().top);
	// $("#secondary").css("top", ($("#secondary").offset().top + $("footer").height() - $("#secondary").height() + $("header").height() - $("footer").position().top) + "px");
	$("#secondary").css("top", ($("footer").height() + $("#secondary").offset().top - $("footer").offset().top) + "px");
	console.log($("#secondary").css("top"));
}