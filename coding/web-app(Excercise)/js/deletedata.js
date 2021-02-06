$('.delete').on('click',function(){
	var id=$(this).data('id');
	$.ajax({
	url:"./server/datadelete.php",
	data:{row_id:id,action:"submit"},
	type:'POST',
	success: function(response){
		if(response == 'success')
		{
			$('#'+id).remove();
		}
		else{
			alert("Sorry! there is an error");
		}
	},error:function(error){
		console.log(error);
		}
	})
})