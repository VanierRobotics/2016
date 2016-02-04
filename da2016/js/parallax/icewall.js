$(function()
{
	$(".wallpaper").parallax();
	
	$(".enButton").click(function()
	{
		$("#scene").css("transform", "translateZ(500px) translateX(15%)");
		setTimeout(function()
		{
			$("#scene").fadeOut(1500);
		}, 1200);
	});
	
	
	$(".frButton").click(function()
	{
		$("#scene").css("transform", "translateZ(500px) translateX(-10%)");
		setTimeout(function()
		{
			$("#scene").fadeOut(1500);
		}, 1200);
	});
});