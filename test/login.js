function mylogin()
{
	var array = localStorage.getItem('admin');
	var record = JSON.parse(array);
	var email = document.getElementById('email').value;
	var password = document.getElementById('password').value;
	if(record[1] == email && record[2] == password)
	{
		var log = {
			email : email,
			login : new Date()
		}
		var session = [];
		if(localStorage.getItem('log'))
		{
			session = JSON.parse(localStorage.getItem('log'));
		}
		session.push(log);
		localStorage.setItem('log',JSON.stringify(session));
		window.location = "dashboard.html";
	}
	else
	{
		document.getElementById('lbl').textContent = 'Username Or Passeord are inCorrect...';
		
	}
}
function myreg()
{
	window.location = 'registration.html';
}