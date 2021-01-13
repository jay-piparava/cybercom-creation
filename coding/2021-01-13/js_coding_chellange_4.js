//create a object of both john and mark
var john = {
	fName : 'john',
	mass : prompt("Enter John's Mass : "),
	height : prompt("Enter John's Height : "),
	BMI : function(){
		return this.BMI = (this.mass / (this.height * this.height))
	}
};
john.BMI();
console.log(john);
var mark = {
	fName : 'mark',
	mass : prompt("Enter mark's Mass : "),
	height : prompt("Enter mark's Height : "),
	BMI : function(){
		return this.BMI = (this.mass / (this.height * this.height))
	}
};
mark.BMI();
console.log(mark);

if(john.BMI > mark.BMI)
{
	console.log(john.fName + ' is Win with '+john.BMI+' BMI');
}
else if(john.BMI < mark.BMI)
{
	console.log(mark.fName + ' is Win with '+mark.BMI+' BMI');	
}
else
{
	console.log('Both Win with same '+john.BMI+' BMI');
}