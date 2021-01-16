//some new string function in ES2015
let firstName = 'jay';
let lastName = 'piparava'
//new way to concate a string.....
let fullName = `${firstName} ${lastName}`;
console.log(fullName);                  //jay piparava
console.log(fullName.startsWith('j'));  //true
console.log(fullName.startsWith('a'));  //false
console.log(fullName.endsWith('j'));    //false
console.log(fullName.endsWith('a'));    //true
console.log(fullName.includes('pip'));  //true
console.log(fullName.repeat(3));        //jay piparavajay piparavajay piparava