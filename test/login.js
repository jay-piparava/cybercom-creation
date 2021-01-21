function mylogin()
{
	var array = localStorage.getItem('admin');
	var record = JSON.parse(array);
	var email = document.getElementById('email').value;
	var password = document.getElementById('password').value;
	if(!record[1] == email && record[2] == password)
	{
		document.getElementById('lbl').textContent = 'Username Or Passeord are inCorrect...';
	}
	else
	{
		window.location.href = "dashboard.html";
		
	}
}
function myreg()
{
	window.location = 'registration.html';
}