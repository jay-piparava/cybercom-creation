document.getElementById('form2').disabled = true;
document.getElementById('accept').innerHTML = 'You must accept conditions..';
var name = false;
var pass = false;
var add = false;
var accept = false;

//check filed are empty or not
function requiredfiled(id,filedname)
{
	var value = document.getElementById(filedname).value;
	if (value == "" ) {
		document.getElementById(id).innerHTML = '* This filed is required';
		if (filedname == 'name') {
			name = false;
		}
		if (filedname == 'password') {
			pass = false;
		}
		if (filedname == 'address') {
			add = false;
		}
		btninvisible();

	} else {
		document.getElementById(id).innerHTML = '';
		if (filedname == 'name') {
			name = true;
		}
		if (filedname == 'password') {
			pass = true;
		}
		if (filedname == 'address') {
			add = true;
		}
		buttonshow();
	}
}

//checkbox for argument
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
function buttonshow(){
	if (name && pass && add && accept) {
		document.getElementById('form2').disabled = false;
	} 
}
function btninvisible(){
	document.getElementById('form2').disabled = true;
}