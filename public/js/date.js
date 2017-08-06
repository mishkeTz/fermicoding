$(document).ready(function() {
	$("#date input").on("blur", function(e) {
		$("#date :input").each(function() {
			var elVal = $(this).val();

			if ((Math.floor(elVal) == elVal && $.isNumeric(elVal)) || elVal == '') {
				if ($(this).attr('id') !== 'submit') {
					$(this).css("background-color", "transparent");
				}
			} else {
				$(this).css("background-color", "red");
			}
		});
	});

	$('#date').on('submit', (function(e) {
		e.preventDefault();

		$.fn.checkDateForm = function() {
			var inputs = $("#date :input");

			var values = {};

			var isNumber = true;

			
			inputs.each(function() {
				var elVal = $(this).val();
				var id = $(this).attr('id');

				values[id] = elVal;

				if ((Math.floor(elVal) == elVal && $.isNumeric(elVal)) || elVal == '') {
					if (id !== 'submit') {
						$(this).css("background-color", "transparent");
					}
				} else {
					$(this).css("background-color", "red");
					isNumber = false;
				}

			});

			if (!isNumber) {
				return false;
			}

			if ((values.month_1 < 1 || values.month_1 > 12) || (values.month_2 < 1 || values.month_2 > 12)) {
				return false;
			} else if ((values.day_1 < 1 || values.day_1 > 31) || (values.day_2 < 1 || values.day_2 > 31)) {
				return false;
			} else if ((values.month_1 == 4 || values.month_2 == 4) || (values.month_1 == 6 || values.month_2 == 6) || (values.month_1 == 9 || values.month_2 == 9) || (values.month_1 == 11 || values.month_2 == 1) && (values.day_1 == 31 || values.day_2 == 31)) {
				return false;
			} else if ((values.year_1 < 1970 || values.year_1 > 2030) || (values.year_2 < 1970 || values.year_2 > 2030)) {
				return false;
			} else {
				return true;
			}
		}

		
		var validDate = $(this).checkDateForm();
		var message = $("#message");

		if (validDate == true) {

			if (message.hasClass('alert-danger')) {
				message.removeClass('alert-danger');
			}

			message.removeClass("message").addClass('alert-success').text("Inserted date is valid.");
		} else {

			if (message.hasClass('alert-success')) {
				message.removeClass('alert-success');
			}

			message.removeClass("message").addClass('alert-danger').text("Inserted date is invalid.");
		}
	}));
});