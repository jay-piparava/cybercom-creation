document.getElementById('form4').disabled = true;
var name = false;
var email = false;
var subject = false;
var message = false;

//check for required filed
function requiredfiled(id,filedname)
{
	var value = document.getElementById(filedname).value;
	if (value == "" ) {
		document.getElementById(id).innerHTML = ' * This filed is required';
		if (filedname == 'name') {
			name = false;
		}
		if (filedname == 'email') {
			email = false;
		}
		if (filedname == 'sub') {
			subject = false;
		}
		if (filedname == 'msg') {
			message = false;
		}
		btninvisible();

	} else {
		document.getElementById(id).innerHTML = '';
		if (filedname == 'name') {
			name = true;
		}
		if (filedname == 'sub') {
			subject = true;
		}
		if (filedname == 'email') {
			const re = /^(([^<>()[\]\\.,;:\s@"]+(\.[^<>()[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    		if(re.test(String(value).toLowerCase())){
    			email = true;	
    		} else {
    			document.getElementById(id).innerHTML = 'invalid email...';
    		}
    		
		}
		if (filedname == 'msg') {
			message = true;
		}
		buttonshow();
	}
}

//button for a visiblity
function buttonshow(){
	if (name && email && subject && message) {
		document.getElementById('form4').disabled = false;
	} 
}
function btninvisible(){
	document.getElementById('form4').disabled = true;

}
