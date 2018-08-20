$(document).ready(function() {
    var htmltag = '<div class="form-group clearfix logo" id="logodes"><label class="rating_type">Logo Design</label><input type="hidden" name="logos" value="50000" class="newfeatures" id="logo"><span class="rating" id="rating"><label for="">&#8358;50,000</label></span> </div>';
    var chb2 = '<div class="form-group clearfix dash" id="dashboards"><label class="rating_type">Dashboard Design</label><input type="hidden" name="dashboard" value="120000" class="newfeatures" id="dash"><span class="rating" id="rating"><label for="">&#8358;120,000</label></span> </div>';
   var logoDesignHtml = '<div class="form-group clearfix logo_design" id="design_logo"><label class="rating_type">Dashboard Design</label><input type="hidden" name="logo_designs" value="160000" class="newfeatures" id="logo_design"><span class="rating" id="rating"><label for="">&#8358;160,000</label></span> </div>';

   $('.checkbox1').click(function(){
       if(this.checked){
        var ids = this.id;
        var name = $('#'+ids).attr('name');
        //alert(this.id + " " + "checked");
        if(name == "logo"){
            //when chb1 checked
            alert(name);
            if($('#dashboards').length && $('#design_logo').length){
                $(htmltag).insertAfter("#dashboards");
                var logoprice = parseInt($('#logo').val());
                //var dashprice = parseInt($('#dash').val());
                //var dash_logo = parseInt($('#logo_design').val());
                var initaltotal = parseInt($('#total').val());
                var total = logoprice + initaltotal;
                $("#finalprice").text(total);
                $('#total').val(total);
            }else if($('#dashboards').length){
                $(htmltag).insertAfter("#dashboards");
                var logoprice = parseInt($('#logo').val());
                //var dashprice = parseInt($('#dash').val());
                var initaltotal = parseInt($('#total').val());
                var total = logoprice + initaltotal;
                $("#finalprice").text(total);
                $('#total').val(total);
            }else if($('#design_logo').length){
                $(htmltag).insertAfter("#design_logo");
                var logoprice = parseInt($('#logo').val());
                //var dash_logo = parseInt($('#logo_design').val());
                var initaltotal = parseInt($('#total').val());
                var total = logoprice + initaltotal;
                $("#finalprice").text(total);
                $('#total').val(total);
            }else{
                $(htmltag).insertAfter("#features2");
                var logoprice = parseInt($('#logo').val());
                var initaltotal = parseInt($('#total').val());
                var total = logoprice + initaltotal;
                $("#finalprice").text(total);
                $('#total').val(total);
            }
        }else if(name == "dash"){
            //when chb2 checked
            alert(name);
            if($('#logodes').length && $('#design_logo').length){
                $(chb2).insertAfter("#logodes");
                //var logo_price = parseInt($('#logo').val());
                //var design_logo_price = parseInt($('#logo_design').val());
                var initaltotal = parseInt($('#total').val());
                var dash = parseInt($('#dash').val());
                var total = initaltotal + dash;
                $("#finalprice").text(total);
                $('#total').val(total);
            }else if($('#logodes').length){
                $(chb2).insertAfter("#logodes");
                //var logo_price = parseInt($('#logo').val());
                var dash = parseInt($('#dash').val());
                var initaltotal = parseInt($('#total').val());
                var total = initaltotal +  dash;
                $("#finalprice").text(total);
                $('#total').val(total);

            }else if($('#design_logo').length) {
                $(chb2).insertAfter("#design_logo");
                var dash = parseInt($('#dash').val());
                var initaltotal = parseInt($('#total').val());
                var total = initaltotal +  dash;
                $("#finalprice").text(total);
                $('#total').val(total);

            }else{
                $(chb2).insertAfter("#features2");
                var dash = parseInt($('#dash').val());
                var initaltotal = parseInt($('#total').val());
                var total = initaltotal +  dash;
                $("#finalprice").text(total);
                $('#total').val(total);
            }

        }else if(name == "logo_design"){
            //when chb3 checked
            alert(name);
            if($('#logodes').length && $('#dashboards').length){
                $(logoDesignHtml).insertAfter("#logodes"); 
                var logo_design = parseInt($('#logo_design').val());
                var initaltotal = parseInt($('#total').val());
                var total = initaltotal +  logo_design;
                $("#finalprice").text(total);
                $('#total').val(total);
            }else if($('#logodes').length){
                $(logoDesignHtml).insertAfter("#logodes"); 
                var logo_design = parseInt($('#logo_design').val());
                var initaltotal = parseInt($('#total').val());
                var total = initaltotal +  logo_design;
                $("#finalprice").text(total);
                $('#total').val(total); 
            }else if($('#dashboards').length){
                $(logoDesignHtml).insertAfter("#dashboards"); 
                var logo_design = parseInt($('#logo_design').val());
                var initaltotal = parseInt($('#total').val());
                var total = initaltotal +  logo_design;
                $("#finalprice").text(total);
                $('#total').val(total); 
            }else{
                $(logoDesignHtml).insertAfter("#features2");
                var logo_design = parseInt($('#logo_design').val());
                var initaltotal = parseInt($('#total').val());
                var total = initaltotal +  logo_design;
                $("#finalprice").text(total);
                $('#total').val(total); 
            }


        }
        
       }else{
            var ids = this.id;
            var name = $('#'+ids).attr('name');
            var initotal = parseInt($('#total').val());
            var price = parseInt($('#'+name).val());
            var total = initotal - price;
            alert(total);
            $('#finalprice').text(total);
            $('#total').val(total);
            $('.'+name).remove();

       }
       
        
   });

    
   $('#submit').click(function(){
       $('#wrapped2').serialize();
   })

})