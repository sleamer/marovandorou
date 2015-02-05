$(document).ready(function(){

	// Open All external links in a new window
	$("a[href*='http://']:not([href*='"+location.hostname+"'])").attr("target","_blank");
	$("a[href*='https://']:not([href*='"+location.hostname+"'])").attr("target","_blank");

	// open pdf files in new window
	$('a[href$=".pdf"]').attr('target', '_blank');

	$('#nav ul li.on').parent().parent().addClass('parent');
	$('#nav span.mobile-toggle').click(function () {
		$('#nav ul').first().slideToggle();
	});

});
