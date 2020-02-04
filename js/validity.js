const email = document.getElementById("mail");

email.addEventListener("input", function (event) {
  if (email.validity.typeMismatch) {
	email.setCustomValidity("Invalid email address");
  } else {
    email.setCustomValidity("");
  }
});



function checkpass(){
	if (document.getElementById('pass').value ==
	document.getElementById('confirm').value) {
	document.getElementById('pass').style.backgroundColor = '#84FF9D';
	document.getElementById('confirm').style.backgroundColor = '#84FF9D';
} 	else {
		document.getElementById('pass').style.backgroundColor = '#FF8B84';
		document.getElementById('confirm').style.backgroundColor = '#FF8B84';
}
  }
  
