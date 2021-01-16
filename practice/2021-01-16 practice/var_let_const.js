//var is used in function scope
//let is used in block scope
//const is assigned only once
function abc()
{
	var a='this is accessible in abd() and all inner function of abc';
	const con = 11;
	let c;
	console.log(a);
	subabc();
	function subabc()
	{
		c=21;
		let b='this is accessible only in a subabc() even we cannot use it in inner function of subabc()';
		console.log(b+c);
	}
	console.log(c);
}
abc();