$(function()
{
	if( /Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent) ) {
		$("#iceWall").attr("data-depth", "0.60");
		$("#ground").attr("data-depth", "0.80");
		
	} else {
		$("#iceWall").attr("data-depth", "0.04");
		$("#ground").attr("data-depth", "0.1");
		
	}
	$(".wallpaper").parallax();
	
	$(".enButton").click(function()
	{
		$("#scene").css("transform", "translateZ(500px) translateX(15%)");
		setTimeout(function()
		{
			$("#scene").addClass("fadeOut");
		}, 1200);
	});
	
	
	$(".frButton").click(function()
	{
		$("#scene").css("transform", "translateZ(500px) translateX(-10%)");
		setTimeout(function()
		{
			$("#scene").addClass("fadeOut");
		}, 1200);
	});
	
	
	
	
});