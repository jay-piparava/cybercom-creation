var array = localStorage.getItem('admin');
var record = JSON.parse(array);
document.getElementById('name').textContent = record[0];
function addrecord()
{
	var uname =  document.getElementById('iname').value;
	var uemail = document.getElementById('iemail').value;
	var upassword = document.getElementById('ipassword').value;
	var ubdate = document.getElementById('ibdate').value;
	var birthyear = ubdate.slice(0,4);
	var pinfo = {
		email : uemail,
		name : uname,
		password : upassword,
		bdate : ubdate,
		age : function()
		{
			return this.age =  new Date().getFullYear() - birthyear;
		}
	};
	
	pinfo.age();
	var user=[];
	if(localStorage.getItem('user'))
	{
		user = JSON.parse(localStorage.getItem('user'));
	}
	user.push(pinfo);
	console.log(user);
	localStorage.setItem('user',JSON.stringify(user));
}