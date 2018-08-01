$(document).ready(function() {
    var rating = $('#price').val();
     var htmltag = '<div class="form-group clearfix" id="logodes"><label class="rating_type">Logo Desigbn</label><input type="hidden" value="50000" id="logo"><span class="rating" id="rating"><label for="">&#8358;60,000</label></span> </div>';
    //alert(rating);
    $('#chb1').click(function(event) {
        if(this.checked) {
            $(htmltag).insertAfter("#features");
        } else {
            $('#logodes').remove();
        }
    });

  
    
});