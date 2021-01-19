//get values fron a html file
// var name = document.getElementById('name').value;
// console.log(name);
function myfunction(){
	var sname = document.getElementById('name').value;
	var semail = document.getElementById('email').value;
	var bdate = document.getElementById('dob').value;
	 var person = {
		name : sname,
		email : semail,
		birthdate : bdate
	};
	localStorage.setItem('sname',person['name']);
	localStorage.setItem('semail',person['email']);
	localStorage.setItem('bdate',person['birthdate']);
	
}