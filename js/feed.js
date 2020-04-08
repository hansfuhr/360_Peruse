var offset = 0;

args = "";

author = $("#feed").attr("data-author");
if (author !== undefined)
	args += "&author=" + author;

searchTerm = $("#feed").attr("data-searchTerm");
if (searchTerm !== undefined)
	args += "&searchTerm=" + searchTerm;

// load some posts to start
loadMore();

// on scroll check if bottom of page is near then load more if true
window.onscroll = function (event) {
	if ($(window).scrollTop() + $(window).height >= $(document).height()-100) {
		loadMore();
	}
};

// function to load posts in to feed
function loadMore() {
	$.ajax("/loadFeed.php?offset=" + offset + args, {success: function (result) {
		$("main").append(result);
		if (searchTerm !== undefined) {
			let selected = $(".post .post-contents h3, .post .post-contents p, .post p a");
			selected.each(function (index, element) {
				let newHtml = $(element).html().replace(new RegExp(searchTerm, "gi"), function (x) {
					return "<span class='searchTerm'>" + x + "</span>";
				});
				$(element).html(newHtml);
			});
		}
	}});
	offset += 10;
}
