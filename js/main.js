jQuery(document).ready(function($){
	$(".description").hide();
	$(".cd-single-project").mouseover(function(){
		$(this).children().children().next().slideDown("fast");
	});
	$(".cd-single-project").mouseleave(function(){
		$(this).children().children().next().slideUp("fast");
	});
	$('.cd-single-project').bgLoaded({
	  	afterLoaded : function(){
	   		showCaption($('.projects-container li').eq(0));
	  	}
	});
	$(".cd-single-project").click(function(){
		$("#overlay").fadeOut();
	});
	$('.cd-single-project').on('click', function(){
		var selectedProject = $(this),
			toggle = !selectedProject.hasClass('is-full-width');
		if(toggle) toggleProject($(this), $('.projects-container'), toggle);
	});
	$('.projects-container .cd-close').on('click', function(){
		toggleProject($('.is-full-width'), $('.projects-container'), false);
		$("#overlay").fadeIn("slow");
	});
	$('.projects-container .cd-scroll').on('click', function(){
		$('.projects-container').animate({'scrollTop':$(window).height()}, 500); 
	});
	$('.projects-container').on('scroll', function(){
		window.requestAnimationFrame(changeOpacity);
	});
	function toggleProject(project, container, bool) {
		if(bool) {
			//expand project
			container.addClass('project-is-open');
			project.addClass('is-full-width').siblings('li').removeClass('is-loaded');
		} else {
			//check media query
			var mq = window.getComputedStyle(document.querySelector('.projects-container'), '::before').getPropertyValue('content').replace(/"/g, "").replace(/'/g, ""),
				delay = ( mq == 'mobile' ) ? 100 : 0;

			container.removeClass('project-is-open');
			//fade out project
			project.animate({opacity: 0}, 800, function(){
				project.removeClass('is-loaded');
				$('.projects-container').find('.cd-scroll').attr('style', '');
				setTimeout(function(){
					project.attr('style', '').removeClass('is-full-width').find('.cd-title').attr('style', '');
				}, delay);
				setTimeout(function(){
					showCaption($('.projects-container li').eq(0));
				}, 300);
			});		
		}
	}

	function changeOpacity(){
		var newOpacity = 1- ($('.projects-container').scrollTop())/300;
		$('.projects-container .cd-scroll').css('opacity', newOpacity);
		$('.is-full-width .cd-title').css('opacity', newOpacity);
		$('.is-full-width').hide().show(0);
	}
	function showCaption(project) {
		if(project.length > 0 ) {
			setTimeout(function(){
				project.addClass('is-loaded');
				showCaption(project.next());
			}, 150);
		}
	}
	var id;
	var show;
	var location;
	var locationid;
	$(".list").click(function(){
		id=$(this).data("category-name");
		$(".list").fadeOut();
		show="a[data-category="+id+"]";
		$(show).fadeIn("slow");
		$("#back").show();
		if(id=="CLASSICALARTS") id="CLASSICAL ARTS";
		if(id=="DESIGNANDMEDIA") id="DESIGN AND MEDIA";
		if(id=="WORDGAMES") id="WORD GAMES";
		else locationid=id;
		location="EVENTS > "+locationid;
		$("#location").html(location);
	});
	$("#back").click(function(){
		$(show).fadeOut();
		$(".list").fadeIn("slow");
		$(this).hide();
		$("#location").html("EVENTS");
	});
	$("#location").click(function(){
		$(".list").fadeIn();
		$(show).fadeOut();
		$("#back").fadeOut();
		$(this).html("EVENTS");
	});
	$(document).keydown(function(e){
        if(e.keyCode==27 && $("#list").css)
        {
            $(".list").fadeIn();
			$(show).fadeOut();
			$("#back").fadeOut();
			$("#location").html("EVENTS");
        }
    });
	var map=new Object();
		map["Agni"]=["ASD"];
		map["Adzap"]=["Bring"];
	$("#event").click(function(){
		
		alert(map["Agni"]);
	});
});
 (function($){
 	$.fn.bgLoaded = function(custom) {
	 	var self = this;
		var defaults = {
			afterLoaded : function(){
				this.addClass('bg-loaded');
			}
		};
		var settings = $.extend({}, defaults, custom);
		self.each(function(){
			var $this = $(this),
				bgImgs = window.getComputedStyle($this.get(0), '::before').getPropertyValue('content').replace(/'/g, "").replace(/"/g, "").split(', ');
			$this.data('loaded-count',0);
			$.each( bgImgs, function(key, value){
				var img = value.replace(/^url\(["']?/, '').replace(/["']?\)$/, '');
				$('<img/>').attr('src', img).load(function() {
					$(this).remove(); // prevent memory leaks
					$this.data('loaded-count',$this.data('loaded-count')+1);
					if ($this.data('loaded-count') >= bgImgs.length) {
						settings.afterLoaded.call($this);
					}
				});
			});

		});
	};
})(jQuery);