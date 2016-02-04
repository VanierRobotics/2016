    $(document).ready(function($){
        usemap = $('img[usemap]');
        usemap.maphilight();
        usemap.imageMapResize();
    });


$(window).bind('resize', function(e)
{
    //window.resizeEvt;
    $(window).resize(function()
    {
        clearTimeout(window.resizeEvt);
        window.resizeEvt = setTimeout(function()
        {
            jQuery('img[usemap]').maphilight();
        }, 250);
    });
});


