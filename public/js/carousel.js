$(document).ready(function() {
	$("#owl-demo").owlCarousel({
	navigation: true,
	items: 2,
	navigationText: [
			"<i class='fa fa-chevron-circle-left fa-3x'></i>",
			"<i class='fa fa-chevron-circle-right fa-3x'></i>"
		]
	});
	$(".item").each(function(index, el) {
		var url = $(this).attr('src');
		jQuery.getScript(url);
	});
});

$("body").on('click', ".item", function(event){
	console.log("click");
	var clone = $(this).clone();
	$(".selectedModelContainer").each(function(index, el) {
		console.log($(this).html());
		if ($(this).html() === ""){
			console.log("clone");
			$(this).append(clone);
			return ;
		}
	});
});
