//use of this
//lets create a object
var pinfo = {
	fName : 'jay',
	lname : 'piparava',
	year : 1999,
	fullname : function(){
		return this.fullname = this.fName+this.lname;
	}
}
pinfo.fullname();
console.log(pinfo);