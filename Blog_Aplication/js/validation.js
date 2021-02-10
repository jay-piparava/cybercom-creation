$(document).ready(function () {
    $('#form').validate({
      rules: {
        password:{
            required:true
        },
        email: {
          required: true,
          email: true
        },
        prifix:{
            required:true,
        },
        fname:{
            required:true,
        },
        lname:{
            required:true,
        },
        phone: {
            required: true,
            rangelength: [10, 12],
            number: true
        },
        password: {
            required: true,
            minlength: 8
        },
        cpassword:{
            required : true,
            equalTo:"#password",
          },
        info:{
            required:true,
        },
        accept:{
          required:true,
        },
      },
      messages: {
        email: {
          required: 'Please enter Email Address.',
          email: 'Please enter a valid Email Address.',
        },
        cpassword :{
            required :'Please Enter Confirm Password...',
            equalTo :'Do not match with Password...'
         },
         password: {
            required: 'Please enter Password.',
            minlength: 'Password must be at least 8 characters long.',
          },
        prifix:'Please select any prifix.',
        accept:'You Must Accept condition.'
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