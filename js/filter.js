$(document).ready(function(){

	filter_data();

	function filter_data(){
		// $('.filter_data').html('<div id="loading"></div>');
		var action = 'fetch_data';
		var minimum_price = $('#hidden_minimum_price').val();		
		var maximum_price = $('#hidden_maximum_price').val();
		var meat = get_filter('meat');	
		var dietary = get_filter('dietary');
		$.ajax({
			url: "fetch_data.php",
			method: "POST",
			data: {action:action, minimum_price:minimum_price, maximum_price:maximum_price,
				meat:meat, dietary:dietary},
			success:function(data){
				$('.filter_data').html(data);
			}
		});
	}

	// Get the value of the checkbox that is selected by a user
	function get_filter(class_name){
		var filter = [];
		$('.' + class_name + ':checked').each(function(){
			filter.push($(this).val());
		});
		return filter;
	}

	// When clicking a checkbox, it will call filter_data() function:
	$('.checkbox-option').click(function(){
		filter_data();
	});


	// For price range slider
	$('#slider_range').slider({
		range: true,
		min: 0,
		max: 17,
		values: [2, 17],
		step: 0.5,
		stop:function(event, ui){
			$('#display_price').html(ui.values[0] + ' - ' + ui.values[1]);
			$('#hidden_minimum_price').val(ui.values[0]);
			$('#hidden_maximum_price').val(ui.values[1]);
			filter_data();
		}
	});

});





