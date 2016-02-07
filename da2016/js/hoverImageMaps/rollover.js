$.fn.maphilight.defaults = {
    fill: true,
    fillColor: 'e6d123',
    fillOpacity: 0.1,
    stroke: true,
    strokeColor: 'e6d123',
    strokeOpacity: 0.45,
    strokeWidth: 8,
    fade: true,
    alwaysOn: false,
    neverOn: false,
    groupBy: false,
    wrapClass: true,
    shadow: true,
    shadowX: 0,
    shadowY: 0,
    shadowRadius: 6,
    shadowColor: '000000',
    shadowOpacity: 0.8,
    shadowPosition: 'outside',
    shadowFrom: false
};

$(window).bind('resize', function(e)
{
    window.resizeEvt;
    $(window).resize(function()
    {
        clearTimeout(window.resizeEvt);
        window.resizeEvt = setTimeout(function()
        {
            $('img[usemap]').maphilight();
        }, 250);
    });
});

$(document).ready(function($){

    $('img[usemap]').maphilight();
    $('map').imageMapResize();

    $('area').qtip({
        style: {
            classes: 'qtip-dark qtip-shadow qtip-bootstrap',
        },
        position: {
            target: 'mouse', // Track the mouse as the positioning target
            adjust: { x: 5, y: 5 } // Offset it slightly from under the mouse
        }
    });

    $(document).ready(function(){
        $('#q').qtip({
            style: {
                classes: 'qtip-dark qtip-shadow qtip-bootstrap',
            },
            position: {
                adjust: { x: -250, y: 5 }
            },
            content: 'This is the tooltip',
            show: {
                when: false, // Don't specify a show event
                ready: true // Show the tooltip when ready
            },
            hide: {

            }
        })
    });
});




