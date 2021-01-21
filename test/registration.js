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
function mycheck()
{
	var array = localStorage.getItem('admin');
	var record = JSON.parse(array);
	var email = record[1];
	var insertemail = document.getElementById('email').value;
	if(insertemail.includes(email))
	{
		document.getElementById('msg').textContent = 'Email already registered.....';
		document.getElementById('reg').style.visibility = 'hidden';
	}
	else
	{
		document.getElementById('reg').style.visibility = 'visible';
		document.getElementById('msg').textContent = '';	
	}
}