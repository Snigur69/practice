$(function() {
	$('.person').mouseover(function() {
		$(this).parent().children().last().slideDown();
	});
	$('.person').mouseout(function() {
		$(this).parent().children().last().slideUp();
	});
});