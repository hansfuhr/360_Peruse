$(document).ready(function(){
    $("#text").onclick = function() {
		console.log("click");
		$("#post-input").html(
			"<textarea rows=\"4\" cols=\"50\" name=\"posttext\">Enter text here...</textarea><br>"
		);
	};
	
	$("#image").click(function() {
		$("#post-input").html(
			"Select an image: <br><input type=\"file\" name=\"postimg\" accept=\"image/png, image/jpeg\"><br></br>"
		);
	});
});