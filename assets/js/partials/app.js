$(document).ready(function(){
	$("#registerVolenteer").validate({
		debug: false,
		ignore: ":hidden",
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

  		rules: {
			name: {
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
  		},

		messages: {
			name: "U bent uw naam vergeten in te vullen.",
			adres: "U bent uw adres vergeten in te vullen.",
			phone: "U bent vergeten uw telefoonnummer in te vullen.",
			email: {
				required: "U bent vergeten uw e-mailadres in te vullen.",
				email: "Het ingevulde e-mailadres is geen geldig adres."
			}
		},
	});

	$("#registerChild").validate({
		debug: false,
		ignore: ":hidden",
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

  		rules: {
			namechild: {
				required: true
			},
			gender: {
				required: true
			},
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

$(document).on('click', '#groepBovenbouw', function(){
	if ( $("#groepBovenbouw").is(':checked')==true) {
		$('#overnachten .radio-inline').removeClass('disabled');
		$('#overnachtenJa').removeAttr('disabled');
		$('#overnachtenNee').removeAttr('disabled');
	} else {
		$('#overnachten .radio-inline').addClass('disabled');
		$('#overnachtenJa').prop('disabled','disabled');
		$('#overnachtenNee').prop('disabled','disabled');
	}
})

$(document).on('click', '#leidingsamen', function(){
	if ( $("#leidingsamen").is(':checked')==true) {
		$('#leidingsamenmet').removeAttr('disabled');
	} else {
		$('#leidingsamenmet').prop('disabled','disabled');
	}
})

$(document).on('click', '#anderevoorkeur', function(){
	if ( $("#anderevoorkeur").is(':checked')==true) {
		$('#voorkeur').removeAttr('disabled');
	} else {
		$('#voorkeur').prop('disabled','disabled');
	}
})

$(document).on('click', '#daghulp', function(){
	if ( $("#daghulp").is(':checked')==true) {
		$('#daghulpsamenmet').removeAttr('disabled');
	} else {
		$('#daghulpsamenmet').prop('disabled','disabled');
	}
})

function validateHighlight(element, errorClass, validClass){
	var elemName = $(element).prop("name");
	$("[name="+elemName+"]").closest('.form-group').addClass("has-error").removeClass("has-success");
}

function validateUnhighlight(element, errorClass, validClass){
	var elemName = $(element).prop("name");
	$("[name="+elemName+"]").closest('.form-group').addClass("has-success").removeClass("has-error");
}

function fillFormChild(){
	$("#namechild").val("Maud Brommert");
	$("#geslachtMeisje").attr('checked', true);;
	$("#adres").val("Helmondseweg 1");
	$("#bday").val("14");
	$("#bmonth").val("12");
	$("#byear").val("2010");
	$("#phone").val("0624863847");
	$("#email").val("info@webbiker.nl");
	$("#groep").val("3");
	$("#school").val("Brukelum");
	$("#opmerkingen").val("Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ea tenetur odit, voluptatibus ullam perferendis molestias a unde aliquid, porro excepturi doloremque quam dolor sint, suscipit eos saepe tempore? Temporibus, odio.");
	$("#voorkeur").val("Valerie");
}

function fillFormVolenteer(){
	$('#overnachten .radio-inline').removeClass('disabled');
	$('#overnachtenJa').removeAttr('disabled');
	$('#overnachtenNee').removeAttr('disabled');

	$("#leidingsamen").attr('checked', true);;
	$('#leidingsamenmet').removeAttr('disabled');

	$("#anderevoorkeur").attr('checked', true);;
	$('#voorkeur').removeAttr('disabled');

	$("#daghulp").attr('checked', true);;
	$('#daghulpsamenmet').removeAttr('disabled');

	$("#name").val("Joost Brommert");
	$("#age").val("42");
	$("#adres").val("Helmondseweg 1");
	$("#phone").val("0624863847");
	$("#email").val("info@webbiker.nl");

	$("#groepOnderbouw").attr('checked', true);;
	$("#groepBovenbouw").attr('checked', true);;
	$("#overnachtenJa").attr('checked', true);;

	$("#metEigenKind").attr('checked', true);;
	$("#leidingsamenmet").val("Nicole van Daal");

	$("#dag1").attr('checked', true);;
	$("#dag2").attr('checked', true);;
	$("#dag3").attr('checked', true);;

	$("#creatiefspel").attr('checked', true);;
	$("#sportiefspel").attr('checked', true);;
	$("#spelgeenvoorkeur").attr('checked', true);;
	$("#geenvoorkeur").attr('checked', true);;
	$("#voorkeur").val("Keuken");

	$("#daghulpsamenmet").val("Nicole van Daal");
}
