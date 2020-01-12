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
    if($('.gallery-list').length > 0) {
        var grid = new Isotope(
            '.gallery-list',{
                masonry			: {columnWidth:185},
                resizable		: false,
                itemSelector	: 'li',
                animationEngine : 'jquery'
            }
        );
    }
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
        arrows: false,
        afterShow: function() {
            if (analytics_code) {
                gtag('event', 'load_portfolio', {'event_category': $(this).attr('href')});
            }
        }
    });

