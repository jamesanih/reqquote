$(document).ready(function() {
    var rating = $('#price').val();
    var ftotal = parseInt(rating);
    $('#total').text(ftotal);
     var htmltag = '<div class="form-group clearfix" id="logodes"><label class="rating_type">Logo Design</label><input type="hidden" name="logos" value="50000" class="newfeatures" id="logo"><span class="rating" id="rating"><label for="">&#8358;50,000</label></span> </div>';
     var chb2 = '<div class="form-group clearfix" id="dashboards"><label class="rating_type">Dashboard Design</label><input type="hidden" name="dashboard" value="120000" class="newfeatures" id="dash"><span class="rating" id="rating"><label for="">&#8358;120,000</label></span> </div>';
    var chb3 = '<div class="form-group clearfix" id="design_logo"><label class="rating_type">Dashboard Design</label><input type="hidden" name="logo_designs" value="120000" class="newfeatures" id="logo_design"><span class="rating" id="rating"><label for="">&#8358;160,000</label></span> </div>';

    
    $('#chb1').click(function(event) {
        
        
        if(this.checked) {
            if($('#dashboards').length) {
                $(htmltag).insertAfter("#dashboards");
                var dashprice = $('#dash').val();
                var nextNum = parseInt(dashprice);
                var logoprice = parseInt($('#logo').val());
                var fprice = ftotal + nextNum + logoprice;
                $('#total').text(fprice);
               
             }else{
                $(htmltag).insertAfter("#features");
                var logoprice = parseInt($('#logo').val());
                var fprice = ftotal + logoprice;
                $('#total').text(fprice);


             }
           
            
        } else {
            $('#logodes').remove();
            if($('#dashboards').length){
                var dashprice = $('#dash').val();
                var nextNum = parseInt(dashprice);
                var fprice = ftotal + nextNum;
                $('#total').text(fprice);
            }else{
                $('#total').text(ftotal);
            }
           
            

        }
    });

    $('#chb2').click(function(event) {
        if(this.checked) {
           if($('#logodes').length) {
            $(chb2).insertAfter("#logodes");
            var logoprice = parseInt($('#logo').val());
            var dashprice = parseInt($('#dash').val());
            var fprice = ftotal + logoprice + dashprice;
            $('#total').text(fprice);
           }else{
            $(chb2).insertAfter("#features");
            var dashprice = parseInt($('#dash').val());
            var fprice = ftotal + dashprice;
            $('#total').text(fprice);
           }
           
           
        } else {
            $('#dashboards').remove();
            if($('#logodes').length) {
                var logoprice = parseInt($('#logo').val());
                var fprice = ftotal + logoprice;
                $('#total').text(fprice);
            }else {
                $('#total').text(ftotal);
            }
           
        }
    });


    $('#chb3').click(function(event){

    });

   

  
    
});