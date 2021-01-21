function data()
{
	var name =  document.getElementById('name').value;
	var email = document.getElementById('email').value;
	var password = document.getElementById('password').value;
	var city = document.getElementById('city').value;
	var state = document.getElementById('state').value;
	var array = [name,email,password,city,state];
	localStorage.setItem('admin',JSON.stringify(array));
	window.location = 'login.html';
}