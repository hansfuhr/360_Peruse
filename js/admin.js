$(function () {
	$.ajax("/adminCheck.php", {success: function(result) {
		if (result == 1) {
			$(".reply").each(function(index, element) {
				$(element).append("<a style='position: absolute; top: 0; right: 0; user-select: none; cursor: pointer;' onclick='deleteComment(this)'>x</a>");
			});
			$(".post").each(function(index, element) {
				$(element).append("<a style='position: absolute; top: 0; right: 5px; user-select: none; cursor: pointer;' onclick='deletePost(this)'>x</a>");
			});
		}
	}});
});

function deleteComment(element) {
	if (confirm("Are you sure you want to delete this comment? This cannot be undone!")) {
		let data = $(element).parent().attr("id").split("-");
		let author = data[0];
		let timeCode = data[1];
		// let timePosted = timeCode.replace(/(\d{4})(\d{2})(\d{2})(\d{2})(\d{2})(\d{2})/, "$1-$2-$3 $4:$5:$6");

		$.ajax("/delete.php?type=comment&author=" + author + "&timeCode=" + timeCode, {success: function (result) {
			// console.log(result);
			window.location.reload();
		}});
	}
}

function deletePost(element) {
	if (confirm("Are you sure you want to delete this post? This cannot be undone!")) {
		let data = $(element).parent().attr("id").split("-");
		let author = data[0];
		let timeCode = data[1];
		// let timePosted = timeCode.replace(/(\d{4})(\d{2})(\d{2})(\d{2})(\d{2})(\d{2})/, "$1-$2-$3 $4:$5:$6");

		$.ajax("/delete.php?type=post&author=" + author + "&timeCode=" + timeCode, {success: function () {
			window.location.href = "/";
		}});
	}
}