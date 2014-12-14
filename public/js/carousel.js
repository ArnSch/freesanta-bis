$(document).ready(function() {
	$("#resultModel").hide();
	$("#btn_merge").hide();
	$("#owl-demo").owlCarousel({
	navigation: true,
	items: 2,
	navigationText: [
			"<i class='fa fa-chevron-circle-left fa-3x'></i>",
			"<i class='fa fa-chevron-circle-right fa-3x'></i>"
		]
	});
});

$("body").on('click', ".item", function(event){
	var clone = $(this).clone();
	var added = false;
	$(".selectedModelContainer").each(function(index, el) {
		if (!$(this).hasClass('full') && !added){
			added = true;
			$(this).append(clone);
			$(this).addClass('full')
			$(this).css('background-color', 'white');
			return ;
		}
	});
	if ($(".full").length === 4)
		$("#btn_merge").show();
});

$("#btn_merge").click(function(event) {
	$("#selectedModels").hide();
	$("#resultModel").show();
});
