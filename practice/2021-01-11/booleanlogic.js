/***************************************************
Boolean Logic Examole
****************************************************/
//declare a variablr name and age
var firstName = "Jay";
var age = 15;

//check whether a jay is boy ,teen ,young or man 
//boy = age bet 1 to 13
//teen = age equals or grater 13 and less 21
//young = age equals or grater 21 and less 30
//man = age  equals or grater 30
if (age < 13){
	console.log(firstName + "is a Boy");
}
else if(age >=13 && age < 21){
	console.log(firstName + "is a Teen");
}
else if(age >= 21 && age <30){
	console.log(firstName + "is a Young");
}
else{
	console.log(firstName + "is a Man");
}