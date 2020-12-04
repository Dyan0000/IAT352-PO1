$(document).ready(function(){

	$(document).on('click', '.menu_item', function(){
		$(".item_modal").find(".modal_title").text($(this).find(".item_name").text());
		$(".item_modal").find(".modal_description").text($(this).find(".item_description").text());
		$(".item_modal").find(".modal_price").text($(this).find(".item_price").text());
		$(".item_modal").find(".modal_image").attr("src", $(this).find(".item_image img").attr("src"));
		$(".overlay").show();
		$(".item_modal").show();
		// alert("Hi, modal works!");
	});

	$(document).on('click', '.close', function(){
		$(".overlay").hide();
		$(".item_modal").hide();
	});

});
