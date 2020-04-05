function upvote(element, author, timeCode) {
	$.ajax("vote.php?author=" + author + "&timeCode=" + timeCode + "&newVote=UP");
	$(element).toggleClass("visited");
	$(element).parent().find(".dv").removeClass("visited");
}

function downvote(element, author, timeCode) {
	$.ajax("vote.php?author=" + author + "&timeCode=" + timeCode + "&newVote=DN");
	$(element).toggleClass("visited");
	$(element).parent().find(".uv").removeClass("visited");
}