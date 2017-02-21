$(document).ready(function(){

	$("#registerChild").validate({
		debug: false,
		// errorContainer: "#alert",
		// errorLabelContainer: $("#alert ul"),
		// wrapper: 'li',
		ignore: ":hidden",
		// onfocusout: false,
		focusInvalid: false,
		onkeyup: false,

		invalidHandler: function(event, validator) {
			var errors = validator.numberOfInvalids();
			if (errors) {
				var message = errors == 1
					? 'U bent 1 veld vergeten in te vullen.'
					: 'U bent ' + errors + ' velden vergeten in te vullen.';

				$("#warning div").html(message);
				$("#warning").show();
			} else {
				$("#warning").hide();
			}
		},

		highlight: validateHighlight,
		unhighlight: validateUnhighlight,

		// errorPlacement: function(error, element) {
		// 	if (element.attr("name") == "fname" || element.attr("name") == "lname" ) {
		// 		error.insertAfter("#lastname");
		// 	} else {
		// 		error.insertAfter(element);
		// 	}
		// },

  		rules: {
			namechild: {
				required: true
			},
			gender: {
				required: true
			},
			// birthday: {
			// 	required: true
			// },
			bday: {
				required: true
			},
			bmonth: {
				required: true
			},
			byear: {
				required: true
			},
			adres: {
				required: true
			},
			phone: {
				required: true
			},
			email: {
				required: true,
				email: true
			},
			groep: {
				required: true
			},
			school: {
				required: true
			},
		},

		messages: {
			namechild: "U bent de naam van het kind vergeten in te vullen.",
			gender: "U bent het geslacht vergeten in te vullen.",
			bday: "U bent de geboortedatum vergeten in te vullen.",
			bmonth: "U bent de geboortedatum vergeten in te vullen.",
			byear: "U bent de geboortedatum vergeten in te vullen.",
			adres: "U bent uw adres vergeten in te vullen.",
			phone: "U bent vergeten uw telefoonnummer in te vullen.",
			email: {
				required: "U bent vergeten uw e-mailadres in te vullen.",
				email: "Het ingevulde e-mailadres is geen geldig adres."
			},
			groep: "U bent vergeten de groep van uw kind in te vullen.",
			school: "U bent vergeten de school van uw in te vullen."
		},

		groups: {
			gender: "geslachtJongen geslachtMeisje",
			birthday: "bday bmonth byear"
		}

	});
});

function validateHighlight(element, errorClass, validClass){
	var elemName = $(element).prop("name");
	$("[name="+elemName+"]").closest('.form-group').addClass("has-error").removeClass("has-success");
}

function validateUnhighlight(element, errorClass, validClass){
	var elemName = $(element).prop("name");
	$("[name="+elemName+"]").closest('.form-group').addClass("has-success").removeClass("has-error");
}
