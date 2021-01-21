function mylogin()
{
	var array = localStorage.getItem('admin');
	var record = JSON.parse(array);
	console.log(record);
	var email = document.getElementById('email').value;
	var password = document.getElementById('password').value;
	console.log(array[1]);
	console.log(email);
	console.log(password);
	//if(email == )
}
function myreg()
{
	window.location = 'registration.html';
}