//create a main class
class person
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
class game extends person
{
	constructor(name,job,yearOfBirth,game,medal)
	{
		super(name,job,yearOfBirth);
		this.game = game;
		this.medal = medal;
	}
	gameinfo()
	{
		console.log(this.game);
		console.log(this.medal);
	}
}
//create an object
var jay = new game('jay','student',1999,'cricket',5);
jay.gameinfo();