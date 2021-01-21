function mylogin()
{
	var array = localStorage.getItem('admin');
	var record = JSON.parse(array);
	var email = document.getElementById('email').value;
	var password = document.getElementById('password').value;
	var done = false;
	if(email.includes(record[1]) && password.includes(record[2]))
	{
		done = true;
	}
	else
	{
		document.getElementById('lbl').textContent = 'Username Or Passeord are inCorrect...';
	}
	if(done)
	{
		 location.replace("dashboard.html");
	}
}
function myreg()
{
	window.location = 'registration.html';
}