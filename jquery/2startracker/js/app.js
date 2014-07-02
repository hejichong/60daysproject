$('#no-script').remove();



$('#celebs tbody tr').click(function() {
	$(this).toggleClass('zebraHover');
});

$('.spoiler').hide();
$('<input type="button" class="revealer" value="Tell Me!" />').insertBefore('.spoiler');
$('.revealer').click(function() {
	$(this).hide();
	$(this).next().fadeIn();
});

$('#menu li').hover(function(){
	$(this).animate({paddingLeft:'+=15px'},200);
}, function() {
	$(this).animate({paddingLeft:'-=15px'},200);
});


$('#bio > div').hide();

$('#bio > div:first').show();

$('#bio h3').click(function(){
	$(this).next().animate(
		{'height':'toggle'},'slow','easeOutBounce'
	);
});




$('a[rel=celeb]').colorbox({
		transition:'fade',
		speed:500,
		current:"{current} of {total} celebrity photos"
	});
