const signUpButton = document.getElementById('signUp');
const signInButton = document.getElementById('signIn');
const container = document.getElementById('container');

signUpButton.addEventListener('click', () => {
	container.classList.add("right-panel-active");
});

signInButton.addEventListener('click', () => {
	container.classList.remove("right-panel-active");
});

function validateForm() {
  var x = document.forms["myForm"]["email"].value;
  var y = document.forms["myForm"]["pass"].value;
  if (x == "" && x.length == 4) {
    alert("Username must be filled out");
    return false;
  }

  if (y == "") {
    alert("Password must be filled out");
    return false;
  }
}