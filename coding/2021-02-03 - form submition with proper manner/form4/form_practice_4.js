$(document).ready(function () {
  $('#form').validate({
      rules: {
        name: {
          required: true
        },
        email:{
          required:true,
          email : true
        },
        sub :{
          required:true,
        },
        msg:{
          required : true,
        }
      },
      messages: {
        name: 'Please enter Name....',
        sub :'Please Enter Subject...',
        msg : 'Please Enter Message..',
        email:{
          required:'Please Enter Email Address...',
          email : 'Please Enter Valid Email address...',
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