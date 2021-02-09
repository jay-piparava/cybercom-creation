$(document).ready(function () {
  $('#form').validate({
      rules: {
        name: {
          required: true
        },
        address:{
          required : true
        },
        gender:{
          required : true
        },
        'chkarr[]':{
          required : true
        },
        age:{
          required : true
        },
        file:{
          required : true
        },
        password: {
          required: true,
          minlength: 8
        },
        month:{
          required : true,
        },
        day:{
          required : true,
        },
        year:{
          required : true,
        },
        merrage:{
          required : true,
        },
        accept:{
          required : true,
        },
      },
      messages: {
        name: 'Please enter Name....',
        month : 'Select Month ',
        year : 'Select Year ',
        day : 'Select Day ',
        gender : 'Please Select Gender....',
        'chkarr[]':'Select atleast one checkbox...',
        address : 'Please enter Address',
        age : 'Select Age...',
        file : 'Please Select a File..',
        merrage : 'Select Status..',
        accept : 'You Must tick the condition...',
        password: {
          required: 'Please enter Password.',
          minlength: 'Password must be at least 8 characters long.',
        },
        
       },
       errorPlacement: function(error, element) {
          var placement = $(element).data('error');
          if (placement) {
            $(placement).append(error)
          } else {
            error.insertAfter(element);
          }
        },
      submitHandler: function (form) {
        form.submit();
      }
    });
  });

  $('.delete').on('click',function(){
    var id=$(this).data('id');
    console.log(id);
    $.ajax({
    url:"./server/delete.php",
    data:{row_id:id,action:"submit"},
    type:'POST',
    success: function(response){
      if(response == 'success')
      {
        $('.del'+id).css('display','none');
        $('.del'+id).html(''); 
      }
      else{
        alert("Sorry! there is an error");
      }
    },error:function(error){
      console.log(error);
      }
    })
  })