function signup_validate(){
	var x = document.forms["signup_form"]["f_name"].value;
  	if (x == "") {
    	alert("Full Name field is empty!");
    	return false;
  	}

  	var y = document.forms["signup_form"]["email"].value;
  	if (y == "") {
    	alert("Email field is empty!");
    	return false;
  	}

  	var z = document.forms["signup_form"]["u_name"].value;
  	if (z == "") {
    	alert("Username field is empty!");
    	return false;
  	}

  	var g = document.forms["signup_form"]["gender"].value;
  	if (g == 0) {
    	alert("Please select your gender!");
    	return false;
  	}

  	var p1 = document.forms["signup_form"]["password1"].value;
  	if(p1==""){
		alert("Please enter password!");
		return false;
	}
  	var p2 = document.forms["signup_form"]["password2"].value;
  	if(p1 == p2){

  	}
  	else{
  		alert("Password didn't match, try again!");
  		return false;
  	}
}

function signin_validate(){
	var x = document.forms["signin_form"]["ur_name"].value;
	if(x==""){
		alert("Username or Password field must be empty!");
		return false;
	}
	var y = document.forms["signin_form"]["password"].value;
	if(y==""){
		alert("Username or Password field must be empty!");
		return false;
	}
}