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
			container.addClass('project-is-open');
			project.addClass('is-full-width').siblings('li').removeClass('is-loaded');
		} else {
			var mq = window.getComputedStyle(document.querySelector('.projects-container'), '::before').getPropertyValue('content').replace(/"/g, "").replace(/'/g, ""),
				delay = ( mq == 'mobile' ) ? 100 : 0;

			container.removeClass('project-is-open');
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
	 //events popup
	 var event=["AGNI DUDE AND AGNI DUDETTE","AGNI REPORTER","BANDS","BOX FOOTBALL","CEG KU PUTHUSU","CONNECTIONS","CROSSIE","DOODLES","DUAL DANCE","DUBSMASH","EGG SHELL PAINTING","ENGLISH DEBATE","FACE PAINTING","FICTION WRITING","FIRELESS COOKING","GAMINDROME","GRAFITTI","GROUP DANCE","GROUPIE","GULLY CRICKET","INDIA QUIZ","JAM","KAVITHAI ","KOLLY QUIZ","MATERIAL HUNT","MEHANDHI","MONOACTING","NEWSPAPER DRESSING","ONLINE PHOTOGRAPHY","PHOTO HUNT","RANGOLI","SCRABBLE","SHERLOCK","SHORT FILM","SITHIRAM PESUTHADI","SOLO DANCE","SPORTS","SUDOKU","TAMIL DEBATE","TREASURE HUNT","VARIETY SHOW","VEG CARVING","VOCALS(OPEN GENRE)"];
	 var description=[
	 "Witness here how beauty coincides with talent and creates a lovely spirit and sparkle! Participate and gain the chances of being crowned as the star of the night! Good luck to all ladies and gentlemen out there!",
"News everywhere. Collect, report and distribute news and the let the world know the journalist in you. Join as Agni reporter and gain a real time experience of being a journalist! Happy reporting!",
"Have a team who can make the crowd move to your beats? Think you are the next Beetles in the making?? Come aboard folks and show us your worth.","","Ceg ku vandhachu, class ku poyachu, apuram enna??Ellathayum ippave sollita eppadi!!! Anga vandhu parunga..We're waiting!!",
"Compare, connect, concatenate, combine, clamp together and have fun! Agni brings connections to you! To all those who can sync well, have a good time here!",
"Are your mornings spent crouched over clues? Have you felt the high as you scribble the last letters in that 15 x 15 grid?  Agni presents you with Crossie, a platform to work on your english skills and win prizes!",
"Join to create doodles.The chances are you’ll start doodling. And what you choose to doodle will reveal volumes about your personality and mood. To scribble or draw aimlessly, to play or improvise idly. let's start doodling !",
"When the music fills the air, the feet move in unison. If along comes your pair, then nothing is more mellow",
"Dubsmash- the new selfie. Here is a chance to give a face to the voice of your favourite character! Master this new craze to win exciting prizes! And not to forget, have fun!!",
"Can you get the best out of waste? Agni presents Egg shell art and welcomes all those who are creative at heart, to decorate white matter without the use of grey matter. Good luck people!" ,
"Words are sharper than swords. Speak out and knock out your opponents in the english debate at agni. Shed off your fear, make yourself present here and let the world hear! Good luck boys and girls!",
"The human face is a great piece of art, make it more attractive with your creative heart. Join the face painting event in Agni to create masterpieces. *Caution: Superhero's mark under construction!*",
"Write what you will. This world is a fiction and is made up of contradiction. Take us all to a different world with your sense of creativity and style with fiction writing- The truth inside the lie!",
"No sizzling, no frizzling. To experience a chilly style to make mouth watering dishes to fill your belly, join fireless cooking at agni and show your talents in cooking without fire.",
"Are you the master of the thought ball? Can you strategically leaad your squadron against terrorists. Then ttihs is your que comrade. Come rule the game at Gamindrome.",
"Scribbling with dribbling paint with bubbling creativity is all that you have to do. Join Agni's Grafitti contest and make colors do all the work! Have a colorful time!",
"Like those bunch of flowers in the fields and like those bright bees on the flowers, come in flocks to lock your performance in our hearts forever by participating in agni's group dance! ",
"The chatters and laughs with your buddies is the best thing ever! How about double the joy with a competition? Its time to take a snap with your gang and reveal it to the spotlight. So grab your cameras and click a pic !",
"",
"India is a country, rich in history. Come aboard to test your patriotism toward ours Mother Nation at Agni's India quiz and show your also to gain unknown knowledge about her. Bharat matha ki jai!",
"Just-A-Minute invites the student speaker to talk on a given topic for sixty seconds without hesitation, repetition, or deviation. This is JAM and not an exam. So join 'Agni's JAM' without hesitation and make a mark out there !",
"kavidhai enbadhu manadhin moochu.. Unn manam nenaipadhai ootraga veliye kondu varum vaayil dhan kavidhai… varungal kavinjargale…. Ungalin sindhanaigalai parimaarungal.",
"Boologam release aguma?? Viswaroopam 2 la enna twist?? Y katappa killed Bahubali?? Know the answer to such questions….. Kolly quiz invites you to test your mettle…",
"Want to get to know the college well? Want to roam around the college with your friends? Do it with a purpose! Agni welcomes you to join material hunt. Search the college with your friends, find maximum number of materials to won exciting prizes! Happy hunting",
"Calling all ladies… Do you have what it takes to make your palm into a masterpiece?? Well, then this is the place to be. Mahendi Art. ",
"unleash all the hidden talents to portray different characters. R u the one who is a hit amongst friends since you can imitate different characters ? then here is a stage waiting for you ! come on and impress the crowd with your multi talented soul ! ",
"Good at designing dresses? Here is one step to improve your skills. Take part in Agni's newspaper dressing to make your dream dresses cheap and best! Good luck dressmakers!",
"Photohraphy has become a fad these days. A good snapshot keeps a moment from running away. Capture them and we are here to give it what it deserves! Good luck to all those shutterbugs out there!",
"have a craze for photography…. Come on guys and let the shutters keep clicking.",
"Holi is here for the floors. Decorate them with your impressive skills of creativity at modern art contest in agni. Have a happy, colorful and joyous rangoli holi!",
"Here is some work for your vocabulary skills. Take part in agni's Scrabble. Don’t babble and gabble, just scrabble your mind and bring out the words! Let the game of words begin!",
"Sherlock Holmes is the legendary great detective who solves even the most baffling cases. Bring out the detective in you by participating in Agni's sherlock to bring out the detective in you! Don’t overlook even the slightest component guys!",
"Are you the one who dreams to create magic on silver screen? Are you an aspiring director, writer or actor? Brand your film in a grand way at agni's Short film event and portray your talents to a wonderful crowd.",
"",
"Dancing is like dreaming with your feet. Don’t look at your feet to see if you are doing it right.  Just dance solemnly. Agni takes pride to invide all those enthusiasts to participate in solo dancing! Dance away!",
"In the game of sports, the line of victory and defeat is quite clear. It's time to get your game on, so come out and have fun. Reflect your knowledge on sports in Agni's sports quiz to win exciting prizes.",
"Do you have a knack for maths? Agni presents you with the puzzle, Sudoku! Play and win the game with numbers within a square and you wont go unaware.",
"vaadhangal valimaiyanavai. Medaiyum naduvarum koodi irundhal ! Arangam ondru kathirukindradhu",
"Precious treasures await you in the deep dark places across the campus. Explore the college by participating in Agni's treasure hunting. Find maximum treasures and win exciting prizes!",
"People who have a variety of talents to display, never mind in showcasing it here! Agni gives a warm welcome to all those happy, joyful, energetic minds to come aboard on 'variety show'. May the force be with you!",
"Carve vegetables to form beautiful objects. The products of vegetable carving are generally flowers or birds; however, the only limit is one’s imagination. Marvel and flaunt the art of vegetable carving !",
"With the seven swaras taking us beyond the  seven wonders, grace our event and embrace our souls. So come on and raise your voicespeak your mind and make some noise at agni's 'Vocals' to bring out the best voices in you!"];
	 $(".event").click(function(){
		 var title=$(this).children().children().next().next().children().html();
		 $(".signin").html(title);
		 for(var i=0;;i++)
		 {
			 if(event[i]==title)
			 {
				 $("#description").html(description[i]);
				 break;
			 }
		 }
		 $("#popup").fadeIn();
	});
	$("#eventsclose").click(function(){
		$("#popup").fadeOut();
	});
})(jQuery);