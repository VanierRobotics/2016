$(function()
{
	// Mobile device detection
	if( /Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent) )
	{
		$("#iceWall").attr("data-depth", "0.15");
		$("#ground").attr("data-depth", "0.35");
		$("#ground img").attr("src", "images/icewall/layer3_ipad.png");
		$("#iceWall img").attr("src", "images/icewall/layer2.png");
		$(".enButton").css("left", "25%");
		$(".frButton").css("right", "25%");
		$(window).trigger("resize");
	}

	else
	{
		$("#iceWall").attr("data-depth", "0.04");
		$("#ground").attr("data-depth", "0.1");
		$("#ground img").attr("src", "images/icewall/layer3.png");
		$(".enButton").css("left", "35%");
		$(".frButton").css("right", "35%");

	}
	// Mobile device detection

	// set up parallax
	$(".wallpaper").parallax();

	// pop up the buttons (cuz why not???!!)
	setTimeout(function()
	{
		$(".button").css("transform", "translateZ(100px)");

		setTimeout(function()
		{
			$(".button").css("transform", "translateZ(0px)");
		}, 500);
	}, 2000);


	$(".button").click(function()
	{
		var selectedLanguage;
		if($(this).hasClass("enButton"))
			selectedLanguage = "en";

		else
			selectedLanguage = "fr";

		sceneAnimation();
		setTimeout(function()
		{
			$("#scene").remove();
			$(".vLogo").fadeOut(1000, function()
			{
				if(selectedLanguage == "en")
				{
					location = "en";
				}
				else
				{
					location = "fr";
				}
			});
		}, 1000);
	});




	// Other functions....
	function sceneAnimation()
	{
		$("#scene").addClass("fadeOut");
		$(".button").addClass("fadeOut");
	}


	$(window).resize(function()
	{
		var height = $(window).height();
		$(".wallpaper img").css("height", height);
	});
});