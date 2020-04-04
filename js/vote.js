function upvote(element, author, timeCode) {
	$.ajax("vote.php?author=" + author + "&timeCode=" + timeCode + "&newVote=true");
	$(element).toggleClass("visited");
	$(element).parent().find(".dv").removeClass("visited");
}

function downvote(element, author, timeCode) {
	$.ajax("vote.php?author=" + author + "&timeCode=" + timeCode + "&newVote=false");
	$(element).toggleClass("visited");
	$(element).parent().find(".uv").removeClass("visited");
}