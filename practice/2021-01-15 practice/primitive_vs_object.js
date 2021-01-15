//this is primitive demo

var a=10;
var b = a;
var a =20;
console.log(a);
console.log(b);
//output: 20 
//10
//here we cheanged the valur of a but still value of b is not cheanged because it does not store the value location.


//now we  use object
var obj1 = {
	name:'jay',
	age:30
}
var obj2 = obj1;
console.log(obj1);
console.log(obj2);
//now we change the value and see op.
obj1.age=20;
console.log(obj1);
console.log(obj2);

//here value of both object is cheanged......
console.log("-----");
const c={
	name : 'jay'
	};
var d=c;
c.name='suchi';
console.log(c);
console.log(d);
