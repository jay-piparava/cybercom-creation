/**********************************************************
Function Example
*/
function calcAge(birthyear)
{
	return 2021 - birthyear;
}
function yeartoRetire(fname , birthyear)
{
	age = calcAge(birthyear);
	yeartoRet = 65 - age;
	if(yeartoRet <= 0){
		console.log(fname +" Already retired....");
	}
	else{
		console.log(fname+" "+ yeartoRet +" years left.....");
	}
}
yeartoRetire('jay',1999);
yeartoRetire('john',1948);

//function expression
var whatdo = function(name,job){
	switch(job){
		case 'teacher':
			return (name+" is a teacher");
		case 'design':
			return(name+" is a designer");
		default:
			return (name+" is do something else");
	}
}
console.log(whatdo('jay','teacher'));
console.log(whatdo('john','design'));
console.log(whatdo('jack','profesor'));