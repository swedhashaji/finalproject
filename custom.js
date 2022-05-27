$("#formValidation").validate({
    rules:{
        fullname:{
            minlength: 2
        }
    },
    messages:{
        fullname:{
            
        }
    },
    submitHandler: function(form) {
      form.submit();
    }
   });