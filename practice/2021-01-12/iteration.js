//iteration
//basic for loop
for(var i=1;i<=5;i++)
{
		console.log('@');
}
//fetch element from array
var pinfo=['aaa','bbb','ccc','ddd'];
for(var i=0;i<pinfo.length;i++)
{
	console.log(pinfo[i]);
}
//using while loop
i=0;
while(i<pinfo.length)
{
	console.log(pinfo[i]);
	i++;
}


//use of continue
i=0;
while(i<pinfo.length)
{
	if(pinfo[i] == 'aaa')
		continue;
	console.log(pinfo[i]);
	i++;
}

//use of break
i=0;
while(i<pinfo.length)
{
	if(pinfo[i] === 'ddd')
		break;
	console.log(pinfo[i]);
	i++;
}
