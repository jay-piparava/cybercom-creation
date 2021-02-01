document.getElementById('form1').disabled = true;
var namechk = false;
var passchk = false;
var addchk = false;
var genchk = false;
var filechk = false;
//check for name
function namecheck(){
	var name = document.forms['myform']['name'].value;
	if (name == "" ) {
		document.getElementById('nameerror').innerHTML = 'This filed is required';
		namechk = false;
		btnvisible();	
	} else {
		document.getElementById('nameerror').innerHTML = '';
		namechk = true;
		btnvisible();
	}
	
}
//check for password
function passcheck(){
	var pass = document.forms['myform']['password'].value;
	if (pass == "" ) {
		document.getElementById('passworderror').innerHTML = 'This filed is required';	
		passchk = false;
	} else {
		passchk = true;
		document.getElementById('passworderror').innerHTML = '';
		btnvisible();
	}
}
//check for address
function addcheck(){
	var address = document.forms['myform']['add'].value;
	if (address == "" ) {
		document.getElementById('addresserror').innerHTML = 'This filed is required';
		addchk = false;
		btninvisible();	
	} else {
		addchk = true;
		document.getElementById('addresserror').innerHTML = '';
		btnvisible();
	}
}
//check for a Radio button
function gencheck() {
	if (document.getElementById('female').checked) {
		document.getElementById('gendererror').innerHTML = '';
		genchk = true;
		btnvisible();
	} else if(document.getElementById('male').checked) {
		genchk = true;
		document.getElementById('gendererror').innerHTML = '';
		btnvisible();
	} else {
		document.getElementById('gendererror').innerHTML = 'Choose any one...';
	}
}
//check for file
function filecheck(){
	var file = document.forms['myform']['file'].value;
	if (file == "" ) {
		document.getElementById('fileerror').innerHTML = 'This filed is required';
		filechk = false;
		btninvisible();	
	} else {
		document.getElementById('fileerror').innerHTML = '';
		filechk = true;
		btnvisible();
	}	
	
}

//visible a button
function btnvisible(){
	if (namechk && passchk && addchk && genchk && filechk) {
		document.getElementById('form1').disabled = false;
	}
}

function btninvisible(){
	document.getElementById('form2').disabled = true;
}
