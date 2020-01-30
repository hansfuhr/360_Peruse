window.onscroll = function() {myFunction()};
var footer = document.getElementById("myFooter");
var sticky = footer.offsetTop;

function myFunction() {
	if(window.pageYOffset>sticky){
		footer.classList.add("sticky");
	} else {
		footer.classList.remove("sticky");
	}
}