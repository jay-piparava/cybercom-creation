//this keyword
function Person(name){
	this.name = name;
}

//now we creating a prototype
Person.prototype.myFriends = function(friends)
{
	//if we don't refer this in to the self then it consider a this as a window object
	var self = this;
	var frndarr = friends.map(function(el){
			return self.name + ' is friends with '+el;
	});
	console.log(frndarr);
}	
var friends = ['harsh','mohil','bunny','cr'];
new Person('jay').myFriends(friends);