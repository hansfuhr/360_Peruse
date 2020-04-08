$(function() {
	$("#search-bar").on("keydown", function(event) {
		if (event.key === "Enter" && $(this).val() !== "") {
			window.location.href = "/search/" + $(this).val();
		}
	});
});