$('.delete').on('click',function(){
	var id=$(this).data('id');
	$.ajax({
	url:"./server/datadelete.php",
	data:{row_id:id,action:"submit"},
	type:'POST',
	success: function(response){
		if(response == 'success')
		{
			$('.main_tr_'+id).css('display','none');
			$('.main_tr_'+id).html('');
			$('.messageShow').css('float','right');
			$('.messageShow').html("<label class='fadeoutmsg'>Record Deleted successfully...</label>");
			$(".fadeoutmsg").fadeOut(3000);  
		}
		else{
			alert("Sorry! there is an error");
		}
	},error:function(error){
		console.log(error);
		}
	})
})