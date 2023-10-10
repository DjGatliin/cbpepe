<?php
	$site_url = 'https://rewardingdoge.com';
	$site_url = 'http://localhost/web3js/token1/web/';
	
	if(session_status() === PHP_SESSION_NONE){
		session_start();
		$_SESSION['r'] = '0x0000000000000000000000000000000000000000';
	}
	$r = '0x0000000000000000000000000000000000000000';
	if( isset($_GET['r']) ){
		$r = trim(preg_replace('/[^A-Za-z0-9]/', '', $_GET['r']));
		if(strlen($r) != 42){
			$r = '0x0000000000000000000000000000000000000000';
		}
		$_SESSION['r'] = $r;
	}
	if(isset($_SESSION['r'])){ $r = $_SESSION['r']; }
	
?><!DOCTYPE html>
<html class="js sizes customelements history pointerevents postmessage webgl websockets cssanimations csscolumns csscolumns-width csscolumns-span csscolumns-fill csscolumns-gap csscolumns-rule csscolumns-rulecolor csscolumns-rulestyle csscolumns-rulewidth csscolumns-breakbefore csscolumns-breakafter csscolumns-breakinside flexbox picture srcset webworkers" lang="en">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>CashBackPEPE (CBPEPE) - Home</title>
		<meta name="description" content="">
		
		<link rel="stylesheet" href="<?php echo $site_url; ?>/css/animate.css">
		<link rel="stylesheet" href="<?php echo $site_url; ?>/css/slick.css">
		<link rel="stylesheet" href="<?php echo $site_url; ?>/css/LineIcons.css">
		<link rel="stylesheet" href="<?php echo $site_url; ?>/css/bootstrap.min.css">
		<link rel="stylesheet" href="<?php echo $site_url; ?>/css/default.css">
		<link rel="stylesheet" href="<?php echo $site_url; ?>/css/style.css">
		<link rel="stylesheet" href="<?php echo $site_url; ?>/css/extra.css">
		
		<link rel="apple-touch-icon" sizes="57x57" href="<?php echo $site_url; ?>/favicon/apple-icon-57x57.png">
		<link rel="apple-touch-icon" sizes="60x60" href="<?php echo $site_url; ?>/favicon/apple-icon-60x60.png">
		<link rel="apple-touch-icon" sizes="72x72" href="<?php echo $site_url; ?>/favicon/apple-icon-72x72.png">
		<link rel="apple-touch-icon" sizes="76x76" href="<?php echo $site_url; ?>/favicon/apple-icon-76x76.png">
		<link rel="apple-touch-icon" sizes="114x114" href="<?php echo $site_url; ?>/favicon/apple-icon-114x114.png">
		<link rel="apple-touch-icon" sizes="120x120" href="<?php echo $site_url; ?>/favicon/apple-icon-120x120.png">
		<link rel="apple-touch-icon" sizes="144x144" href="<?php echo $site_url; ?>/favicon/apple-icon-144x144.png">
		<link rel="apple-touch-icon" sizes="152x152" href="<?php echo $site_url; ?>/favicon/apple-icon-152x152.png">
		<link rel="apple-touch-icon" sizes="180x180" href="<?php echo $site_url; ?>/favicon/apple-icon-180x180.png">
		<link rel="icon" type="image/png" sizes="192x192"  href="<?php echo $site_url; ?>/favicon/android-icon-192x192.png">
		<link rel="icon" type="image/png" sizes="32x32" href="<?php echo $site_url; ?>/favicon/favicon-32x32.png">
		<link rel="icon" type="image/png" sizes="96x96" href="<?php echo $site_url; ?>/favicon/favicon-96x96.png">
		<link rel="icon" type="image/png" sizes="16x16" href="<?php echo $site_url; ?>/favicon/favicon-16x16.png">
		<link rel="manifest" href="<?php echo $site_url; ?>/favicon/manifest.json">
		<meta name="msapplication-TileColor" content="#35524bs">
		<meta name="msapplication-TileImage" content="<?php echo $site_url; ?>/favicon/ms-icon-144x144.png">
		<meta name="theme-color" content="#35524b">

	</head>
	<body>
		<div class="preloader" style="display: none;">
			<div class="loader">
				<div class="ytp-spinner">
					<div class="ytp-spinner-container">
						<div class="ytp-spinner-rotator">
							<div class="ytp-spinner-left"><div class="ytp-spinner-circle"></div></div>
							<div class="ytp-spinner-right"><div class="ytp-spinner-circle"></div></div>
						</div>
					</div>
				</div>
			</div>
		</div>
		
		<div class="header_area">
			<div class="header_navbar">
				<div class="container">
					<div class="row">
						<div class="col-lg-12">
							<nav class="navbar navbar-expand-lg">
								<a class="navbar-brand" href="index"><img src="<?php echo $site_url; ?>/images/logo_title.png" alt="Logo"></a>
								<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
									<span class="toggler-icon"></span><span class="toggler-icon"></span><span class="toggler-icon"></span>
								</button>
								<div class="collapse navbar-collapse sub-menu-bar" id="navbarSupportedContent">
									<ul id="nav" class="navbar-nav ml-auto">
										<li class="nav-item active"><a class="page-scroll" href="#">WhitePaper</a></li>
									</ul>
								</div> 
							</nav> 
						</div>
					</div> 
				</div> 
			</div> 
			<div id="home" class="header_hero d-lg-flex align-items-center">
				<div class="hero_shape shape_1"><img src="<?php echo $site_url; ?>/shapes/shape-1.svg" alt="shape"></div>
				<div class="hero_shape shape_2"><img src="<?php echo $site_url; ?>/shapes/shape-2.svg" alt="shape"></div>
				<div class="hero_shape shape_3"><img src="<?php echo $site_url; ?>/shapes/shape-3.svg" alt="shape"></div>
				<div class="hero_shape shape_4"><img src="<?php echo $site_url; ?>/shapes/shape-4.svg" alt="shape"></div>
				<div class="hero_shape shape_5"><img src="<?php echo $site_url; ?>/shapes/shape-3.svg" alt="shape"></div>
				<div class="hero_shape shape_6"><img src="<?php echo $site_url; ?>/shapes/shape-1.svg" alt="shape"></div>
				<div class="hero_shape shape_7"><img src="<?php echo $site_url; ?>/shapes/shape-4.svg" alt="shape"></div>
				<div class="hero_shape shape_8"><img src="<?php echo $site_url; ?>/shapes/shape-3.svg" alt="shape"></div>
				<div class="hero_shape shape_9"><img src="<?php echo $site_url; ?>/shapes/shape-2.svg" alt="shape"></div>
				<div class="hero_shape shape_10"><img src="<?php echo $site_url; ?>/shapes/shape-4.svg" alt="shape"></div>
				<div class="hero_shape shape_11"><img src="<?php echo $site_url; ?>/shapes/shape-1.svg" alt="shape"></div>
				<div class="hero_shape shape_12"><img src="<?php echo $site_url; ?>/shapes/shape-2.svg" alt="shape"></div>
				<div class="container">
					<div class="row">
						<div class="col-lg-6">
							<div class="header_hero_content">
							<h2 class="hero_title wow fadeInUp" data-wow-duration="2s" data-wow-delay="0.2s"><img src="images/title.jpg"/></h2>
							<p class="wow fadeInUp" data-wow-duration="2s" data-wow-delay="0.6s" style="font-weight:bold; margin-top:10px;">Get Rewarded on every Transaction!</p>
							<p class="wow fadeInUp" data-wow-duration="2s" data-wow-delay="0.6s" style="font-weight:bold;">BSC CONTRACT ADDRESS: <a href="" target="_blank">0x</a></p>
							<p class="wow fadeInUp" data-wow-duration="2s" data-wow-delay="0.6s">A uinque token where all users get BNB REWARDS <br/>for using the token for regular transactions! <br/>Implements a uinique on-chain cashback system for all!</p>
							
							<p>Start using <b>CBPEPE</b> and get back more than the BNB <br/>spent in transaction FEES as cashback!</p>
							
							<ul>
							<li id="herowcbtnwrap" class="wow fadeInUp" data-wow-duration="2s" data-wow-delay="0.9s"><a id="herowcbtn" class="main-btn">BUY NOW!</a></li>
							</ul>
							</div> 
						</div>
					</div> 
				</div> 
				<div class="header_shape d-none d-lg-block"></div>
				<div class="header_image d-flex align-items-center">
					<a class="image" href="index.html">
						<img src="<?php echo $site_url; ?>/images/logo.png" alt="Header Image" style="visibility: visible;">
					</a>
				</div> 
			</div> 
		</div>
		
		<div class="services_area pt-115" id="about">
			<div class="container">
				<div class="row justify-content-center">
					<div class="col-lg-6">
						<div class="section_title text-center pb-25">
							<h5 class="sub_title">Special</h5>
							<h4 class="main_title">Features</h4>
						</div>
					</div>
				</div> 
				<div class="row justify-content-center">
					<div class="col-lg-4 col-sm-6 col-xs-10">
						<div class="single_services text-center mt-30 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.5s" style="visibility: visible; animation-duration: 1s; animation-delay: 0.5s; animation-name: fadeInUp;">
							<div class="services_icon">
								<i>&#10031;</i>
								<svg xmlns="http://www.w3.org/2000/svg" width="94" height="92" viewBox="0 0 94 92">
								<path class="services_shape" id="Polygon_12" data-name="Polygon 12" d="M42.212,2.315a11,11,0,0,1,9.576,0l28.138,13.6a11,11,0,0,1,5.938,7.465L92.83,54.018A11,11,0,0,1,90.717,63.3L71.22,87.842A11,11,0,0,1,62.607,92H31.393a11,11,0,0,1-8.613-4.158L3.283,63.3A11,11,0,0,1,1.17,54.018L8.136,23.383a11,11,0,0,1,5.938-7.465Z"></path>
								</svg>
							</div>
							<div class="services_content">
								<h3 class="services_title"><a href="https://preview.uideck.com/items/plain/#">4% Tax</a></h3>
								<p>on all <br/>Transactions</p>
							</div>
						</div> 
					</div>
					<div class="col-lg-4 col-sm-6 col-xs-10">
						<div class="single_services text-center mt-30 wow fadeInUp" data-wow-duration="1s" data-wow-delay="1s" style="visibility: visible; animation-duration: 1s; animation-delay: 1s; animation-name: fadeInUp;">
							<div class="services_icon">
								<i>&#10031;</i>
								<svg xmlns="http://www.w3.org/2000/svg" width="94" height="92" viewBox="0 0 94 92">
								<path class="services_shape" id="Polygon_12" data-name="Polygon 12" d="M42.212,2.315a11,11,0,0,1,9.576,0l28.138,13.6a11,11,0,0,1,5.938,7.465L92.83,54.018A11,11,0,0,1,90.717,63.3L71.22,87.842A11,11,0,0,1,62.607,92H31.393a11,11,0,0,1-8.613-4.158L3.283,63.3A11,11,0,0,1,1.17,54.018L8.136,23.383a11,11,0,0,1,5.938-7.465Z"></path>
								</svg>
							</div>
							<div class="services_content">
								<h3 class="services_title"><a href="https://preview.uideck.com/items/plain/#">3% REWARD POOL</a></h3>
								<p>Sender/Reciever Both Get 10% of reward pool on each transaction.</p>
							</div>
						</div> 
					</div>
					<div class="col-lg-4 col-sm-6 col-xs-10">
						<div class="single_services text-center mt-30 wow fadeInUp" data-wow-duration="1s" data-wow-delay="1.5s" style="visibility: visible; animation-duration: 1s; animation-delay: 1.5s; animation-name: fadeInUp;">
							<div class="services_icon">
								<i>&#10031;</i>
								<svg xmlns="http://www.w3.org/2000/svg" width="94" height="92" viewBox="0 0 94 92">
								<path class="services_shape" id="Polygon_12" data-name="Polygon 12" d="M42.212,2.315a11,11,0,0,1,9.576,0l28.138,13.6a11,11,0,0,1,5.938,7.465L92.83,54.018A11,11,0,0,1,90.717,63.3L71.22,87.842A11,11,0,0,1,62.607,92H31.393a11,11,0,0,1-8.613-4.158L3.283,63.3A11,11,0,0,1,1.17,54.018L8.136,23.383a11,11,0,0,1,5.938-7.465Z"></path>
								</svg>
							</div>
							<div class="services_content">
							<h3 class="services_title"><a href="https://preview.uideck.com/items/plain/#">200M Supply</a></h3>
							<p>Total Supply only <br/>200 Million CBPEPE</p>
							</div>
						</div> 
					</div>
					<div class="col-lg-4 col-sm-6 col-xs-10">
						<div class="single_services text-center mt-30 wow fadeInUp" data-wow-duration="1s" data-wow-delay="1.5s" style="visibility: visible; animation-duration: 1s; animation-delay: 1.5s; animation-name: fadeInUp;">
							<div class="services_icon">
								<i>&#10031;</i>
								<svg xmlns="http://www.w3.org/2000/svg" width="94" height="92" viewBox="0 0 94 92">
								<path class="services_shape" id="Polygon_12" data-name="Polygon 12" d="M42.212,2.315a11,11,0,0,1,9.576,0l28.138,13.6a11,11,0,0,1,5.938,7.465L92.83,54.018A11,11,0,0,1,90.717,63.3L71.22,87.842A11,11,0,0,1,62.607,92H31.393a11,11,0,0,1-8.613-4.158L3.283,63.3A11,11,0,0,1,1.17,54.018L8.136,23.383a11,11,0,0,1,5.938-7.465Z"></path>
								</svg>
							</div>
							<div class="services_content">
							<h3 class="services_title"><a href="https://preview.uideck.com/items/plain/#">1% Auto Liquidity</a></h3>
							<p>1% Tax will be added to liquidity pool on DEX.</p>
							</div>
						</div> 
					</div>
				</div> 
			</div> 
		</div>
		<div id="homedashboard" style="padding-top:10px;">
			<div class="footer_area homedash" style="margin:40px 0 0 0;" id="homedashboard">
				<div class="container">
					<div class="row justify-content-center">
						<div class="col-lg-12">
							<div class="section_title text-center pb-25">
								<h5 class="sub_title">FEATURES</h5>
							</div>
							<div id="homepredash" style="display:inline-block; text-align:center; width:580px; max-width:100%;">
								<p style="width:100%; text-align:left; word-break: break-word;">TOTAL TAX: {BUY: 4%} {SELL: 4%}<br/>
----------------<br/>
 * (*)	1% of TAX added to LIQUIDITY POOL<br/>
 *  <br/>
 * (*)	3% of TAX converted to BNB and added to REWARD POOL!<br/>
 *		================<br/>
 *		cashback rules:<br/>
 *  	================<br/>
 *		* Cashback starts after 10 initial transactions<br/>
 *		* Traded tokens value must be atleast (10000 CBPEPE) to qualify.<br/>
 *		* Sender and Reciever both get 10% of REWARD POOL BNB CashBack amount!<br/>
 *		Easy and simple. <br/>
 *		================<br/>
 *		This way all transactions will be FREE (and in most cases you <br/>
 *		get back REWARDS more than you pay for transaction FEES)<br/>
 *		Use the token for TRADING on DEX or sending/recieving with other users, <br/>
 *		every time you will be rewarded!<br/>
 *		USE MORE, EARN MORE!<br/>
 ================<br/>
 * The more you use the token, the more you will be rewarded!<br/>
 * JOIN THE REVOLUTION!<br/>
 <a class="main-btn" href="#">BUY NOW</a></p>
							</div>
						</div>
					</div> 
				</div>
			</div>
		</div>
		
		<div id="work" class="work_area pt-115 pb-120">
			<div class="container">
				<div class="row justify-content-center">
					<div class="col-lg-6">
						<div class="section_title text-center pb-25">
							<h5 class="sub_title">Listed on</h5>
							<h4 class="main_title">Token Trackers</h4>
						</div> 
					</div>
				</div> 
			</div> 
			<div class="container-fluid  wow fadeInUp" data-wow-duration="0.5s" data-wow-delay="0.5s">
				<div class="row work_active">
					<div class="col-lg-3">
						<div class="single_work">
							<div class="work_content">
								<h4 class="work_title"><img src="<?php echo $site_url; ?>/images/ct-coinmooner.png"/><a href="#">CoinMooner</a></h4>
							</div>
						</div> 
					</div>
					<div class="col-lg-3">
						<div class="single_work">
							<div class="work_content">
								<h4 class="work_title"><img src="<?php echo $site_url; ?>/images/ct-coinvote.png"/><a href="#">CoinVote</a></h4>
							</div>
						</div> 
					</div>
					<div class="col-lg-3">
						<div class="single_work">
							<div class="work_content">
								<h4 class="work_title"><img src="<?php echo $site_url; ?>/images/ct-freshcoins.png"/><a href="#">FreshCoins</a></h4>
							</div>
						</div> 
					</div>
					<div class="col-lg-3">
						<div class="single_work">
							<div class="work_content">
								<h4 class="work_title"><img src="<?php echo $site_url; ?>/images/ct-gemfinder.png"/><a href="#">GemFinder</a></h4>
							</div>
						</div> 
					</div>
				</div> 
			</div> 
		</div>
		<section id="team" class="team_area pt-115 pb-120">
			<div class="container">
				<div class="row justify-content-center">
					<div class="col-lg-6">
						<div class="section_title text-center pb-25">
							<h4 class="main_title">Exchanges</h4>
							<h5 class="sub_title">Coming soon..</h5>
						</div> 
					</div>
				</div> 
				<div class="row team_active wow fadeInLeft" data-wow-duration="0.5s" data-wow-delay="0.5s">
				<!--<div class="col-lg-4">
						<div class="single_team">
							<div class="team_content">
								<h4 class="team_name"><a href="#"></a></h4>
								<p></p>
							</div>
						</div> 
					</div> -->
				</div> 
			</div> 
		</section>

		<div id="footer" class="footer_area">
			<div class="container"> 
				<div class="footer_copyright d-sm-flex justify-content-between">
					<div class="footer_social text-center">
						<ul class="social">
							<li><a href="#"><img src="<?php echo $site_url; ?>/images/s-tg.png"/></a></li>
							<li><a href="#"><img src="<?php echo $site_url; ?>/images/s-dc.png"/></a></li>
							<li><a href="#"><img src="<?php echo $site_url; ?>/images/s-fb.png"/></a></li>
							<li><a href="#"><img src="<?php echo $site_url; ?>/images/s-tw.png"/></a></li>
							<li><a href="#"><img src="<?php echo $site_url; ?>/images/s-rd.png"/></a></li>
						</ul>
					</div> 
					<div class="footer_copyright_content  text-center">
						<p>&copy; 2022. All rights reserved.</p>
					</div> 
				</div> 
			</div> 
		</div>

		<a href="#" class="back-to-top" style="display: none;">&#8679;</a>

		<script src="<?php echo $site_url; ?>/js/jquery-1.12.4.min.js"></script>
		<script src="<?php echo $site_url; ?>/js/modernizr-3.7.1.min.js"></script>
		<script src="<?php echo $site_url; ?>/js/popper.min.js"></script>
		<script src="<?php echo $site_url; ?>/js/bootstrap.min.js"></script>
		<script src="<?php echo $site_url; ?>/js/slick.min.js"></script>
		<script src="<?php echo $site_url; ?>/js/jquery.easing.min.js"></script>
		<script src="<?php echo $site_url; ?>/js/scrolling-nav.js"></script>
		<script src="<?php echo $site_url; ?>/js/wow.min.js"></script>
		<script src="<?php echo $site_url; ?>/js/main.js"></script>

		<script src="<?php echo $site_url; ?>/js/extra.js"></script>
		
		
		<p id="floatalertbox" style="position:fixed; right:20px; bottom:20px; border-radius:5px; background-color:#000; z-index:99;	padding:10px 15px; color:#fff; font-size:14px; display:none; transition:0.3s all ease-in-out; display:none; border:2px solid #fff; box-shadow:0 0 5px #a80000;"></p>
	</body>
</html>
	