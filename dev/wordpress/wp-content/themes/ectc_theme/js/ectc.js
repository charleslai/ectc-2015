$(document).ready( function() {
	$("#submit").click( function() {
		var form = JSON.stringify(
				{
					email: $("#email").val(),
				});
		console.log(form);
		$.ajax({
			url: "https://docs.google.com/forms/d/1Zb-l4nFYYfEETKZdvaQA1NY08NzgNH_wEb_vPVoNAMo/formResponse",
			contentType: "application/json",
			dataType: "json",
			type: "POST",
			data: form,
			success: function(data) {
				//Do something cool
			}
		});
	});
});