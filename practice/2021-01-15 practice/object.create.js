//object.create
var pinfo = {
	calcAge: function(){
		console.log(2020 - this.yearOfBirth);
	}
};
var jay = Object.create(pinfo);
jay.name = 'jay';
jay.yearOfBirth = 1999;
jay.job = 'student';
console.log(jay);
console.log(jay.calcAge());

//another way
var jack = Object.create(pinfo,
{
	name :{value:'jack'},
	yearOfBirth :{value :1999},
	job :{value:'teacher'}
});

console.log(jack)
console.log(jack.calcAge());