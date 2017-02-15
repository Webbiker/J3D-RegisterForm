$(document).ready(function(){
	console.log("zijn we d'r?");

	$("#registerChild").validate({
		debug: true,

		rules: {
			namechild: {
				required: true
			},
			adres: {
				required: true
			},
			email: {
				required: true,
				email: true
			}
		},

		messages: {
			namechild: "U bent de naam van het kind vergeten in te vullen.",
			adres: "U bent uw adres vergeten in te vullen.",
			email: {
				required: "U bent vergeten uw e-mailadres in te vullen.",
				email: "Het ingevulde e-mailadres is geen geldig adres."
			}
		}


	});
});