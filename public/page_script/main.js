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

/******************************************************************************/
/*	Captify for portfolio images											  */
/******************************************************************************/

$('.gallery-list img').captify();

/******************************************************************************/
/*	Hover for portfolio images												  */
/******************************************************************************/

$('.gallery-list').hover(

    function() {},
    function()
    {
        $(this).find('li img').animate({opacity:1},250);
    }

);

$('.gallery-list li').hover(

    function()
    {
        $(this).siblings('li').find('img').css('opacity',0.5);
        $(this).find('img').animate({opacity:1},250);
    },

    function()
    {
        $(this).find('img').css('opacity',1);
    }

);

/******************************************************************************/
/*	Portfolio filter														  */
/******************************************************************************/

$(window).resize(function()
{
	$('.gallery-list').isotope(
	{
		masonry			: {columnWidth:185},
		resizable		: false,
		itemSelector	: 'li',
		animationEngine : 'jquery'
	});
});

$('.filter-list li a').bind('click',function(e)
{
	filterGallery(e,this);
});

$('.filter-select-box').bind('change',function(e)
{
	filterGallery(e,this)
});


$('.fancybox-iframe').fancybox(
    {
        type: 'ajax',
        arrows: false
        // helpers					:	helpers
    });

