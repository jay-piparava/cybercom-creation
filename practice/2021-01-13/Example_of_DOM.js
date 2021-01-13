//create a variable for a tag
var size = (Math.floor(Math.random() * 5)) + 1;
var tag = '<h'+size+'>';
var etag = '</h'+size+'>';

//for generate a random number
var number = Math.floor(Math.random()*100);
console.log(number);

//use of DOM
document.querySelector('#p1').innerHTML = tag+number+etag;

//for change image randomly

var src = 'dhoni-'+size+'.jpg'
document.querySelector('#img').src = src;