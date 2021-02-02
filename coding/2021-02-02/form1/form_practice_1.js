$(document).ready(function () {
  $('#myform').validate({
      rules: {
        name: {
          required: true
        },
        add:{
          required : true
        },
        gender:{
          required : true
        },
        "checkarr[]":{
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
      },
      messages: {
        name: 'Please enter Name....',
        gender : 'Please Select Gender....',
        "checkarr[]":"Select atleast one checkbox...",
        age : 'Select Age...',
        file : 'Please Select a File..',
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