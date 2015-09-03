var math=Math.round(Math.random())+1;
if(math==1)
	$("#flamingon").css("margin-top","90vh");
var math="#"+math+"";
$(math).show();
$("#preloader").show();
$(document).ready(function(){
	setTimeout(function(){
		$("#preloader").fadeOut();
		$("#container").fadeIn();
	$("#overlay").show();
	$("#preloader").hide();
	$(".description").hide();
    $(".cd-single-project").mouseover(function(){
		$(".cd-single-project").css("-webkit-filter","grayscale(0%)");
	});
	},00);
});