/******************************************************************************/
/*	Image preloader															  */
/******************************************************************************/

$('.image-preloader img').each(function()
{
	$(this).attr('src',$(this).attr('src') + '?i='+getRandom(1,100000));
	$(this).bind('load',function()
	{
		$(this).parent().first().css('background-image','none');
		$(this).animate({opacity:1},1000);
	});
});
