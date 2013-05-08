/* form validation script */
$(document).ready(function(){
  $("#insert_form").validate({
	debug: true,
    rules: {
	customer: {
       required: true,
      
      },
	text: {
		required: true,
	},
    },
    errorClass: "help-inline",
    validClass: "help-inline",
    errorElement: "span",
    highlight: function(element, errorClass, validClass) {
      $(element).closest(".control-group").removeClass("success").addClass("error");
    },
    unhighlight: function(element, errorClass, validClass) {
      $(element).closest(".control-group").removeClass("error").addClass("success");
    }
  });
  $("#edit_form").validate({
	debug: true,
    rules: {
	customer: {
       required: true,
      
      },
	text: {
		required: true,
	},
    },
    errorClass: "help-inline",
    validClass: "help-inline",
    errorElement: "span",
    highlight: function(element, errorClass, validClass) {
      $(element).closest(".control-group").removeClass("success").addClass("error");
    },
    unhighlight: function(element, errorClass, validClass) {
      $(element).closest(".control-group").removeClass("error").addClass("success");
    }
  });

/* text ticker code */
$('#fade').list_ticker({
	speed:5000,
	effect:'fade'
	});
$('#slide').list_ticker({
	speed:5000,
	effect:'slide'
	});
});