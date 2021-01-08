//calculate the average of both john and mark
var johnScore = 89 + 120 + 103;
var markScore = 116 + 94 + 123;

var johnAvg = (johnScore / 3);
var markAvg = (markScore / 3);
console.log("Average Score of john's Team : "+johnAvg);
console.log("Average Score of mark's Team : "+markAvg);

//comapare Average of both team
if(johnAvg > markAvg)
{
	console.log("John's Team Win the Average.....");
}
else if(johnAvg < markAvg)
{
	console.log("Mark's Team Win the Average.....");
}
else
{
	console.log("Draw");
}
console.log("Now compare Bet john, marry and mark");

//now calculate marry's average and calculate the same...
var maryScore = 97 + 134 + 105;
var maryAvg = (maryScore / 3);
console.log("Average Score of marry's Team : "+maryAvg);
//compare Average of all
if(johnAvg > markAvg && johnAvg > maryAvg)
{
	console.log("John's Team Win the Average.....");
}
else if(markAvg > johnAvg && markAvg > maryAvg)
{
	console.log("Mark's Team Win the Average.....");
}
else if(maryAvg > johnAvg && maryAvg > markAvg)
{
	console.log("Mary's Team Win the Average.....");
}
else
{
	console.log("Draw");
}