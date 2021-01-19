/*
2. Add multiple objects in array and store it in local storage.

o Object contains the below properties,

o Name, Age, Email, Telephone Number.

o Display the multiple objects in table structure.
*/
//create a function
function person(name,age,email,tel)
{
	var personarray = [];
	var add ={
		name : name,
		age : age,
		email : email,
		tel : tel
	}
	personarray.push(add);
	personarray.push(JSON.parse(localStorage.getItem('personarray')));
	console.log(personarray);

	localStorage.setItem("personarray",JSON.stringify(personarray));

};
person('jay',21,'jay@gmail.com',8128211139);
person('hemal',23,'hemal@gmail.com',8866028606);
