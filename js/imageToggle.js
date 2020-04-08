$(function () {
	$("img#content").on("click", function() {
		$(this).after("<div id='grey'><img class='big' src='" + $(this).attr("src") + "' /></div>");

		$("img.big").on("click", function() {
			$(this).parent().remove();
		});
	});
});