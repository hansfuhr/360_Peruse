window.onload = function() {
	$("#txt-input").click(function () {
		window.location.href = "/createPost.php?type=txt";
	});
	$("#img-icon").click(function () {
		window.location.href = "/createPost.php?type=img";
	});
};