<?php
session_start();
if(isset($_SESSION['email']) && isset($_SESSION['name']))
{
	$email=$_SESSION['email'];
	$name=$_SESSION['name'];
}
?>
<!DOCTYPE html>
<html lang="en" class="agni no-js">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta author="Nithin Sanjey and Vignesh">
	<link href='https://fonts.googleapis.com/css?family=PT+Sans:400,700|Merriweather:400italic,400' rel='stylesheet' type='text/css'>
	<link href='https://fonts.googleapis.com/css?family=Raleway:400' rel='stylesheet' type='text/css'>
	<link href='https://fonts.googleapis.com/css?family=Marvel:700' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
	<link href="css/freelancer.css" rel="stylesheet">
	<link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">
	<link href="css/bootstrap.css" rel="stylesheet" type="text/css">
	<link href="css/component.css" rel="stylesheet" type="text/css">
	<link href="css/normalize.css" rel="stylesheet" type="text/css">
	<link rel="stylesheet" href="css/style.css" type="text/css">
	<link rel="stylesheet" href="css/social.css" type="text/css">
	<script src="js/snap.svg-min.js"></script>
	<title>Agni - 15</title>
</head>
<body>
	<div id="preloader" hidden>
		<div id="1" hidden>
		<svg width="502px" height="502px" viewBox="0 0 502 502" version="1.1">
<circle class="path1" stroke="#d3110f" fill="#d3110f" cx="251" cy="251" r="250"></circle>
<circle class="path1" stroke="#dddddd" fill="#dddddd" cx="251" cy="251" r="205"></circle>
<path class="path1" d="M251,411 C339.365564,411 411,339.365564 411,251 C411,162.634436 339.365564,91 251,91 C162.634436,91 91,162.634436 91,251 C91,339.365564 162.634436,411 251,411 Z" stroke="#D52120" fill="#D52120"></path>
<circle class="path1" stroke="#00499d" fill="#00499d" cx="251" cy="251" r="115"></circle>
<polygon class="path1" stroke="#F7F7F7" fill="#F7F7F7" points="250.999997 308.5 183.404701 344.036958 196.314251 268.768479 141.6285 215.463048 217.202359 204.481515 251.000001 136 284.797664 204.481532 360.371518 215.463103 305.685744 268.768494 318.595296 344.03696 "></polygon>
			</svg></div>
		<div id="2" hidden><svg width="234px" height="340px" viewBox="-2 -2 236 342" version="1.1">
<g id="Group" stroke="rgb(180,20,20)" stroke-width="2" fill="none">
<path class="path" d="M5.63276137,182.54231 C6.80194953,193.172437 6.3213287,203.463688 8.78389181,213.305988 C10.8893725,221.721111 17.2164459,227.370951 20.3046414,235.047931 C22.6954227,240.991202 26.777593,245.814282 29.6168696,251.304822 C35.2175982,262.135407 56.0371828,337.714307 56.0371828,337.714307 L132.704815,337.714307 C132.704815,337.714307 160.705733,315.283257 173.036553,307.661609 C182.772217,301.64402 198.272915,283.720624 198.272915,283.720624 C198.272915,283.720624 206.932701,245.86977 214.495314,229.699603 C217.836426,222.555731 220.443269,212.466228 222.464701,200.907166 C222.48683,200.780625 223.103167,200.325007 223.266634,200.163245 C223.681908,199.7523 223.934824,199.476798 224.4066,198.785907 C225.002278,197.913567 225.542985,196.991182 225.943324,196.093396 C226.210144,195.495036 226.511624,194.766691 226.738562,194.309912 C227.147039,193.487729 227.618919,191.858807 227.823369,191.187781 C228.253181,189.777088 228.495384,189.025237 228.650347,188.166614 C228.683934,187.980515 230.030425,182.597722 230.883627,176.052008 C231.263252,173.139547 231.535873,170.000075 231.687372,166.980798 C231.753545,165.661991 231.803387,164.400955 231.888486,163.157758 C232.04826,160.823641 231.98299,158.213817 231.974911,155.880066 C231.957094,150.733641 231.600491,145.751759 231.121789,141.324454 C230.120098,132.060257 228.59446,125.32839 228.59446,125.32839 C228.59446,125.32839 228.650347,120.08005 228.650347,117.658292 C228.650347,108.520701 224.714553,97.0342203 223.830314,89.1118744 C218.874905,44.7138416 207.944892,26.1540212 179.03144,14.5543922 C163.897012,8.4826969 139.335592,0 117.79845,0 C79.2072247,0 35.7979014,21.0164772 12.5429347,54.868483 C3.90403848,67.4440326 4.65665878,81.6018722 1.51397958,97.2334808 C-2.23398125,115.875745 1.51397953,136.521269 1.51397953,157.8 C1.51397953,166.642709 4.70375912,174.095923 5.63276137,182.54231 Z"></path>
<path class="path" d="M98.6581966,176.290866 C98.6581966,176.290866 99.1212927,178.386675 100.432982,180.066144 C101.725568,181.721155 103.858062,182.956532 105.053563,183.443653 C106.818571,184.162826 110.311163,183.876835 113.999312,183.443653 C118.949437,182.862249 124.226711,181.920462 125.912624,181.88046 C133.685006,181.696046 143.614627,177.756277 143.614627,177.756277 L162.621944,167.942929 L154.49673,157.417364 C154.49673,157.417364 135.505697,163.857703 125.912623,166.790818 C118.42587,169.079918 103.257249,173.084007 103.257249,173.084007 L98.6581966,176.290866 Z" id="right-eye" fill="#4990E2"></path>
<path class="path" d="M11.7128323,170.694824 C11.7128323,170.694824 12.9740116,181.439742 17.4408649,183.185084 C25.715583,186.418281 49.9375458,185.630441 49.9375458,185.630441 L51.3263283,180.653678 L46.3375778,176.781708 L11.7128323,170.694824 Z" id="left-eye" fill="#4990E2"></path>            
<ellipse class="path" cx="220.310078" cy="157.2" rx="11.6899225" ry="44.4"></ellipse>
<ellipse class="path" cx="223.607235" cy="158.1" rx="8.39276486" ry="35.7"></ellipse>
<path class="path" d="M205.16142,257.069968 L204.02662,251.721838 C203.200382,247.827911 201.39308,241.665666 199.983114,237.940156 L186.169296,201.440316 L167.312606,243.098893 L151.529633,274.897142 L149.316556,280.136082 L132.515841,296.568444 L115.514765,285.903702 L55.6979359,286.309327 L51.840989,287.936383 L49.891546,293.800765 L39.4806764,280.264684"></path>
<path class="path" d="M194.337627,181.231481 L186.176483,201.202524 L177.196317,213.410805 L163.81206,230.377018 C161.351205,233.496459 157.905145,238.90214 156.109916,242.461162 L153.013738,248.599303 C151.220818,252.153751 149.533749,258.250134 149.245749,262.213442 L148.266938,275.683325 L132.12878,290.819054 L120.219641,280.287181 L49.4682501,281.898244 L46.8615659,290.032871"></path>
<path class="path" d="M50.6622452,318.41541 L57.7265898,310.781263 L72.2413693,310.197892 L74.0673855,305.346346 L92.8443872,304.762976 L94.0624903,310.047492 L111.268481,310.047492 L141.060777,319.315335 L178.093387,284.13536 L162.838638,294.929993 L149.217245,280.096174"></path>
<ellipse class="path" transform="translate(192.733850, 263.100000) rotate(14.000000) translate(-192.733850, -263.100000) " cx="192.73385" cy="263.1" rx="2.69767442" ry="5.1"></ellipse>
<path class="path" d="M174.026355,12.6174134 L169.487865,17.2932552 C166.718666,20.1462603 162.779378,25.2030573 160.689513,28.5874508 L157.323962,34.037732 L165.99062,38.6966084 C169.494422,40.5801238 174.835467,44.1301036 177.932696,46.6358384 L183.991501,51.5375611 L183.847056,57.9405908 C183.757357,61.9168514 183.206733,68.3328583 182.619024,72.2589855 L179.849992,90.7572128 L177.544308,106.765455 C176.977025,110.704073 175.900421,117.053408 175.135484,120.96839 L171.762371,138.232152 L180.930381,153.944907 L188.527514,111.891792 C189.235297,107.973933 190.773363,101.716226 191.956657,97.9347013 L193.54097,92.8716128 C194.72705,89.0811835 196.930253,83.0317212 198.458885,79.3671372 L213.050991,44.385537"></path>
<path class="path" d="M141.282422,2.63668846 L134.791041,9.77822094 L127.684098,18.1905018 L124.820956,23.1431151 L145.475765,29.5078751 L157.509038,34.082202"></path>
<path class="path" d="M10.5768439,58.0315472 L29.4327053,42.7882975 L36.781002,29.1745233"></path>
<path class="path" d="M29.56377,42.6492435 L37.8613285,37.8727934 C41.306665,35.8895019 47.156121,33.2736542 50.9447853,32.0240882 L56.9968728,30.0280067 L57.8640635,27.4624913 C59.137839,23.6941265 61.8466982,17.8819889 63.9130079,14.4831233 L65.5380282,11.8101329"></path>
<path class="path" d="M57.0513462,29.8705525 L54.0239924,38.7547732 L52.6332444,46.5628977 C52.6332444,46.5628977 69.9714804,40.2595769 80.2869593,39.6062984 C90.6024382,38.9530199 114.526118,42.6432265 114.526118,42.6432265 L124.725047,23.3094344"></path>
<path class="path" d="M52.7116579,46.2577505 L49.3293853,63.3187359 C48.5567286,67.2161995 47.6756075,73.5895679 47.3607301,77.561825 L45.4061251,102.219657 C45.4061251,102.219657 61.1449509,104.931583 69.319265,104.496676 C77.4935791,104.061769 94.4520096,99.6102157 94.4520096,99.6102157 L102.202953,74.4 L107.524761,59.2531816 C108.842522,55.5025957 111.275031,49.5371778 112.953978,45.9375024 L114.417028,42.8007119"></path>
<path class="path" d="M60.9313742,43.6619838 L53.9634453,67.9691317 L48.7626755,89.2363215 L45.5140222,102.108393"></path>
<path class="path" d="M194.33998,181.375592 L193.480419,177.510239 L180.939272,153.902647 L169.1131,167.786098 L143.405581,182.693266 C139.962313,184.689934 133.943345,186.36864 129.963469,186.44273 L105.939512,186.889966 C101.958906,186.964071 96.1166601,185.61665 96.1166601,185.61665 L96.1166601,185.61665 L94.7940983,177.246507 L50.3680122,179.617432 L47.7784613,188.841251 L42.0031511,189.604686 C38.0627842,190.12556 31.6558219,190.403409 27.6729275,190.224385 L22.7400068,190.00266 C18.7660097,189.824036 13.1719692,187.489732 10.2513565,184.794373 L5.25954168,180.187554"></path>
<path class="path" d="M2.09570264,164.827353 L10.5682255,169.574582 L26.6388817,172.732065 L45.412635,175.724716 L50.2845093,179.595116 L94.9253624,177.240092 L102.085958,172.184268 L124.740298,165.946289 L145.350303,159.092409 L153.539474,156.332695 L161.876527,167.044376 L169.458159,167.336156"></path>
<path class="path" d="M194.385725,181.150376 L191.447818,185.416533 C189.191398,188.693095 185.005161,193.561922 182.113478,196.276452 L174.985753,202.96751 L162.948539,214.650889 L154.50711,223.72649 C151.799555,226.637452 147.732625,231.626007 145.423648,234.868344 L130.549467,255.755136 C128.240365,258.99765 125.362594,264.684165 124.119589,268.463008 L120.235465,280.271072"></path>
<path class="path" d="M18.5087527,231.394093 L29.6506505,248.67255 L39.6642394,263.888481 L46.084218,276.550986 L49.5900589,282.203661"></path>
<path class="path" d="M183.95317,51.47048 C183.95317,51.47048 187.731927,43.9277824 190.453645,40.9662534 C193.233164,37.9418299 194.486825,37.5379936 194.486825,37.5379936 C197.783995,35.3148427 203.260042,35.107404 206.716031,37.0735931 L210.103507,39.000803"></path>
<path class="path" d="M97.5555478,175.606778 L98.0699842,176.910075 C99.5300542,180.609083 103.912979,183.243725 107.866873,182.793875 L130.153205,180.258275 C134.103808,179.8088 140.186208,177.990916 143.737456,176.198508 L161.783437,167.090228"></path>
<path class="path" d="M10.6238966,169.76763 L12.2334207,176.49703 C13.1595567,180.369193 17.1300117,183.615853 21.1105843,183.748946 L48.968031,184.680377"></path>
</g>
			</svg></div>
	<div id="flamingon">
		<span>
			Flaming On...
		</span>
		</div>
	</div>
	<div id="container">
	<div id="overlay">
		<div class="items">
			<img src="img/arts.png" height="100vh" width="auto" style="margin-top:-4.5vh">
			<a href="https://www.facebook.com/Asceg1516?ref=ts&fref=ts" target="_blank" class="btn btn-social-icon btn-facebook"><i class="fa fa-facebook"></i></a>
			<a href="https://www.instagram.com/artssociety" target="_blank" class="btn btn-social-icon btn-instagram"><i class="fa fa-instagram"></i></a>
			<a href="https://www.youtube.com/channel/UCmmuazRI65h3dZ0i73C5A4Q" target="_blank" class="btn btn-social-icon btn-google"><i class="fa fa-youtube"></i></a>
		</div>
		<div class="items">
			<img src="img/agni.png" height="100vh" width="auto" style="margin-top:-4vh">
		</div>
		<div class="items"><button id="logon" data-toggle="modal" data-target="#squarespaceModal" class="btn btn-warning">Login / Sign up</button>
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
													<input id="name" name="name" type="text" placeholder="Name" class="form-control" required>
												</div>
												<div class="form-group" id="elementusername">
													<input id="username" name="username" type="text" placeholder="Username" class="form-control" required>
												</div>
												<div class="form-group" id="elementpasswordt">
													<input id="password" name="password" type="password" placeholder="Password" pattern="^(?=.*[A-Za-z])(?	=.*\d)(?=.*[$@$!%*#?&])[A-Za-z\d$@$!%*#?&]{8,}$" class="form-control " title="Must contain 8 characters,minimum 1 alphabet 1 number and 1 special character" required>
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
													<input id="rollnumber" name="rollnumber" type="text" pattern="^[0-9]{10}$" title="Invalid Roll Number" 	placeholder="Roll Number" class="form-control " required>
												</div>
												<div class="form-group" id="elementdep">
													<select id="department" name="department" class="form-control" required>
														<option value="CSE">CSE</option>
														<option value="Civil">Civil</option>
														<option value="Manufacturing">Manufacturing</option>
														<option value="ECE">ECE</option>
														<option value="EEE">EEE</option>
														<option value="Mechanical">Mechanical</option>
														<option value="Bio - Medical">Bio - Medical</option>
														<option value="Printing">Printing</option>
														<option value="Agri">Agri</option>
														<option value="">Material - Science</option>
														<option value="">Industrial</option>
														<option value="">Mining</option>
														<option value="">Geo - Informatics</option>
														<option value="">IT</option>
														<option value="">M. Sc</option>
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
					</div>
				</div>
			</div>
		</div>
	<div class="projects-container">
		<ul>
			<li class="cd-single-project">
				<div class="cd-title">
					<div class="h2">About</div>
					<p class="description">Wanna know about us??</p>
				</div>
				<div class="cd-project-info" style="text-align:justify;">
					<p>
						Bored of your daily routine??
						Are you looking for fun, frolic and entertainment?<br>
						<span style="padding-left:5em;">Well, the heat is on comrades.  <span style="color:white;">Agni’15</span> is here. <br>
						<span style="padding-left:5em;">Agni’15, is an annual intra-college cultural fest that serves as a ramp for you to    launch your talents for the world to see. We present you with a roster of  breathtaking events that will linger in your memories for years to come.</span><br>
						<span style="padding-left:5em;">Agni’15 is brought to you by The Arts Society of CEG. Formerly known as the Students Association and Arts Society (SAAS), we have been the epitome of entertainment in our college, fostering the growth of talents of our students in various forms of Art. Ranging from classical arts, literature, fine arts, media skills, sports to various informal events, we provide with you a pallet of events which you can use to paint your skills for everyone to adore.<br>
						<span style="padding-left:5em;">SAAS , inaugurated in 1948, is a student run body with a rich heritage. Now called THE ARTS SOCIETY OF CEG, we bring you a lot more. We are a group of 18 students working to make your college life, the golden period your time.
Agni’15 will be organized from the 10th -12th of September 2015. Come enjoy the heat of the action and live the moment. And if you think Agni is fantastic, come February, we bring you Techofes, South India’s largest cultural fest. A 3-day 4-night spectacle you just cannot miss. So keep the flame burning guys!! There’s a in store………<br>
						<span style="text-align:center;">FLAME ON!!!!  <br>
					</p>
				</div>
			</li>
			<li class="cd-single-project">
				<div class="cd-title">
					<div class="h2">Gallery</div>
					<p class="description">Relive the past.</p>
				</div>
				<div class="cd-project-info">
					<section id="portfolio">
        <div class="container">
            <div class="row">
                <div class="col-sm-4 portfolio-item"><img src="img/portfolio/1.jpg" class="img-responsive"></div>
                <div class="col-sm-4 portfolio-item"><img src="img/portfolio/2.jpg" class="img-responsive"></div>
                <div class="col-sm-4 portfolio-item"><img src="img/portfolio/3.jpg" class="img-responsive"></div>
                <div class="col-sm-4 portfolio-item"><img src="img/portfolio/4.jpg" class="img-responsive"></div>
                <div class="col-sm-4 portfolio-item"><img src="img/portfolio/5.jpg" class="img-responsive"></div>
                <div class="col-sm-4 portfolio-item"><img src="img/portfolio/6.jpg" class="img-responsive"></div>
				<div class="col-sm-4 portfolio-item"><img src="img/portfolio/7.jpg" class="img-responsive"></div>
				<div class="col-sm-4 portfolio-item"><img src="img/portfolio/8.jpg" class="img-responsive"></div>
				<div class="col-sm-4 portfolio-item"><img src="img/portfolio/9.jpg" class="img-responsive"></div>
				<div class="col-sm-4 portfolio-item"><img src="img/portfolio/10.jpg" class="img-responsive"></div>
				<div class="col-sm-4 portfolio-item"><img src="img/portfolio/16.jpg" class="img-responsive"></div>
                <div class="col-sm-4 portfolio-item"><img src="img/portfolio/12.jpg" class="img-responsive"></div>
                <div class="col-sm-4 portfolio-item"><img src="img/portfolio/13.jpg" class="img-responsive"></div>
                <div class="col-sm-4 portfolio-item"><img src="img/portfolio/14.jpg" class="img-responsive"></div>
                <div class="col-sm-4 portfolio-item"><img src="img/portfolio/15.jpg" class="img-responsive"></div>
				
            </div>
        </div>
    </section>
				</div>
			</li>
			<li class="cd-single-project">
				<div class="cd-title">
					<div class="h2">Events</div>
					<p class="description">There's plenty in store!!</p>
				</div>
				<div class="cd-project-info">
					<section id="grid" class="grid clearfix">
						YOU ARE AT : <span id="location" style="cursor:pointer;">EVENTS</span>
					<span id="back" style="text-decoration:none;cursor:pointer;float:right;" hidden>Back or Esc</span>
					<hr style="width:1000px;">
				<a href="#" class="list" data-category-name="ADVENTURE" data-path-hover="m 180,60 -180,0 L 0,0 180,0 z">
					<figure>
						<img src="img/events/cat/adventure.jpg" style="height:350px" />
						<svg viewBox="0 0 180 320" preserveAspectRatio="none"><path d="M 180,160 0,218 0,0 180,0 z"/></svg>
						<figcaption>
							<h2>Adventure</h2>
							<p>Come, Experience</p>
							<button id="view">View</button>
						</figcaption>
					</figure>
				</a>
				<a href="#" class="list" data-category-name="ARTS" data-path-hover="m 180,60 -180,0 L 0,0 180,0 z">
					<figure>
						<img src="img/events/cat/art.jpg" style="height:350px" />
						<svg viewBox="0 0 180 320" preserveAspectRatio="none"><path d="M 180,160 0,218 0,0 180,0 z"/></svg>
						<figcaption>
							<h2>Arts</h2>
							<p>For the Michael Angelos and Dantes in you.</p>
							<button id="view">View</button>
						</figcaption>
					</figure>
				</a>
				<a href="#" class="list" data-category-name="DANCE" data-path-hover="m 180,60 -180,0 L 0,0 180,0 z">
					<figure>
						<img src="img/events/cat/dance.jpg" style="height:350px" />
						<svg viewBox="0 0 180 320" preserveAspectRatio="none"><path d="M 180,160 0,218 0,0 180,0 z"/></svg>
						<figcaption>
							<h2>Dance</h2>
							<p>Ready 1 2 3 Goooo!!!!</p>
							<button id="view">View</button>
						</figcaption>
					</figure>
				</a>
				<a href="#" class="list" data-category-name="DESIGNANDMEDIA" data-path-hover="m 180,60 -180,0 L 0,0 180,0 z">
					<figure>
						<img src="img/events/cat/media.jpg" style="height:350px" />
						<svg viewBox="0 0 180 320" preserveAspectRatio="none"><path d="M 180,160 0,218 0,0 180,0 z"/></svg>
						<figcaption>
							<h2>Design &#38; Media</h2>
							<p>Is there a Nolan among you somewhere?</p>
							<button id="view">View</button>
						</figcaption>
					</figure>
				</a>
				<a href="#" class="list" data-category-name="LIFESTYLE" data-path-hover="m 180,60 -180,0 L 0,0 180,0 z">
					<figure>
						<img src="img/events/cat/lifestyle.jpg" style="height:350px" />
						<svg viewBox="0 0 180 320" preserveAspectRatio="none"><path d="M 180,160 0,218 0,0 180,0 z"/></svg>
						<figcaption>
							<h2>Lifestyle</h2>
							<p>The Grand Finale!!</p>
							<button id="view">View</button>
						</figcaption>
					</figure>
				</a>
				<a href="#" class="list" data-category-name="LITERATURE" data-path-hover="m 180,60 -180,0 L 0,0 180,0 z">
					<figure>
						<img src="img/events/cat/litera.jpg" style="height:350px" />
						<svg viewBox="0 0 180 320" preserveAspectRatio="none"><path d="M 180,160 0,218 0,0 180,0 z"/></svg>
						<figcaption>
							<h2>Literature</h2>
							<p>For thou art the</p>
							<button id="view">View</button>
						</figcaption>
					</figure>
				</a>
				<a href="#" class="list" data-category-name="MUSIC" data-path-hover="m 180,60 -180,0 L 0,0 180,0 z">
					<figure>
						<img src="img/events/cat/music.jpg" style="height:350px" />
						<svg viewBox="0 0 180 320" preserveAspectRatio="none"><path d="M 180,160 0,218 0,0 180,0 z"/></svg>
						<figcaption>
							<h2>Music</h2>
							<p>Create your own symphony.</p>
							<button id="view">View</button>
						</figcaption>
					</figure>
				</a>
				<a href="#" class="list" data-category-name="ONLINE" data-path-hover="m 180,60 -180,0 L 0,0 180,0 z">
					<figure>
						<img src="img/events/cat/online.jpg" style="height:350px" />
						<svg viewBox="0 0 180 320" preserveAspectRatio="none"><path d="M 180,160 0,218 0,0 180,0 z"/></svg>
						<figcaption>
							<h2>Online</h2>
							<p>The web awaits you.</p>
							<button id="view">View</button>
						</figcaption>
					</figure>
				</a>
				<a href="#" class="list" data-category-name="QUIZ" data-path-hover="m 180,60 -180,0 L 0,0 180,0 z">
					<figure>
						<img src="img/events/cat/quiz.jpg" style="height:350px" />
						<svg viewBox="0 0 180 320" preserveAspectRatio="none"><path d="M 180,160 0,218 0,0 180,0 z"/></svg>
						<figcaption>
							<h2>Quiz</h2>
							<p>We know you're clever… But are you smart?</p>
							<button id="view">View</button>
						</figcaption>
					</figure>
				</a>
				<a href="#" class="list" data-category-name="SPORTS" data-path-hover="m 180,60 -180,0 L 0,0 180,0 z">
					<figure>
						<img src="img/events/cat/spo.jpg" style="height:350px" />
						<svg viewBox="0 0 180 320" preserveAspectRatio="none"><path d="M 180,160 0,218 0,0 180,0 z"/></svg>
						<figcaption>
							<h2>Sports</h2>
							<p>Well we just cant miss sport.</p>
							<button id="view">View</button>
						</figcaption>
					</figure>
				</a>
				<a href="#" class="list" data-category-name="THESPIAN" data-path-hover="m 180,60 -180,0 L 0,0 180,0 z">
					<figure>
						<img src="img/events/cat/thespain.jpg" style="height:350px" />
						<svg viewBox="0 0 180 320" preserveAspectRatio="none"><path d="M 180,160 0,218 0,0 180,0 z"/></svg>
						<figcaption>
							<h2>Thespian</h2>
							<p>Enna ma ipdi panreengale ma!!</p>
							<button id="view">View</button>
						</figcaption>
					</figure>
				</a>
				<a href="#" class="list" data-category-name="WORDGAMES" data-path-hover="m 180,60 -180,0 L 0,0 180,0 z">
					<figure>
						<img src="img/events/cat/word%20games.jpg" style="height:350px" />
						<svg viewBox="0 0 180 320" preserveAspectRatio="none"><path d="M 180,160 0,218 0,0 180,0 z"/></svg>
						<figcaption>
							<h2>Word games</h2>
							<p>Let the games begin.</p>
							<button id="view">View</button>
						</figcaption>
					</figure>
				</a>
							<script>
								var category=["LIFESTYLE","LITERATURE","MUSIC","SPORTS","THESPIAN","WORDGAMES","WORDGAMES","ARTS","DANCE","ONLINE","ARTS","LITERATURE","ARTS","LITERATURE","ARTS","ADVENTURE","ARTS","DANCE","ONLINE","SPORTS","QUIZ","LITERATURE","LITERATURE","LITERATURE","ADVENTURE","ARTS","THESPIAN","ARTS","ONLINE","ADVENTURE","ARTS","WORDGAMES","QUIZ","DESIGNANDMEDIA","LITERATURE","DANCE","QUIZ","WORDGAMES","LITERATURE","ADVENTURE","THESPIAN","ARTS","MUSIC"];
								var title=["AGNI DUDE AND AGNI DUDETTE","AGNI REPORTER","BANDS","BOX FOOTBALL","CEG KU PUTHUSU","CONNECTIONS","CROSSIE","DOODLES","DUAL DANCE","DUBSMASH","EGG SHELL PAINTING","ENGLISH DEBATE","FACE PAINTING","FICTION WRITING","FIRELESS COOKING","GAMINDROME","GRAFITTI","GROUP DANCE","GROUPIE","GULLY CRICKET","INDIA QUIZ","JAM","KAVITHAI ","KOLLY QUIZ","MATERIAL HUNT","MEHANDHI","MONOACTING","NEWSPAPER DRESSING","ONLINE PHOTOGRAPHY","PHOTO HUNT","RANGOLI","SCRABBLE","SHERLOCK","SHORT FILM","SITHIRAM PESUTHADI","SOLO DANCE","SPORTS","SUDOKU","TAMIL DEBATE","TREASURE HUNT","VARIETY SHOW","VEG CARVING","VOCALS(OPEN GENRE)"];
								var quotes=["The Grand Finale","Good morning… and the headlines.","Beetles, rolling stones, BSB, Linkin Park… Who's next?","","Vaango Vaango!!","","","Scribble your dream.","Sway to the beat.","The latest craze.","Careful you don't break it.","Can you speak your way to victory?? Come along then.","Why so serious??","Make Believe.","Thee illai. Pugai Illai. ","Game ON","You gangsters. Wassup!!","Hit the dance floor!","Random clicks are sometimes the best.","Off side la podra….","","Don't stop!!","Uyirkudu unarvugaluku.","Superstar arasiyaluku varuvara matara?","Sniff out all the clues.","Its festival time.","Actions speak louder than words.","Best from waste.","Live your passion and let the world see it.","Perfect shot.","Lets paint the floors.","Are you the master of word play?","","Take, Camera, Action!!!","","Move it and groove it..","","","Neeya Naana.","The greatest treasure the world has ever seen.","All mix.","Make the eatable, adorable.","Sa re ga ma pa da ne…"];
								var count=0;
								for(var i=0;i<43;i++)
								{
									count++;
									document.write("<a class='event' data-toggle='modal' data-target='#eventsdetails' href=# data-path-hover='m 180,60 -180,0 L 0,0 180,0 z' data-category="+category[i]+" hidden><figure><img src='img/events/eve/"+count+".jpg' style='height:350px'/><svg viewBox='0 0 180 320' preserveAspectRatio='none'><path d='M 180,160 0,218 0,0 180,0 z'/></svg><figcaption><h2>"+title[i]+"</h2><p>"+quotes[i]+"</p><button id='view'>View</button></figcaption></figure></a>");
								}
							</script>
			</section>
				</div>
			</li>
			<li class="cd-single-project">
				<div class="cd-title">
					<div class="h2">Updates</div>
					<p class="description">Jarvis… Whats new today??</p>
				</div>
				<div class="cd-project-info">
					<p>
						
					</p>
				</div>
			</li>
			<li class="cd-single-project">
				<div class="cd-title">
					<div class="h2">Contact Us</div>
					<p class="description">The people who make it happen.</p>
				</div>
				<div class="cd-project-info">
					<div id="contactus">
							<div>
								<span><img src="img/contact/vigneshr.jpg"><p>Vignesh. R<br>Technical Design<br>+919698429136</p></span><br>
								<span><img src="img/contact/hari.jpg"><p>Harinarayanan. G<br>Corporate Relations<br>+919841022196</p></span><br>
								<span><img src="img/contact/dhivya.jpg"><p>Dhivya. P<br>Human Resource<br>+919788016522</p></span><br>
								
								<span><img src="img/contact/lenin.jpg"><p>Lenin Periyar<br>Logistics<br>+919489428795</p></span><br>
							</div>
							<div>
								<span><img src="img/contact/devanandhd.jpg"><p>Devanandh. D<br>Events<br>+917708817708</p></span><br>
								<span><img src="img/contact/vishnu.jpg"><p>Vishnu. M<br>Marketing<br>+919042222681</p></span><br>
								<span><img src="img/contact/hemalatha.jpg"><p>Hemalatha. K<br>Permissions & Docs<br>+918680900274</p></span><br>
								<span><img src="img/contact/krishna.jpg"><p>Krishna. M<br>Contents<br>+917200339939</p></span><br>
								<span><img src="img/contact/rajesh.jpg"><p>Rajesh. M<br>Events<br>+919942900807</p></span><br>
							</div>
							<div>
								<span><img src="img/contact/vigneshk.jpg"><p>Vignesh. K<br>Events<br>+918903234414</p></span><br>
								<span><img src="img/contact/rokesh.jpg"><p>Rokesh Kanna. D<br>Contents<br>+918754766983</p></span><br>
								<span><img src="img/contact/soundharya.jpg"><p>Soundharaya. M<br>Corporate Relations<br>+919003036924</p></span><br>
								<span><img src="img/contact/arwin.jpg"><p>Arwin Thomas<br>Finance<br>+919789896959</p></span><br>
								<span><img src="img/contact/omar.jpg"><p>Omar Hasan<br>Pro Shows & Celebrities<br>+918056154435</p></span><br>
							</div>
							<div>
								<span><img src="img/contact/thillai.jpg"><p>Thillai Raja. S. T. S<br>Logistics<br>+919791535375</p></span><br>
								<span><img src="img/contact/abishek.jpg"><p>Kalpathi S.Abhishek<br>Pro Shows & Celebrities<br>+919841721062</p></span><br>
								<span><img src="img/contact/saravanan.jpg"><p>Saravanan. N<br>Finance<br>+919952515596</p></span><br>
								<span><img src="img/contact/n.jpg"><p>Mohammed Nadheem<br>Human Resource<br>+917708817708</p></span><br>
							</div>
						</div>
				</div>
			</li>
		</ul>
				<a href="#" class="cd-close">Close</a>
		<a href="#" class="cd-scroll">Scroll</a></div>
<script src="js/jquery-2.1.3.min.js"></script>
<script src="js/main.js"></script>
<script src="js/bootstrap.js"></script>
<script src="js/script.js"></script>
<script src="js/classie.js"></script>
				
				<script src="http://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
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
		
	</div>
		<div id="popup">
  				<div class="modal-dialog">
					<div class="modal-content" style="height:80vh;">
						<div class="modal-header">
							<button type="button" id="eventsclose" class="close" data-dismiss="modal"><span aria-hidden="true">×</span></button>
							<h3 class="modal-title signin" id="lineModalLabel" style="font-family:'Marvel','sans-serif';">Sign In</h3>
						</div>
						<div class="modal-body">
  						<ul class="nav nav-tabs" role="tablist">
    						<li role="presentation" class="active"><a href="#description" aria-controls="description" role="tab" data-toggle="tab">Description</a></li>
    						<li role="presentation"><a href="#rules" aria-controls="rules" role="tab" data-toggle="tab">Rules and Format</a></li>
    						<li role="presentation"><a href="#contact" aria-controls="contact" role="tab" data-toggle="tab">Contact</a></li>
  						</ul>
  						<div class="tab-content" style="padding:15px;">
    						<div role="tabpanel" class="tab-pane active" id="description" style="margin:auto;padding:20px;text-align:justify;">
								
							</div>
    						<div role="tabpanel" class="tab-pane" id="rules">
								Will be updated soon...
							</div>
    						<div role="tabpanel" class="tab-pane" id="contact">
								Will be updated soon...
							</div>
  						</div>
						</div>
					</div>
				</div>
			</div>
</body>
</html>