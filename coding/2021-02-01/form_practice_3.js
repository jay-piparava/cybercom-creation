document.getElementById('form3').disabled = true;
var fname = false;
var lname = false;
var email = false;
var phone = false;
var pass = false;
var cpass = false;
var match = false;

//function for requird filed
function requiredfiled(id,filedname)
{
	var value = document.getElementById(filedname).value;
	if (value == "" ) {
		document.getElementById(id).innerHTML = '* This filed is required';
		if (filedname == 'name') {
			fname = false;
		}
		if (filedname == 'lastname') {
			lname = false;
		}
		if (filedname == 'email') {
			email = false;
		}
		if (filedname == 'phone') {
			phone = false;
		}
		if (filedname == 'password') {
			pass = false;
		}
		if (filedname == 'rpassword') {
			cpass = false;
		}
		btninvisible();

	} else {
		document.getElementById(id).innerHTML = '';
		if (filedname == 'name') {
			fname = true;
		}
		if (filedname == 'lastname') {
			lname = true;
		}
		if (filedname == 'email') {
			const re = /^(([^<>()[\]\\.,;:\s@"]+(\.[^<>()[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    		if(re.test(String(value).toLowerCase())){
    			email = true;	
    		} else {
    			document.getElementById(id).innerHTML = 'invalid email...';
    		}
    		
		}
		if (filedname == 'phone') {
			const re = /^([+]\d{2}[ ])?\d{10}$/;
			if (re.test(String(value))) {
				phone = true;	
			} else {
				document.getElementById(id).innerHTML = 'number in formate +91 1234567890';
			}
			
		}
		if (filedname == 'password') {
			pass = true;
		}
		if (filedname == 'rpassword') {
			var npass = document.getElementById('password').value;
			if (npass == value) {
				cpass = true;	
			} else {
				document.getElementById(id).innerHTML = 'password not match...';
			}
		}
		buttonshow();
	}
}
//agree check
function acceptcondition(checkbox){
	if (checkbox.checked) {
		accept = true;
 		buttonshow();
	}
	else {
		accept = false;
		btninvisible();
	}
}

//button for a visiblity
function buttonshow(){
	if (fname && lname && email && phone && pass && cpass && accept) {
		document.getElementById('form3').disabled = false;
	} 
}
function btninvisible(){
	document.getElementById('form3').disabled = true;
}
