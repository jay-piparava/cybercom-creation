//create a object pinfo
var Pinfo =  function(name,yearOfBirth,job){
	this.name = name;
	this.yearOfBirth = yearOfBirth;
	this.job = job;
}
//function inherite
Pinfo.prototype.calculateAge = function() {
	console.log(2021 - this.yearOfBirth);
};
//constant inherite
Pinfo.prototype.pi = 3.14;
var jay = new Pinfo ('jay',1999,'student');
var sachin = new Pinfo('sachin',1982,'cricketer');
jay.calculateAge();
sachin.calculateAge();
console.log(jay.pi);
console.log(sachin);