var offset = 0;

// load some posts to start
loadMore();

// on scroll check if bottom of page is near then load more if true
window.onscroll = function (event) {
	if ($(window).scrollTop() + $(window).height() >= $(document).height()-100) {
		loadMore();
	}
};

// function to load posts in to feed
function loadMore() {
	// if(window.XMLHttpRequest) {
	// 	xmlhttp = new XMLHttpRequest();
	// }
	// xmlhttp.onreadystatechange = function() {
	// 	if (this.readyState == 4 && this.status == 200) {
	// 		$("main").append(this.responseText);
	// 	}
	// };
	//
	// xmlhttp.open("GET", "loadFeed.php?offset=" + offset, true);
	// xmlhttp.send();
	$.ajax("loadFeed.php?offset=" + offset);

	offset += 10;
}
