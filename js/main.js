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
	var popup=0;
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
		popup=1;
		console.log(popup);
	});
	$("#back").click(function(){
		$(show).fadeOut();
		$(".list").fadeIn("slow");
		$(this).hide();
		$("#location").html("EVENTS");
		popup=0;
		console.log(popup);
	});
	$("#location").click(function(){
		$(".list").fadeIn();
		$(show).fadeOut();
		$("#back").fadeOut();
		$(this).html("EVENTS");
		popup=0;
		console.log(popup);
	});
	$(document).keydown(function(e){
		if(e.keyCode==27)
		{
			if(popup==1)
			{
				$(".list").fadeIn();
				$(show).fadeOut();
				$("#back").fadeOut();
				$("#location").html("EVENTS");
				popup=0;
				console.log(popup);
			}
			else
			{
				if(popup==2)
				{
            		$("#popup").fadeOut();
					popup=1;
				}
			}
		}
	});
	var event=["AGNI DUDE AND AGNI DUDETTE","AGNI REPORTER","BATTLE OF BANDS","BOX FOOTBALL","CEG KU PUTHUSU","CONNECTIONS","CROSSIE","DOODLES","DUAL DANCE","DUBSMASH","EGG SHELL PAINTING","ENGLISH DEBATE","FACE PAINTING","FICTION WRITING","FIRELESS COOKING","GAMINDROME","GROUP DANCE","GROUPIE","GULLY CRICKET","GENERAL QUIZ","JAM","ஹைக்கூ கவிஞன் ","ஊமைவிழிகள்","MATERIAL HUNT","MEHANDHI","MONOACTING","NEWSPAPER DRESSING","ONLINE PHOTOGRAPHY","PHOTO HUNT","RANGOLI","SCRABBLE","SHERLOCK","SHORT FILM","சித்திரம் பேசுதடி","SOLO DANCE","SPORTS","SUDOKU","மூவேந்தர்","TREASURE HUNT","MOVIE SPOOF","VEG CARVING","VOCALS(OPEN GENRE)"];
    for(var i  = 0;i < event.length; i++)
    {
        console.log(i+". "+event[i]+"\n");
    }
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
"Are you the master of the through ball? Can you strategically lead your squadron against terrorists. Then ttihs is your que comrade. Come rule the game at Gamindrome.",
"Like those bunch of flowers in the fields and like those bright bees on the flowers, come in flocks to lock your performance in our hearts forever by participating in agni's group dance! ",
"The chatters and laughs with your buddies is the best thing ever! How about double the joy with a competition? Its time to take a snap with your gang and reveal it to the spotlight. So grab your cameras and click a pic !",
"",
"India is a country, rich in history. Come aboard to test your patriotism toward ours Mother Nation at Agni's India quiz and sure you also to gain unknown knowledge about her. Bharat matha ki jai!",
"Just-A-Minute invites the student speakers to talk on a given topic for sixty seconds without hesitation, repetition, or deviation. This is JAM and not an exam. So join 'Agni's JAM' without hesitation and make a mark out there !",
"Kavidhai enbadhu manadhin moochu.. Unn manam nenaipadhai ootraga veliye kondu varum vaayil dhan kavidhai… varungal kavinjargale…. Ungalin sindhanaigalai parimaarungal.",
"Boologam release aguma?? Viswaroopam 2 la enna twist?? Y katappa killed Bahubali?? Know the answer to such questions….. Kolly quiz invites you to test your mettle…",
"Want to get to know the college well? Want to roam around the college with your friends? Do it with a purpose! Agni welcomes you to join material hunt. Search the college with your friends, find maximum number of materials to win exciting prizes! Happy hunting",
"Calling all ladies… Do you have what it takes to make your palm into a masterpiece?? Well, then this is the place to be. Mahendi Art. ",
"unleash all the hidden talents to portray different characters. R u the one who is a hit amongst friends since you can imitate different characters ? then here is a stage waiting for you ! come on and impress the crowd with your multi talented soul ! ",
"Good at designing dresses? Here is one step to improve your skills. Take part in Agni's newspaper dressing to make your dream dresses cheap and best! Good luck dressmakers!",
"Photohraphy has become a fad these days. A good snapshot keeps a moment from running away. Capture them and we are here to give it what it deserves! Good luck to all those shutterbugs out there!",
"Have a craze for photography…. Come on guys and let the shutters keep clicking.",
"Holi is here for the floors. Decorate them with your impressive skills of creativity at modern art contest in agni. Have a happy, colorful and joyous rangoli holi!",
"Here is some work for your vocabulary skills. Take part in agni's Scrabble. Don’t babble and gabble, just scrabble your mind and bring out the words! Let the game of words begin!",
"Sherlock Holmes is the legendary detective who solves even the most baffling cases. Bring out the detective in you by participating in Agni's sherlock to bring out the detective in you! Don’t overlook even the slightest component guys!",
"Are you the one who dreams to create magic on silver screen? Are you an aspiring director, writer or actor? Brand your film in a grand way at agni's Short film event and portray your talents to a wonderful crowd.",
"",
"Dancing is like dreaming with your feet. Don’t look at your feet to see if you are doing it right.  Just dance solemnly. Agni takes pride to invide all those enthusiasts to participate in solo dancing! Dance away!",
"In sports, the line of victory and defeat is quite clear. It's time to get your game on, so come out and have fun. Reflect your knowledge on sports in Agni's sports quiz to win exciting prizes.",
"Do you have a knack for maths? Agni presents you with the puzzle, Sudoku! Play and win the game with numbers within a square and you wont go unaware.",
"Vaadhangal valimaiyanavai. Medaiyum naduvarum koodi irundhal ! Arangam ondru kathirukindradhu",
"Precious treasures await you in the deep dark places across the campus. Explore the college by participating in Agni's treasure hunting. Find maximum treasures and win exciting prizes!",
"People who have a variety of talents to display, never mind in showcasing it here! Agni gives a warm welcome to all those happy, joyful, energetic minds to come aboard on 'variety show'. May the force be with you!",
"Carve vegetables to form beautiful objects. The products of vegetable carving are generally flowers or birds; however, the only limit is one’s imagination. Marvel and flaunt the art of vegetable carving !",
"With the seven swaras taking us beyond the  seven wonders, grace our event and embrace our souls. So come on and raise your voicespeak your mind and make some noise at agni's 'Vocals' to bring out the best voices in you!"];
    
	var rules=["<strong>Rules :</strong><br>",
			   "<strong>Rules :</strong><br><ul><li>Each band will have 10 mins on stage including set up</li><li>A basic drumkit will be provided </li><li>All other  instruments should be brought by the participants</li><ul>",
			   "<strong>Rules :</strong><br>",
			   "<strong>Rules :</strong><br>",
			   "<strong>Rules :</strong><br>",
			   "<strong>Rules :</strong><br>",
			   "<strong>Rules :</strong><br>",
			   "<strong>Rules :</strong><br><ul><li>Each team can have atmost 2 people.</li><li>The time limit is 1 hour.</li><li>The theme will be announced on the spot.</li><li>The participants will be judged purely based on their creativite ideas.</li></ul>",
			   "<strong>Rules :</strong><br><ul>Track length : 5-5:30<li>Only boy-boy, girl-girl combination, no mixed combo allowed-</li><li>Any language songs allowed</li><li>Dangerous props not allowed</li><li>Any language songs, no dangerous props</li><li>no marketing/promotional costumes to be worn</li><li>track will be cut if it exceeds time limit</li><li>No preference for any particular style of dance</li></ul>",
			   "<strong>Rules :</strong><br><ul><li>Open theme.</li><li>Prizes will be based on the number of Facebook likes.</li><li>Entries with vulgar content will be disqualified.</li><li>Judges' decision will be final.</li><li>Post your entries with #asceg</li></ul>",
			   "<strong>Rules :</strong><br><ul><li>Each team should consist of only one people.</li><li>The theme will be announced on the spot</li><li>The time limit is 1:30 hour</li><li>Participants will be judged on the basis of creativity, innovation and design.</li><li>Decision of the judges will be final and binding</li><li>Materials will be provided</li></ul>",
			   "<strong>Rules :</strong><br><ul>The Elementary Rules:<li>Each team is to have two members.</li> <li>If you do not have a team member, yet wish to participate, please register yourself. We will help you find a team mate.</li><li>Debates will be held between two teams, one opposing and the other proposing the notion.</li><li>The topics will be provided 5 minutes before the event; the 5 minutes being prep time.</li><li>1 minute of prep time will be provided before the rebuttal round.</li><li>There will be two preliminary rounds and one final round. Depending upon the number of participants, the number of rounds may change.</li><li>Objectionable language is strictly prohibited.</li><li>Points of information are allowed.</li></ul><ul>Points of Information(POI)<li>A Point of Information is be a statement or question directed to a speaker during his/her speech, by the other team.</li><li>30 seconds – to ask one POI</li><li>A gap of 45 seconds between POIs.</li><li>Must be phrased as a question.</li><li>A speaker may Accepting the question by acknowledging the person raising the POI and continuing to answer it.</li><li>Accepting the POI but announce to take it at a later stage.</li><li>Deny the raised point.</li><li>Acceptance or denial of the POI is the sole discretion of the speaker. No points will be given if neither the team asks nor answers any POIs.</li><li>The first 45 seconds of any speech is the protected time, during which POIs cannot be raised</li></ul><ul>Prelims<li>6 minute speech time – for both speakers. </li><li>3 minutes rebuttal time – for one speaker from each team</li><li>5 minutes question session – by audience and judges.</li></ul><ul>Finals<li>8 minute speech time – for both speakers. </li><li>4 minutes rebuttal time – for one speaker from each team</li><li>5 minutes question session – by audience and judges.</li></ul>",
			   "<strong>Rules :<br></strong><br><ul><li>Each team should consist of 2 people</li><li>The theme will be announced on the spot</li><li>Participants will be judged on the basis of creativity, innovation and design.</li><li>Decision of the judges will be final and binding</li></ul>",
			   "<strong>Rules :</strong><br><ul><li>Time: 90 min</li><li>1.	The word limit for the story is 300-500 words.</li><li>2.	Participants get three prompts to choose from and write on.</li><li>3.	Get as creative as possible but strictly stick to prose format.</li><li>4.	There will be no extension of the time limit.</li></ul>",
			   "<strong>Rules :</strong><br><ul><li>1. Each team should consist of 2 people</li><li>2. The theme will be announced on the spot</li><li>3. The time limit is 1 hour </li><li>4. Participants will be judged on the basis of creativity, innovation and design.  </li><li>5. Decision of the judges will be final and binding</li><li>6. Materials will be provided</li></ul>",
			   "<strong>Rules :</strong><br>",
			   "<strong>Rules :</strong><br><ul><li>Track length : 5 - 6 minutes</li><li>Team limit : 25 people, on stage - 15</li><li>Any language songs, no dangerous props</li><li>no marketing/promotional costumes to be worn</li><li>track will be cut if it exceeds time limit</li><li>No preference for any particular style of dance</li></ul>",
			   "<strong>Rules :</stdrong><br><ul><li>Minimum of 5 people must be visible in the selfies.</li><li>Photo must be taken inside the campus.</li><li>Prizes will be based on Facebook likes.</li><li>Post your entries witn the #asceg tag.</li><li>Judges' decision will be final.</li></ul>",
			   "<strong>Rules :</strong><br>",
			   "<strong>Rules :</strong><br>",
			   "<strong>Rules :</strong><br>",
			   "<strong>Rules :</strong><br>",
			   "<strong>Rules :</strong><br>",
			   "<strong>Rules :</strong><br>",
			   "<strong>Rules :</strong><br><ul><li>Each team consists of 2 members. One person does the Mehandi design on the other person's hand.</li><li>The time duration is 1 hour</li><li>The Mehandi cones will be provided .</li><li>The Decisions of the judges will be impending and final.</li></ul>",
			   "<strong>Rules :</strong><br>",
			   "<strong>Rules :</strong><br><ul><li>Each team should consist of 2-3 people</li><li>The theme will be announced on the spot</li><li>The time limit is 1:30 hour </li><li>Participants will be judged on the basis of creativity, innovation and design.</li><li>Decision of the judges will be final and binding</li><li>Materials will be provided</li></ul>",
			   "<strong>Rules :</strong><br><ul><li>One photo per participant.</li><li>If the entry is found to be copyrighted image or image downloaded from internet ,the participant will be disqualified.</li><li>Image should be in  JPEG format.</li><li>Mail your entries to agniphotography15@gmail.com.</li><li>Prizes will be based on fb likes and the team's judgement.</li><li>Open theme.</li><li>Photo manipulation is not allowed... However minor colour correction is allowed</li></ul>",
			   "<strong>Rules :</strong><br>",
			   "<strong>Rules :</strong><br><ul><li>Each team can Have maximum of 3-4 people.</li><li>The theme will be announced on the spot.</li><li>The time limit is 1 hour.</li><li>Participants will be judged on the basis of creativity, innovation and design.</li><li>Decision of the judges will be final and binding.</li></ul>",
			   "<strong>Rules :</strong><br>",
			   "<strong>Rules :</strong><br>",
			   "<strong>Rules :</strong><br><ul> <li>No vulgarity(words , action)</li><li>No defamation (oraganization, individuals)</li><li>Duration : 10 -15 mins .</li><li>Formats : .mov , .avi , .mp4</li><li>Deadline: 8th September. </li>Subtitles complusory. <strong>Submission</strong>,<li>Send your links<li><br><strong>Mail:</strong>  <ul><li>vgnshkmr22@gmail.com<li><li>raagulram.g@gmail.com .</li> <li>Send your Cd's with cd sticker to Arts Society office, Anna University.</li></ul></ul>",
			   "<strong>Rules :</strong><br>",
			   "<strong>Rules :</strong><br><ul><li>Track length : 4 minutes to 4:30</li><li>Any language songs allowed,</li><li>Dangerous props such as fire and sprays not allowed</li><li>Any language songs, no dangerous props</li><li>no marketing/promotional costumes to be worn</li><li>track will be cut if it exceeds time limit</li><li>No preference for any particular style of dance</li></ul>",
			   "<strong>Rules :</strong><br><ul><li>There will be two rounds. </li><li>Prelims- Will be a written round with 25 questions. </li><li>Finals- Top teams from prelims will be selected to finals which consists of multiple rounds.</li> <li>Teams of 2 or 3. </li></ul>",
			   "<strong>Rules :</strong><br>",
			   "<strong>Rules :</strong><br>",
			   "<strong>Rules :</strong><br><ul>->Treasure Hunt clues will be placed around 3 campus CEG,ACT,SAP.<li>->There should be at least 2 members per team, with 3 being maximum members allowed.</li><li>->Damaging the clues is strictly prohibited. If we come to know that any team is responsible for the damage they will be out of the game without any queries.</li><li>->Registration will be onspot.</li><li>->Judges' decision will be final.</li></ul>",
			   "<strong>Rules :</strong><br><ul><li>#Time limit- 8 to 10mins</li><li>#Team size limit- 12 to 15 members</li><li>#Plagiarism not allowed</li><li>#Vulgarity at any stage of performance will lead to disqualification</li><li>#concept and performance must strictly adhere to the event i.e., only spoof is allowed</li><li>#Judges decision is final</li><strong>FAQ:</strong><ul><li>#Should i register online ??<br>Yes, prior registration will help u in getting slot.. only prefered number of teams are allowed!!</li><li># How can I register??<br>Mail us cegspartanz@gmail.com</li><li>#What are the details I should give?<br><li>All your team members name with roll number, year, dept and contact number</li><li>#Should we perform with Audio track?<br>Not necessarily..but it helps u a lot.. u can also enact with ur own dialogues.. u can lively speak over the mike on stage also</li><li>#When should I submit the audio track??<br>Mail us the audio track on or before Sept 9 and also do bring it in a pendrive to the event !!</li></ul></ul>",
			   "<strong>Rules :</strong><br><ul><li>1. Each team should consist of 2 people</li><li>2. The theme will be announced on the spot</li><li>3. The time limit is 1 hour </li><li>4. Participants will be judged on the basis of creativity, innovation and design.</li><li>5. Decision of the judges will be final and binding</li><li>6. Materials will be provided</li></ul>",
			   "<strong>Rules :</strong><br><ul><li>Solo singing 3 mins per person for prelims</li><li>5 ppl gets selected  to the finals</li></li>5 mins per person for finals</li>",
			  ];
    rules[19] +="<ul><li>1.Two or three persons in a team(Maximum 3)</li><li>2.Lonewolves are also allowed.</li><li>3.The first round is the prelims which will be a written round.</li><li>3.Six teams will be selected for the finals.</li><li>4.The finals will be oral which will consist of several rounds.</li></ul>";
    //console.log(rules[20]);
    rules[36] += "<ul><li>1. Bring a partner. Lone wolves are also welcome!</li><li>2. This event consist of two rounds with increased level of difficulty.</li><li>3. Time limit for round 1 - 30 mins and for round 2 1 hr</li><li>4. Decision of the judges is final.</li></ul>"
    rules[21] += "<ul><li>1 மணி நேரம்</li><li>ஹைக்கூ முறையில்  புகைப்படங்களைக் கொண்டு கவிதை புனையப் பட வேண்டும்.</li><li>பிற மொழி வார்த்தை கலந்திரல் கூடாது.</li><li>தனி நபர் பங்கேற்பு.</li></ul>"
    rules[33] +="<ul><li>1 மணி நேரம்</li><li>புகைப்படங்களைக் கொண்டு கதை சித்தரிக்க வேண்டும்.</li><li>ிற மொழி வார்த்தை கலந்திரல் கூடாது.</li><li>தனி நபர் பங்கேற்பு.</li></ul>"
    rules[6] +="<ul><li>1. Two per team. Lone wolves are also welcome!</li><li>2. Time limit is 45 mins.</li><li>3. Decision of the judges is final.</li></ul>"
    rules[18] +="<ul><li>1.only 4 players in a team </li><li>2.4 overs per team</li><li>3.umpire decision is final </li><li>4.registration fees-100 </li><li>5.on spot registration</li></ul>"
    //சித்திரம் பேசுதடி:மூவேந்தர்:
    rules[37] +="<ul><li>குழுக்களிடையேயான பேச்சுப் போர்.</li><li>குழுவுக்கு மூன்று பேர் பங்கேற்க வேண்டும்.</li><li>பிறமொழி வார்த்தை கலந்திரல் கூடாது.</li></ul>" 
//ஊமைவிழிகள்:
    rules[3] +="<ul><li>5 players per team and 3(rolling sub)</li><li>Registration fees :100</li><li>Timinig-5+2</li></ul>"
    rules[22] += "<ul><li>குழுவுக்கு மூன்று பேர் பங்கேற்க வேண்டும்.</li><li>கொடுக்கப்படும் தமிழ் வாக்கியம் சைகையின் மூலம் குழுவின் மற்ற உறுப்பினர்களுக்கு உணர்த்தப் படல் வேண்டும்.</li></ul>"
    rules[15] +="<ul>FIFA<li>*5 mins for a match</li><li>*knockout match</li><li>*registration fee-50</li><li>*participants should bring the joystick</li></ul><ul>Call Of Duty Modern Warfare(COD)<li>*Promod only(no perks are allowed)</li><li>*Search and Destroy match</li><li>*A team of four</li><li>*Knockout match</li><li>*registration fee- 100</li></ul><ul>Mobile Games<li>Registration Rs.10</li></ul>"
    rules[5] +=rules[6]
    rules[30] += rules[6]
    rules[23] +="<ul><li>1.max 2-3 no of persons</li><li>2.timing between 10.30 to 3.30 </li><li>3.results will be announced at 4.30</li> <li>4.collected materials should be produced at the help desk</li><li>5.the team producing the maximum no of materials will be declared winners if there is a tie timing will be taken into consideration.</li></ul>"
	var contact=[
		"",
		"",
		"Rahul - 9597778206<br>Sudhir - 9790704778",
		"",
		"",
		"",
		"",
		"Sushena -9176481781<br>Akshaya - 9840115589",
		"Navin - 8220417380",
		"K. Vignesh - 8903234414",//dub
		"Thivagar- 9042990560<br>Sujanitha - 8939212230",
		"",
		"Thivagar- 9042990560<br>Sujanitha - 8939212230",
		"Dharini.B :96770-76039<br>Gayathri Govindarajan : 80561-44282",
		"Thivagar- 9042990560<br>Sujanitha - 8939212230",
		"",
		"Nandhan Krishnan - 9600609893",
		"M. Vishnu - 9042222681",//group
		"",
		"",
		"",
		"",
		"",
		"",
		"Sushena -9176481781<br>Akshaya - 9840115589",
		"",
		"Srinath :8682881734<br>Pooludaiyar:9500925483",
		"R. Rajasekar - 9790685951",//on
		"",
		"Sushena -9176481781<br>Akshaya - 9840115589",
		"",
		"",
		"Raagul Ram : 9710716120<br>Lavanya : 8056163862",
		"",
		"Kannan - 9894317232",
		"Raja : 9629314522",
		"",
		"",
		"Ganapathy phn no: 9487140854",
		"",
		"Thivagar- 9042990560<br>Sujanitha - 8939212230",
        "Joshua - 9176703615<br>Mansi - 9791270407"
        
	];
    contact[31] = "Hari Prasad - 9790886711
    contact[23] = "Praveen - 9176270678"
    contact[3] = "Siva Kumar - 9444652580"
    contact[25] = "Imran - 9176154552<br>Adhithya - 9677270929"
    contact[0] = "Omar - 8056154435"
    contact[4] = "Ilamurugan - 9489223350"
    contact[15] = "Siva Kumar: 9444652580<br>Mangalamanian :9962594624"
    contact[18] = "Satheesh kumar: 9176411260"
    contact[11] = "Siddharth- +91 91-76-868200<br>Karthick- +91 96-77-276226"
    contact[33] = "Vinodh Kanna - 8056470830";
    contact[32] = "Vignesh - 9600346521"
    contact[1] = "Jai karthik - 9003694954"
    //contact[22] = "Jai karthik - 9003694954"
    //contact[37] = "Jai karthik - 9003694954";
    contact[22] = "Thivagar :9042990560"
    contact[21] = "Preetha :9487458667"
    contact[19] = "Krishna - 8122979309"
    contact[5] = "Sowmiya Ganesh - 9677137017"
    contact[6] = "Sowmiya Ganesh - 9677137017"
    contact[30] = "Sowmiya Ganesh - 9677137017"
    contact[36] = "Sowmiya Ganesh - 9677137017"
    contact[37] = "Ananthi :9962609420"
    contact[31] = ""
    contact[39] = "Ilamurugan - 9489223350<b>Naveen Raja - 9894434373"
    description[20] = "The object of the game is for panelists to talk for sixty seconds on a given subject, 'without hesitation, repetition or deviation'. There will be 6 panelists at a time. The question will be given on the spot and will be read by the moderator(‘mod’). The panelist to press the buzzer first will start or the mod will chose the first panelist to speak."
    rules[20] += "<ul><li>1. The panelist that manages to speak for 60 seconds first is the winner.</li><li>2. It is strictly an Individual event.</li><li>3. Points are given at the mod’s discretion.</li></ul>"
    contact[20] = "Vibha Sridhar - 9551732289"
    /*for(var i = 0;i<contact.length;i++)
    {
        console.log(i+" "+contact[i]+"\n");
    }
    */
    
	 $(".event").click(function(){
		 var title=$(this).children().children().next().next().children().html();
		 $(".signin").html(title);
		 for(var i=0;;i++)
		 {
			 if(event[i]==title)
			 {   if(title == "GENERAL QUIZ")
                {
                    console.log(i+" "+rules[i]);
                }
				 $("#description").html(description[i]);
				 $("#rules").html(rules[i]);
				 $("#contact").html(contact[i]);
				 break;
			 }
		 }
		 $("#popup").fadeIn();
		 popup=2;
	});
	$("#eventsclose").click(function(){
		$("#popup").fadeOut();
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
	 
})(jQuery);