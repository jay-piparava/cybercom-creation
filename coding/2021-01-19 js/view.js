//get value from local storage

var name = localStorage.getItem('sname');
var email = localStorage.getItem('semail');
var bdate = localStorage.getItem('bdate');
document.querySelector('#name').textContent = name;
document.querySelector('#email').textContent = email;
document.querySelector('#date').textContent = bdate;