//create a array of actual bill
var aBill = [124,48,268];
var tip = [];
var ttip = [];

//create a function which calculate a tip.
function calcTip(bill)
{
	if(bill < 50)
	{
		return bill * 0.2;
	}
	else if(bill >= 50 && bill <= 200)
	{
		return bill * 0.15
	}
	else
	{
		return bill * 0.10;
	}
}
//now for calculate the tip we iterate a all array and count tip.
for(var i=0 ; i < aBill.length ; i++)
{
	var netTip = calcTip(aBill[i])
	tip[i] = netTip;
	ttip[i] = netTip + aBill[i];
}
console.log("Only tip array : "+tip);
console.log("Tip + Bill array : "+ttip);