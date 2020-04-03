$(function () {
	getInput();
});

function getInput() {
	var chkText = document.getElementById("text");
	var chkImage = document.getElementById("image");
	var input = document.getElementById("post-input");
	input.innerHTML = (chkText.checked)? "<textarea rows=\"4\" cols=\"50\" name=\"content\" placeholder='Enter text here...'></textarea><br />" : "Select an image: <br /><input type=\"file\" name=\"image\" accept=\"image/png, image/jpeg\"><br />";
};

