$(document).ready(function(){
    $("#login").modal({
        backdrop: 'static',
        keyboard: false
    });

    $('#createaccount').on('click', function() {
        $('#login').modal('hide');
        $("#signup").modal({
            backdrop: 'static',
            keyboard: false
        });

    });

    $('#loginmodal').on('click', function() {
        $('#signup').modal('hide');
        $("#login").modal({
            backdrop: 'static',
            keyboard: false
        });
    
    });


    //submit the modal
   

});
