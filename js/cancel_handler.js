$(document).ready(function(){
    $('#features2').hide();
    var total = parseInt($('#total').val());
    var planprice = parseInt($('#price').val());
    var usertotal = parseInt(total + planprice);
    $('#finalprice').text(usertotal);
    $('#total').val(usertotal);

    $("#cancel").click(function(){
        $('#features').remove();
        $('#total').val('0');
        if($('#dashboards').length && $('#logodes').length && $('#design_logo').length){
            var initotal = parseInt($('#total').val());
            var logoprice = parseInt($('#logo').val());
            var dashprice = parseInt($('#dash').val());
            var logo_desginprice = parseInt($('#logo_design').val());
            var total = initotal + logoprice + dashprice + logo_desginprice;
            $('#finalprice').text(total);
            $('#total').val(total);
        }else if($('#dashboards').length && $('#logodes').length){
            var initotal = parseInt($('#total').val());
            var logoprice = parseInt($('#logo').val());
            var dashprice = parseInt($('#dash').val());
            var total = initotal + logoprice + dashprice;
            $('#finalprice').text(total);
            $('#total').val(total);
        }else if($('#dashboards').length && $('#design_logo').length){
            //check
            var dashprice = parseInt($('#dash').val());
            var logo_desginprice = parseInt($('#logo_design').val());
            var currenttotal = parseInt($('#total').val());
            var total = parseInt(dashprice + currenttotal + logo_desginprice);
            $('#finalprice').text(total);
            $('#total').val(total);

        }else if($('#logodes').length && $('#design_logo').length){
            //check
            var logoprice = parseInt($('#logo').val());
            var logo_desginprice = parseInt($('#logo_design').val());
            var currenttotal = parseInt($('#total').val());
            var total = parseInt(logoprice + currenttotal + logo_desginprice);
            $('#finalprice').text(total);
            $('#total').val(total);

        }else if($('#dashboards').length){
            //check
            var dashprice = parseInt($('#dash').val());
            var currenttotal = parseInt($('#total').val());
            var total = parseInt(dashprice + currenttotal);
            $('#finalprice').text(total);
            $('#total').val(total);
        }else if($('#design_logo').length){
            //check
            var logo_desginprice = parseInt($('#logo_design').val());
            var currenttotal = parseInt($('#total').val());
            var total = parseInt(logo_desginprice + currenttotal);
            $('#finalprice').text(total);
            $('#total').val(total);
        }else if($('#logodes').length){
            //check
            var logoprice = parseInt($('#logo').val());
            var currenttotal = parseInt($('#total').val());
            var total = parseInt(logoprice + currenttotal);
            $('#finalprice').text(total);
            $('#total').val(total);
        }else{
            $('#finalprice').text('');
            $('#total').val('0');
            var total = $('#total').val();
            alert(total);

        }
        
});

    
   
    
    
    
    
});
