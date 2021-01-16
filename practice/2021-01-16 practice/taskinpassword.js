function mykeypress()
{	var count ='';
	var data = document.getElementById('data').value;
	for(var i=1;i<=data.length;i++)
	{
		count = count + '#';
	}
	document.querySelector('#data').value = count;
}