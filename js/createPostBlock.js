$(function() {
	$("#txt-input").on("click", function () {
		window.location.href = "/createPost.php?type=txt";
	});
	$("#img-icon").on("click", function () {
		window.location.href = "/createPost.php?type=img";
	});
});