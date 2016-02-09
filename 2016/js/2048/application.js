// Wait till the browser is ready to render the game (avoids glitches)
window.requestAnimationFrame(function () {
  new GameManager(4, KeyboardInputManager, HTMLActuator, LocalScoreManager);
});


    var imageList = [
        "img/2.gif",
        "img/4.gif",
        "img/8.gif",
        "img/16.gif",
        "img/32.gif",
        "img/64.gif",        
        "img/128.gif",
        "img/212/doge-shake-space-212.gif",
        "img/212/doge-sunglasses-212.gif",        
        "img/212/doge-shake-212.gif",
        "img/212/doge-wink-212.gif",
        "img/2.gif",
        "img/4.gif",
        "img/8.gif",
        "img/16.gif",
        "img/32.gif",
        "img/64.gif",        
        "img/128.gif",
        "img/114/doge-shake-space-114.gif",
        "img/114/doge-sunglasses-114.gif",        
        "img/114/doge-shake-114.gif",
        "img/114/doge-wink-114.gif",
    ];
    for(var i = 0; i < imageList.length; i++ ) 
    {
        var imageObject = new Image();
        imageObject.src = imageList[i];
    }
