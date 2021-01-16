var jay = {
	name : 'jay',
	age :21,
	job :'student',
	presentation :function(style,timeofday){
		if(style=='formal')
		{
			console.log("good "+timeofday+" Ladies and gentlemen ! i am "+this.name+" and i am a "+this.age+" years old "+this.job);

		}
		else if(style=='frirndly')
		{
			console.log("hi gays !!!good "+timeofday+" i am "+this.name+" and i am a "+this.age+" years old "+this.job);			
		}
	}
}
jay.presentation('formal','morning');
var jimmy={
	name : 'jimmy',
	age :22,
	job:'designer'
}
//use of call()
jay.presentation.call(jimmy,'frirndly','evening');

//use of apply
jay.presentation.apply(jimmy,['formal','night']);

//use of apply
a = jay.presentation.bind(jimmy);
a('formal','evening');
b=jay.presentation.bind(jay,'frirndly');
b('evening');