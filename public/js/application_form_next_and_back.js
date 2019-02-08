$('#card1-button').click(function(){

	$('#card1').slideUp();
	$('#card2').slideDown();
});

$('#card2-button-back').click(function(){

	$('#card2').slideUp();
	$('#card1').slideDown();
});

$('#card2-button-next').click(function(){

	$('#card2').slideUp();
	$('#card3').slideDown();
});

$('#card3-button').click(function(){

	$('#card3').slideUp();
	$('#card2').slideDown();
});

