$(function () {
	$("#commentInput").on("keydown paste cut", function () {
		console.log("css height: " + $(this).css("height").substring(0, $(this).css("height").length-2));
		console.log("scroll height: " + this.scrollHeight);

		$(this).css("height", 0);
		if ($(this).css("height").substring(0, $(this).css("height").length-2) <= this.scrollHeight) {
			$(this).css("height", this.scrollHeight-7);
		}
	});
});