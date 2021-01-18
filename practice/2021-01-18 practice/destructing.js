//simple vatiable
const [a,b] = [11,12]
console.log(a);    //11
console.log(b);    //12

//now with object..

const info = {
	fname : 'jay',
	lname : 'piparava'
};
//here we must put a variable name same as a key name 
const {fname,lname} = info;
console.log(fname);
console.log(lname);

//if we donot want a same name as a key name then we can use this...
const {fname : fnm,lname : lnm} = info;
console.log(fnm);
console.log(lnm);

//with function

function calcAge(year){
	const age = new Date().getFullYear() - year;
	return [age,65 - age];
}

const [age,rage] = calcAge(1999);
console.log(age);
console.log(rage);