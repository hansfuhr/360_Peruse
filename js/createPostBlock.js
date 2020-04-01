$(function() {
	$("#txt-input").on("click", function () {
		window.location.href = "/createPost.php?postType=txt";
	});
	$("#img-icon").on("click", function () {
		window.location.href = "/createPost.php?postType=img";
	});
});