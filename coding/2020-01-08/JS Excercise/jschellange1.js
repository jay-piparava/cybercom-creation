//get Mark's mass and height using prompt..
var markMass = prompt("Enter Mark's mass : ");
var markHeight = prompt("Enter Mark's Height : ");

//get John's mass and height using prompt..
var johnMass = prompt("Enter John's mass : ");
var johnHeight = prompt("Enter John's Height : ");

//calculating mark's and john's BMI
var markBmi = markMass / (markHeight * markHeight);
var johnBmi = johnMass / (johnHeight * johnHeight);

//comparing BMI
var markHigherJohn = markBmi > johnBmi

console.log("Is mark's BMI Higher then John's?"+' '+markHigherJohn);