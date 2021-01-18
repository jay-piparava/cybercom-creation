//Arrow functions.....
//create a arrow contain year of birth..
year = [2005,2006,2007,2008];

//type-1:singlr argument single statement
//here el means a element as a argument.
age1 = year.map(el => 2020 - el);
console.log(age1);

//type-2:multiple argument with singlt statement:
age2 = year.map((el,index) => `Element at index ${index+1} : age is ${2020 - el}`);
console.log(age2);
//type-3:multiple argument and multiple statement:
age3 = year.map((el,index) => {
	const thisyear = new Date().getFullYear();
	return `Element at index ${index+1} : age is ${thisyear - el}`;
});
console.log(age3);