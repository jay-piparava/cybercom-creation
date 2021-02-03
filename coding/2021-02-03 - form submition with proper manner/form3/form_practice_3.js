$(document).ready(function () {
  $('#form').validate({
      rules: {
        name: {
          required: true
        },
        lname:{
          required : true
        },
        gender:{
          required : true
        },
        country:{
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
        accept:{
          required : true,
        },
        email:{
          required:true,
          email : true
        },
        phone :{
          required:true,
          rangelength:[10,12],
          number:true
        },
        cpassword:{
          required : true,
          equalTo:"#password",
        }
      },
      messages: {
        name: 'Please enter Name....',
        lname :'Please Enter Last Name...',
        month : 'Select Month ',
        year : 'Select Year ',
        day : 'Select Day ',
        gender : 'Please Select Gender....',
        country : 'Please Select Country..',
        accept : 'You Must tick the condition...',
        email:{
          required:'Please Enter Email Address...',
          email : 'Please Enter Valid Email address...',
        },
        password: {
          required: 'Please enter Password.',
          minlength: 'Password must be at least 8 characters long.',
        },
         phone : {
          required : 'Please Enter Phone No.',
          rangelength : 'Phone number Should be 10 digit...',
        
       },
       cpassword :{
          required :'Please Enter Confirm Password...',
          equalTo :'Do not match with Password...'
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