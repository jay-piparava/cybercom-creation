//Fibonacci Series 
//get user input how many no. they want.....
var no = prompt("Enter Number You Want : ");
if(no == 0)
{
	console.log('Enter Proper Number......');
}
else if(no == 1)
{
	console.log('0');	
}
else if(no == 2)
{
	console.log('1')
}
else
{
	var no1 = 0;
	var no2 = 1;
	console.log(no1);
	console.log(no2);
	for (var i = 2; i < no; i++)
	{
		var no3 = no1 + no2;
		console.log(no3);
		no1 = no2;
		no2 = no3;
	}
}