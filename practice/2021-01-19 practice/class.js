//creating a class pinfo
class pinfo
{
	constructor(name,job,yearOfBirth)
	{
		this.name = name;
		this.job = job;
		this.yearOfBirth = yearOfBirth;
	}

	//create a function
	calcAge()
	{
		console.log(2020 - yearOfBirth);
	}
}
//create a object...

var jay = new pinfo('jay','student',1999);
console.log(jay);
