//global variable
var globalScope = "i am access from any where";

//create a function
function firstScope()
{
	var first = "I can access in function firstScope and inner function of it...";
	console.log("In firstScope function");
	console.log(first);
	console.log(globalScope);
	inFirst();
	function inFirst()
	{
		var inFirst = "i can access in inFirst and firstScope functiom....";
		console.log('in side inFirst function');
		console.log(globalScope);
		console.log(first);
		console.log(inFirst);
	}	
}
firstScope();