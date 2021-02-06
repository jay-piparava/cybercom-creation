$(document).ready(function () {
    $('#form').validate({
      rules: {
        name: {
          required: true
        },
        email: {
          required: true,
          email: true
        },
        phone: {
          required: true,
          rangelength: [10, 12],
          number: true
        },
       title: {
          required: true,
        },
      },
      messages: {
        name: 'Please enter Name.',
        email: {
          required: 'Please enter Email Address.',
          email: 'Please enter a valid Email Address.',
        },
        phone: {
          required: 'Please enter Contact.',
          rangelength: 'Contact should be 10 digit number.'
        },
        title: {
          required: 'Please enter Title.',
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