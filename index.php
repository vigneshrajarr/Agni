<?php
session_start();
if(isset($_SESSION['username']) && isset($_SESSION['name']))
{
	$username=$_SESSION['username'];
	$name=$_SESSION['name'];
}
?>
<!DOCTYPE html>
<html lang="en" class="agni no-js">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href='https://fonts.googleapis.com/css?family=PT+Sans:400,700|Merriweather:400italic,400' rel='stylesheet' type='text/css'>
	<link href='https://fonts.googleapis.com/css?family=Raleway:400' rel='stylesheet' type='text/css'>
	<link href='https://fonts.googleapis.com/css?family=Marvel:700' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
	<link href="css/bootstrap.css" rel="stylesheet" type="text/css">
	<link href="css/component.css" rel="stylesheet" type="text/css">
	<link href="css/normalize.css" rel="stylesheet" type="text/css">
	<link rel="stylesheet" href="css/style.css" type="text/css">
	<link rel="stylesheet" href="css/social.css" type="text/css">
	<script src="js/snap.svg-min.js"></script>
	<title>Agni - 15</title>
	<style>
	</style>
</head>
<body>
	<div class="projects-container">
		<ul>
			<li class="cd-single-project">
				<div class="cd-title">
					<div class="h2">About</div>
					<p class="description">There is no one who loves pain itself, who seeks after it and wants to have it, simply because it is pain</p>
				</div>
				<div class="cd-project-info">
					<p>
						Bored of your daily routine??
						Are you looking for fun, frolic and entertainment?<br>
						<span style="padding-left:5em;">Well, the heat is on comrades.  <span style="color:red;">Agni’15</span> is here. <br>
						<span style="padding-left:5em;">Agni’15, is an annual intra-college cultural fest that serves as a ramp for you to    launch your talents for the world to see. We present you with a roster of  breathtaking events that will linger in your memories for years to come.</span><br>
						<span style="padding-left:5em;">Agni’15 is brought to you by The Arts Society of CEG. Formerly known as the Students Association and Arts Society (SAAS), we have been the epitome of entertainment in our college, fostering the growth of talents of our students in various forms of Art. Ranging from classical arts, literature, fine arts, media skills, sports to various informal events, we provide with you a pallet of events which you can use to paint your skills for everyone to adore.<br>
						<span style="padding-left:5em;">SAAS , inaugurated in 1948, is a student run body with a rich heritage. Now called THE ARTS SOCIETY OF CEG, we bring you a lot more. We are a group of 18 students working to make your college life, the golden period your time.
Agni’15 will be organized from the 10th -12th of September 2015. Come enjoy the heat of the action and live the moment. And if you think Agni is fantastic, come February, we bring you Techofes, South India’s largest cultural fest. A 3-day 4-night spectacle you just cannot miss. So keep the flame burning guys!! There’s a in store………<br>
						<span style="text-align:center;">FLAME ON!!!!  <br>
					</p>
				</div> <!-- .cd-project-info -->
			</li>

			<li class="cd-single-project">
				<div class="cd-title">
					<div class="h2">Gallery</div>
					<p class="description">There is no one who loves pain itself, who seeks after it and wants to have it, simply because it is pain</p>
				</div> <!-- .cd-title -->

				<div class="cd-project-info">
					<p>
						
					</p>
				</div>
			</li>
			<li class="cd-single-project">
				<div class="cd-title">
					<div class="h2">Events</div>
					<p class="description">There is no one who loves pain itself, who seeks after it and wants to have it, simply because it is pain</p>
				</div>
				<div class="cd-project-info">
						<section id="grid" class="grid clearfix">
							YOU ARE AT : <span id="location" style="cursor:pointer;">EVENTS</span>
					<span id="back" style="text-decoration:none;cursor:pointer;float:right;" hidden>Back or Esc</span>
					<hr style="width:1000px;">
				<a href="#" class="list" data-category-name="ARTS" data-path-hover="m 180,60 -180,0 L 0,0 180,0 z">
					<figure>
						<img src="img/1.png" style="height:350px" />
						<svg viewBox="0 0 180 320" preserveAspectRatio="none"><path d="M 180,160 0,218 0,0 180,0 z"/></svg>
						<figcaption>
							<h2>Arts</h2>
							<p>Soko radicchio bunya nuts gram dulse.</p>
							<button id="view">View</button>
						</figcaption>
					</figure>
				</a>
				<a href="#" class="list" data-category-name="CLASSICALARTS" data-path-hover="m 180,60 -180,0 L 0,0 180,0 z">
					<figure>
						<img src="img/1.png" style="height:350px" />
						<svg viewBox="0 0 180 320" preserveAspectRatio="none"><path d="M 180,160 0,218 0,0 180,0 z"/></svg>
						<figcaption>
							<h2>Classical Arts</h2>
							<p>Two greens tigernut soybean radish.</p>
							<button id="view">View</button>
						</figcaption>
					</figure>
				</a>
				<a href="#" class="list" data-category-name="DESIGNANDMEDIA" data-path-hover="m 180,60 -180,0 L 0,0 180,0 z">
					<figure>
						<img src="img/1.png" style="height:350px" />
						<svg viewBox="0 0 180 320" preserveAspectRatio="none"><path d="M 180,160 0,218 0,0 180,0 z"/></svg>
						<figcaption>
							<h2>DESIGN &#38; MEDIA</h2>
							<p>Beetroot water spinach okra water.</p>
							<button id="view">View</button>
						</figcaption>
					</figure>
				</a>
				<a href="#" class="list" data-category-name="FUN" data-path-hover="m 180,60 -180,0 L 0,0 180,0 z">
					<figure>
						<img src="img/1.png" style="height:350px" />
						<svg viewBox="0 0 180 320" preserveAspectRatio="none"><path d="M 180,160 0,218 0,0 180,0 z"/></svg>
						<figcaption>
							<h2>Fun</h2>
							<p>Water spinach arugula pea tatsoi.</p>
							<button id="view">View</button>
						</figcaption>
					</figure>
				</a>
				<a href="#" class="list" data-category-name="INFORMALS" data-path-hover="m 180,60 -180,0 L 0,0 180,0 z">
					<figure>
						<img src="img/1.png" style="height:350px" />
						<svg viewBox="0 0 180 320" preserveAspectRatio="none"><path d="M 180,160 0,218 0,0 180,0 z"/></svg>
						<figcaption>
							<h2>Informals</h2>
							<p>Pea horseradish azuki bean lettuce.</p>
							<button id="view">View</button>
						</figcaption>
					</figure>
				</a>
				<a href="#" class="list" data-category-name="LIFESTYLE" data-path-hover="m 180,60 -180,0 L 0,0 180,0 z">
					<figure>
						<img src="img/1.png" style="height:350px" />
						<svg viewBox="0 0 180 320" preserveAspectRatio="none"><path d="M 180,160 0,218 0,0 180,0 z"/></svg>
						<figcaption>
							<h2>Lifestyle</h2>
							<p>A grape silver beet watercress potato.</p>
							<button id="view">View</button>
						</figcaption>
					</figure>
				</a>
				<a href="#" class="list" data-category-name="ONLINE" data-path-hover="m 180,60 -180,0 L 0,0 180,0 z">
					<figure>
						<img src="img/1.png" style="height:350px" />
						<svg viewBox="0 0 180 320" preserveAspectRatio="none"><path d="M 180,160 0,218 0,0 180,0 z"/></svg>
						<figcaption>
							<h2>Online</h2>
							<p>Chickweed okra pea winter purslane.</p>
							<button id="view">View</button>
						</figcaption>
					</figure>
				</a>
				<a href="#" class="list" data-category-name="QUIZ" data-path-hover="m 180,60 -180,0 L 0,0 180,0 z">
					<figure>
						<img src="img/1.png" style="height:350px" />
						<svg viewBox="0 0 180 320" preserveAspectRatio="none"><path d="M 180,160 0,218 0,0 180,0 z"/></svg>
						<figcaption>
							<h2>Quiz</h2>
							<p>Salsify taro catsear garlic gram.</p>
							<button id="view">View</button>
						</figcaption>
					</figure>
				</a>
				<a href="#" class="list" data-category-name="SPEAKING" data-path-hover="m 180,60 -180,0 L 0,0 180,0 z">
					<figure>
						<img src="img/1.png" style="height:350px" />
						<svg viewBox="0 0 180 320" preserveAspectRatio="none"><path d="M 180,160 0,218 0,0 180,0 z"/></svg>
						<figcaption>
							<h2>Speaking</h2>
							<p>Salsify taro catsear garlic gram.</p>
							<button id="view">View</button>
						</figcaption>
					</figure>
				</a>
				<a href="#" class="list" data-category-name="SPORTS" data-path-hover="m 180,60 -180,0 L 0,0 180,0 z">
					<figure>
						<img src="img/1.png" style="height:350px" />
						<svg viewBox="0 0 180 320" preserveAspectRatio="none"><path d="M 180,160 0,218 0,0 180,0 z"/></svg>
						<figcaption>
							<h2>Sports</h2>
							<p>Salsify taro catsear garlic gram.</p>
							<button id="view">View</button>
						</figcaption>
					</figure>
				</a>
				<a href="#" class="list" data-category-name="THESPIAN" data-path-hover="m 180,60 -180,0 L 0,0 180,0 z">
					<figure>
						<img src="img/1.png" style="height:350px" />
						<svg viewBox="0 0 180 320" preserveAspectRatio="none"><path d="M 180,160 0,218 0,0 180,0 z"/></svg>
						<figcaption>
							<h2>Thespian</h2>
							<p>Salsify taro catsear garlic gram.</p>
							<button id="view">View</button>
						</figcaption>
					</figure>
				</a>
				<a href="#" class="list" data-category-name="WORDGAMES" data-path-hover="m 180,60 -180,0 L 0,0 180,0 z">
					<figure>
						<img src="img/1.png" style="height:350px" />
						<svg viewBox="0 0 180 320" preserveAspectRatio="none"><path d="M 180,160 0,218 0,0 180,0 z"/></svg>
						<figcaption>
							<h2>Word games</h2>
							<p>Salsify taro catsear garlic gram.</p>
							<button id="view">View</button>
						</figcaption>
					</figure>
				</a>
				<a href="#" class="list" data-category-name="WRITING" data-path-hover="m 180,60 -180,0 L 0,0 180,0 z">
					<figure>
						<img src="img/1.png" style="height:350px" />
						<svg viewBox="0 0 180 320" preserveAspectRatio="none"><path d="M 180,160 0,218 0,0 180,0 z"/></svg>
						<figcaption>
							<h2>Writing</h2>
							<p>Salsify taro catsear garlic gram.</p>
							<button id="view">View</button>
						</figcaption>
					</figure>
				</a>
<div class="modal fade" id="eventsdetails" tabindex="-1" role="dialog" aria-labelledby="modalLabel" aria-hidden="true">
  <div class="modal-dialog">
	<div class="modal-content">
		<div class="modal-header">
			<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span><span class="sr-only">Close</span></button>
			<h3 class="modal-title" id="lineModalLabel">Sign In</h3>
		</div>
		<div class="modal-body">
  <ul class="nav nav-tabs" role="tablist">
    <li role="presentation" class="active"><a href="#home" aria-controls="home" role="tab" data-toggle="tab">Description</a></li>
    <li role="presentation"><a href="#profile" aria-controls="profile" role="tab" data-toggle="tab">Rules and Format</a></li>
    <li role="presentation"><a href="#messages" aria-controls="messages" role="tab" data-toggle="tab">Contact</a></li>
  </ul>
  <div class="tab-content">
    <div role="tabpanel" class="tab-pane active" id="home"></div>
    <div role="tabpanel" class="tab-pane" id="profile"></div>
    <div role="tabpanel" class="tab-pane" id="messages"></div>
  </div>

</div>
				</div>
			</div>
		</div>
							<script>
								var category=["DESIGNANDMEDIA","INFORMALS","SPEAKING","SPORTS","INFORMALS","WRITING","WRITING","WORDGAMES","WORKSHOP","THESPIAN","CLASSICALARTS","ONLINE","INFORMALS","ARTS","SPEAKING","ARTS","ONLINE","ARTS","INFORMALS","INFORMALS","ARTS","CLASSICALARTS","ONLINE","SPORTS","QUIZ","CLASSICALARTS","SPEAKING","FUN","INFORMALS","ARTS","INFORMALS","LIFESTYLE","FUN","ONLINE","WORKSHOP","WRITING","ARTS","WORDGAMES","THESPIAN","QUIZ","DESIGNANDMEDIA","CLASSICALARTS","DESIGNANDMEDIA","QUIZ","WORDGAMES","SPEAKING","ARTS","INFORMALS","INFORMALS","THESPIAN","ARTS","CLASSICALARTS"];
								var title=["AD MAKING",
										   "ADZAP","AGNI REPORTER",
										   "BOX FOOTBALL",
										   "CONNECTIONS",
										   "CREATIVE WRITING",
										   "CREATIVE WRITING(TAM)",
										   "CROSSIE",
										   "DANCE",
										   "DRAMATICS",
										   "DUAL DANCE","DUBSMASH","DUMB CHARADES","EGG SHELL PAINTING","ENGLISH DEBATE","FACE PAINTING","FICTION WRITING","FIRELESS COOKING","FREESTYLE DANCING","GAMINDROME","GRAFITTI","GROUP DANCE","GROUPIE","GULLY CRICKET","INDIA QUIZ","INSTRUMENTALS","JAM","LASER TAG","MATERIAL HUNT","MODERN ART","MONOACTING","MR&MRS AGNI","NEWSPAPER DRESSING","ONLINE PHOTOGRAPHY","PHOTOGRAPHY","POETRY WRITING","RANGOLI","SCRABBLE","SCRIPT WRITING","SHERLOCK","SHORT FILM","SOLO DANCE","SPOOF TRAILER","SPORTS","SUDOKU","TAMIL DEBATE","TATOOS","TREASURE HUNT","TUG-OF-WAR","VARIETY SHOW","VEG CARVING","VOCALS"];
								var description=["",
												 "Bring your acting skills and creativity to limelight. Here is an opportunity to feature in ads. Take part in Agni's adzap as its your story, your script, your screenplay, your dialogues and your acting!",
												 "News everywhere. Collect, report and distribute news and the let the world know the journalist in you. Join as Agni reporter and gain a real time experience of being a journalist! Happy",
												 "",
												 "",
												 "As commoly said, pen is mightier than the sword. Fight this war by unveiling the creative cart in Agni's creative writing (English). To all those creative minds-let the spontaneity flow.",
												 "",
												 "",
												 "",
												 "",
												 "",
												 "",
												 "",
												 "",
												 "",
												 "",
												 "",
												 "",
												 "",
												 "",
												 "",
												 "",
												 "",
												 "",
												 "",
												 "",
												 "",
												 "",
												 "",
												 "",
												 "",
												 "",
												 "",
												 "",
												 "",
												];
								for(var i=0;i<50;i++)
								{
									document.write("<a id='event' data-toggle='modal' data-target='#eventsdetails' href=# data-path-hover='m 180,60 -180,0 L 0,0 180,0 z' data-category="+category[i]+" hidden><figure><img src='img/1.png' style='height:350px'/><svg viewBox='0 0 180 320' preserveAspectRatio='none'><path d='M 180,160 0,218 0,0 180,0 z'/></svg><figcaption><h2>"+title[i]+"</h2><p>Salsify taro catsear garlic gram.</p><button id='view'>View</button></figcaption></figure></a>");
								}
							</script>
			</section>
				</div>
			</li>

			<li class="cd-single-project">
				<div class="cd-title">
					<div class="h2">Updates</div>
					<p class="description">There is no one who loves pain itself, who seeks after it and wants to have it, simply because it is pain</p>
				</div> <!-- .cd-title -->

				<div class="cd-project-info">
					<p>
						
					</p>
				</div> <!-- .cd-project-info -->
			</li>
			<li class="cd-single-project">
				<div class="cd-title">
					<div class="h2">Contact Us</div>
					<p class="description">There is no one who loves pain itself, who seeks after it and wants to have it, simply because it is pain</p>
				</div> <!-- .cd-title -->

				<div class="cd-project-info">
					<div id="contactus">
							<div>
								<span><img src="img/contact/vigneshk.jpg"><p>Vignesh. K<br>Events<br>+919874563210</p></span>
								<span><img src="img/contact/vigneshk.jpg"><p>Vignesh. K<br>Events<br>+919874563210</p></span>
								<span><img src="img/contact/vigneshk.jpg"><p>Vignesh. K<br>Events<br>+919874563210</p></span>
								<span><img src="img/contact/vigneshk.jpg"><p>Vignesh. K<br>Events<br>+919874563210</p></span>
							</div>
							<div>
								<span><img src="img/contact/devanandhd.jpg"><p>Devanandh. D<br>Events<br>+917708817708</p></span>
								<span><img src="img/contact/devanandhd.jpg"><p>Devanandh. D<br>Events<br>+917708817708</p></span>
								<span><img src="img/contact/devanandhd.jpg"><p>Devanandh. D<br>Events<br>+917708817708</p></span>
								<span><img src="img/contact/devanandhd.jpg"><p>Devanandh. D<br>Events<br>+917708817708</p></span>
								<span><img src="img/contact/devanandhd.jpg"><p>Devanandh. D<br>Events<br>+917708817708</p></span>
							</div>
							<div>
								<span><img src="img/contact/vigneshr.jpg"><p>Vignesh. R<br>Technical Design<br>+919698429136</p></span>
								<span><img src="img/contact/vigneshr.jpg"><p>Vignesh. R<br>Technical Design<br>+919698429136</p></span>
								<span><img src="img/contact/vigneshr.jpg"><p>Vignesh. R<br>Technical Design<br>+919698429136</p></span>
								<span><img src="img/contact/vigneshr.jpg"><p>Vignesh. R<br>Technical Design<br>+919698429136</p></span>
								<span><img src="img/contact/vigneshr.jpg"><p>Vignesh. R<br>Technical Design<br>+919698429136</p></span>
							</div>
							<div>
								<span><img src="img/contact/soundharyam.jpg"><p>Soundharya. M<br>Events<br>+917708817708</p></span>
								<span><img src="img/contact/soundharyam.jpg"><p>Soundharya. M<br>Events<br>+917708817708</p></span>
								<span><img src="img/contact/soundharyam.jpg"><p>Soundharya. M<br>Events<br>+917708817708</p></span>
								<span><img src="img/contact/soundharyam.jpg"><p>Soundharya. M<br>Events<br>+917708817708</p></span>
							</div>
						</div>
				</div>
			</li>
		</ul>
				<a href="#" class="cd-close">Close</a>
		<a href="#" class="cd-scroll">Scroll</a></div>
					<div id="bottom">
						<button data-toggle="modal" data-target="#squarespaceModal" class="btn btn-primary">Login / Sign up</button>
<div class="modal fade" id="squarespaceModal" tabindex="-1" role="dialog" aria-labelledby="modalLabel" aria-hidden="true">
  <div class="modal-dialog">
	<div class="modal-content">
		<div class="modal-header">
			<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span><span class="sr-only">Close</span></button>
			<h3 class="modal-title" id="lineModalLabel">Sign In</h3>
		</div>
		<div class="modal-body">
			<div class="container">
				<div class="row">
            <form>
				<div class="col-xs-3">
<div class="form-group" id="elementname"> 
  <input id="name" name="name" type="text" placeholder="Name" class="form-control" ng-model="user.email" required>
	<span ng-show="form.email.$dirty && form.email.$error.required"></span>
</div>
<div class="form-group" id="elementusername">
  <input id="username" name="username" type="text" placeholder="Username" class="form-control " required>
</div>
<div class="form-group" id="elementpasswordt">
    <input id="password" name="password" type="password" placeholder="Password" pattern="^(?=.*[A-Za-z])(?=.*\d)(?=.*[$@$!%*#?&])[A-Za-z\d$@$!%*#?&]{8,}$" class="form-control " title="Must contain 8 characters,minimum 1 alphabet 1 number and 1 special character" required>
</div>
<div class="form-group" id="elementc_password">
    <input id="c_password" name="c_password" type="password" placeholder="Confirm Password" pattern="^(?=.*[A-Za-z])(?=.*\d)(?=.*[$@$!%*#?&])[A-Za-z\d$@$!%*#?&]{8,}$" class="form-control " title="Must contain 8 characters,minimum 1 alphabet 1 number and 1 special character" class="form-control " required>
</div>
<div class="form-group">
	<h5><a id="loginalert" href="#">Already registered?</h5><button id="loginbutton" name="login" class="btn btn-primary">Login</button>
</div>
</div>
<div class="col-xs-3">
<div class="form-group" id="elementphone">
  <input id="phonenumber" name="phonenumber" type="text" pattern="^[0-9]{10}$" placeholder="Phone Number" title="Invalid Phone Number" class="form-control " required>
</div>
<div class="form-group" id="elementroll">
  <input id="rollnumber" name="rollnumber" type="text" pattern="^[0-9]{10}$" title="Invalid Roll Number" placeholder="Roll Number" class="form-control " required>
</div>
<div class="form-group" id="elementdep">
    <select id="department" name="department" class="form-control" required>
    </select>
</div>
<div class="form-group" id="elementbatch">
  <input id="batch" name="batch" type="text" placeholder="Batch" class="form-control " required>
</div>
					<div class="form-group" id="register">
						<h5><a id="registeralert" href="#">Not yet Registered? Click to register.</a></h5>
					<button id="registerbutton" name="register" class="btn btn-success">Register</button>
				</div>
</div>
</form>
				</div>
		</div>
	</div>
  </div>
	  </div></div>
						<a href="https://www.facebook.com/Asceg1516?ref=ts&fref=ts" target="_blank" class="btn btn-social-icon btn-facebook"><i class="fa fa-facebook"></i></a>
						<a class="btn btn-social-icon btn-twitter"><i class="fa fa-twitter"></i></a>
						<a class="btn btn-social-icon btn-instagram"><i class="fa fa-instagram"></i></a>
						<a class="btn btn-social-icon btn-google"><i class="fa fa-youtube"></i></a>
					</div>
<script src="js/jquery-2.1.3.min.js"></script>
<script src="js/main.js"></script>
<script src="js/bootstrap.js"></script>
<script src="js/script.js"></script>
			<script>
			(function() {
	
				function init() {
					var speed = 250,
						easing = mina.easeinout;

					[].slice.call ( document.querySelectorAll( '#grid > a' ) ).forEach( function( el ) {
						var s = Snap( el.querySelector( 'svg' ) ), path = s.select( 'path' ),
							pathConfig = {
								from : path.attr( 'd' ),
								to : el.getAttribute( 'data-path-hover' )
							};

						el.addEventListener( 'mouseenter', function() {
							path.animate( { 'path' : pathConfig.to }, speed, easing );
						} );

						el.addEventListener( 'mouseleave', function() {
							path.animate( { 'path' : pathConfig.from }, speed, easing );
						} );
					} );
				}

				init();

			})();
		</script>
</body>
</html>