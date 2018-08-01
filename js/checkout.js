	/*  Wizard */
	jQuery(function ($) {
		"use strict";
		//$('form#wrapped').attr('action', 'questionare_send.php');
		$("#wizard_container2").wizard({
			stepsWrapper: "#wrapped2",
			submit: ".submit",
			beforeSelect: function (event, state) {
				if ($('input#website2').val().length != 0) {
					return false;
				} else if ($('input#website2').val().length != 0) {
					return false;
				}
				if (!state.isMovingForward)
					return true;
				var inputs = $(this).wizard('state').step.find(':input');
				return !inputs.length || !!inputs.valid();
			}
		}).validate({
			errorPlacement: function (error, element) {
				if (element.is(':radio') || element.is(':checkbox')) {
					error.insertBefore(element.next());
				} else {
					error.insertAfter(element);
				}
			}
		});
		//  progress bar
		$("#progressbar2").progressbar();
		$("#wizard_container2").wizard({
			afterSelect: function (event, state) {
				$("#progressbar2").progressbar("value", state.percentComplete);
				$("#location").text("(" + state.stepsComplete + "/" + state.stepsPossible + ")");
			}
		});
		/* Submit loader mask */
		$('form').on('submit',function(e) {
			e.preventDefault();
			var form = $("form#wrapped2");
			var data = $(this).serialize();
			// var dat = form.validate();
			// var dd = form.valid();
			// console.log(dd + " " + dat);

			form.validate();
			if (form.valid()) {
				$("#loader_form").fadeIn();
				
			// //console.log(data);
			// $.ajax({
			// 	type: 'POST',
			// 	url: 'response',
			// 	data: data,
			// 	success: function(response){
			// 		if(response == "inserted") {
			// 			// $(".form1").remove();
			// 			// $('.form2').show();
			// 			// $('.example1').attr('id', 'wrapped2');

			// 		} else if(response == "not inserted"){

			// 		}
	
			// 	}
			// });

			}else{
				console.log('not true');
			}
			
		});
	});