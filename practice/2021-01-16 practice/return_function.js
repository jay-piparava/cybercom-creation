//first class function return a function
function interview(job)
{
	if(job==='teacher')
	{
		return function(){
			console.log('Which Subject You are teaching.....');
		}
	}
	else if(job==='designer')
	{
		return function(){
			console.log('What do you mean about UI???');
		}
	}
}
interview('teacher')();
a = interview('designer');
a();