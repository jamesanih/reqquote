$(document).ready(function(){
$('#signupform').validate({
    rules: {
        name: "required",
        email : {
            required:true,
            email: true
        },
        password: {
            required : true,
            minlength : 4
        }
    },
    messages : {
        name: "Please enter your name",
        email : {
            required: "Please enter your email",
            email: "Wrong email format"
        },
        password: {
            required: "Please enter password",
            min : "password must 4 characters long"
        }
    } ,
    submitHandler : function(form) {
    var name = $('#inputname').val();
     var email = $('#inputemail').val();
     var password = $('#inputpassword').val();
    //console.log(name);

        $.ajax({
            type: 'POST',
            url: "signup",
            data: {name:name,email:email, password: password},
            success: function(response){
              // alert(response);
               if(response == "OK") {
                 $("#signup").modal('hide');
                 window.location.href = "index";
               }else if (response == "Email already exist") {
                 $('#sign_error').show();
                 $('#sign_error').html(response);
               }

            }


        });
        
        
    }

 });

});