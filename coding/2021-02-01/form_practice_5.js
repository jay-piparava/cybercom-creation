document.getElementById('form5').disabled = true;
var email = false;
var pass = false;

//check for required filed
function requiredfiled(id,filedname)
{
	var value = document.getElementById(filedname).value;
	if (value == "" ) {
		document.getElementById(id).innerHTML = ' * This filed is required';
		if (filedname == 'email') {
			name = false;
		}
		if (filedname == 'pass') {
			email = false;
		}
		btninvisible();

	} else {
		document.getElementById(id).innerHTML = '';
		if (filedname == 'pass') {
			pass = true;
		}
		if (filedname == 'email') {
			const re = /^(([^<>()[\]\\.,;:\s@"]+(\.[^<>()[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    		if(re.test(String(value).toLowerCase())){
    			email = true;	
    		} else {
    			document.getElementById(id).innerHTML = 'invalid email...';
    		}	
		}
		buttonshow();
	}
}

//button for a visiblity
function buttonshow(){
	if (pass && email) {
		document.getElementById('form5').disabled = false;
	} 
}
function btninvisible(){
	document.getElementById('form5').disabled = true;

}

