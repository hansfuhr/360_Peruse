var offset = 0;

author = $("#feed").attr("data-author");
if (typeof author === "undefined")
	author = "";

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
	$.ajax("/loadFeed.php?offset=" + offset + "&author=" + author, {success: function (result) {
		$("main").append(result);
	}});
	offset += 10;

	// let e;
	// for (let i = 1; i <= offset; i++) {
	// 	// document.getElementsByClassName("post-contents").item(document.getElementsByClassName("post-contents").length-i)
	// 	e = $(".post-contents *:first"); //second not first child
	// 	// selector is incorrect
	// 	console.log(e.length);
	// 	console.log(e.innerHTML);
	// 	console.log(e.scrollHeight);
	// 	console.log(e.clientHeight);
	// 	if (e.scrollHeight > e.clientHeight)
	// 		e.parentElement.after("<div class='gradient'></div>");
	// }
}
