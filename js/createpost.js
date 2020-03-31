$(function () {
	$("#text").click();
});

function getInput() {
	var chkText = document.getElementById("text");
	var chkImage = document.getElementById("image");
	var input = document.getElementById("post-input");
	input.innerHTML = chkText.checked ? "<textarea rows=\"4\" cols=\"50\" name=\"posttext\">Enter text here...</textarea><br>" : "Select an image: <br><input type=\"file\" name=\"postimg\" accept=\"image/png, image/jpeg\"><br></br>";
};

