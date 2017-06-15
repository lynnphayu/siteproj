$('.nav-toggle').click(function(){
	$('.nav-right').toggleClass('is-active');
});

$('.departments-toggle').click(function(){
	$('.departments-menu').toggleClass('is-hidden-mobile');
});

$('.departments-toggle>img').click(function(){
	$('.departments-toggle>img').toggleClass('hide')
})
$('.blueberry').blueberry();