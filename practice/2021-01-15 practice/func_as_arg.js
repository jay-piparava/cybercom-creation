//function as a argument
//create a array of year of birth...
var yearOfBirth = [1991,1992,1993,1994,1995];
//here we calc age and put it in anpother array....

function calcAgeArry(arr,fn)
{
	arrRes = [];
	for (var i = 0;i<arr.length;i++)
	{
		arrRes.push(fn(arr[i]));
	}
	return arrRes;
}
function calcAge(year)
{
	return 2020 - year;
}
console.log(calcAgeArry(yearOfBirth,calcAge));