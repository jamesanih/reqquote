$(document).ready(function(){
    $('.form2').hide();
$('#loginform').validate({
    rules: {
        email : {
            required:true,
            email: true
        },
        password: {
            required : true
        }
    },
    messages : {
        email : {
            required: "Please enter your email",
            email: "Wrong email format"
        },
        password: {
            required: "Please enter password"
            
        }
    } ,
    submitHandler : function(form) {
     var email = $('#inputEmail').val();
     var password = $('#inputPassword').val();
 

        $.ajax({
            type: 'POST',
            url: "login",
            data: {email:email, password: password},
            success: function(response){
               
               if(response == "OK") {
                 $("#login").modal('hide');
                 window.location.href = "/";
               }else if(response == "wrong email") {
                   $('#login_error').show();
                   $('#login_error').html(response);
                  
               }else if(response == "wrong password") {
                   $('#login_error').hide();
                   $('#login_error2').show();
                   $('#login_error2').html(response);
                   
               }

            }


        });
        
        
    }

 });
});
