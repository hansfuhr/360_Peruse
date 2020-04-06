postAuthor = $("#comments:first-child").attr("data-author");
if (typeof postAuthor === "undefined")
	postAuthor = "";

postTimeCode = $("#comments:first-child").attr("data-timeCode");
if (typeof postTimeCode === "undefined")
	postTimeCode = "";

$.ajax("/loadComments.php?postAuthor="+postAuthor+"&postTimeCode="+postTimeCode, {success: function (result) {
	$("#comments").append(result);
}});


