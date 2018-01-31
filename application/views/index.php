<!DOCTYPE HTML>
<html>
<head>
<title>The Calm Website Template | Home </title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600' rel='stylesheet' type='text/css'>
<link href="assets/css/style.css" rel="stylesheet" type="text/css" media="all" />
<!--  jquery plguin -->
<script type="text/javascript" src="assets/js/jquery.min.js"></script>
<!-- start gallery -->
	<script type="text/javascript" src="assets/js/jquery.easing.min.js"></script>	
	<script type="text/javascript" src="assets/js/jquery.mixitup.min.js"></script>
	<script type="text/javascript">
	$(function () {
		
		var filterList = {
		
			init: function () {
			
				// MixItUp plugin
				// http://mixitup.io
				$('#portfoliolist').mixitup({
					targetSelector: '.portfolio',
					filterSelector: '.filter',
					effects: ['fade'],
					easing: 'snap',
					// call the hover effect
					onMixEnd: filterList.hoverEffect()
				});				
			
			},
			
			hoverEffect: function () {
			
				// Simple parallax effect
				$('#portfoliolist .portfolio').hover(
					function () {
						$(this).find('.label').stop().animate({bottom: 0}, 200, 'easeOutQuad');
						$(this).find('img').stop().animate({top: -30}, 500, 'easeOutQuad');				
					},
					function () {
						$(this).find('.label').stop().animate({bottom: -40}, 200, 'easeInQuad');
						$(this).find('img').stop().animate({top: 0}, 300, 'easeOutQuad');								
					}		
				);				
			
			}

		};
		
		// Run the show!
		filterList.init();
			
	});	
	</script>
<!-- Add fancyBox main JS and CSS files -->
<link href="assets/css/magnific-popup.css" rel="stylesheet" type="text/css">
<script src="assets/js/jquery.magnific-popup.js" type="text/javascript"></script>
		<script>
			$(document).ready(function() {
				$('.popup-with-zoom-anim').magnificPopup({
					type: 'inline',
					fixedContentPos: false,
					fixedBgPos: true,
					overflowY: 'auto',
					closeBtnInside: true,
					preloader: false,
					midClick: true,
					removalDelay: 300,
					mainClass: 'my-mfp-zoom-in'
			});
		});
		</script>

</head>
<body>
<!-- start header -->
<div class="header_bg">
<div class="wrap">
	<div class="header">
		<div class="logo">
			<h1><a href="<?php echo base_url(); ?>"><img src="assets/images/logo.png" alt=""/></a></h1>
		</div>
		<div class="h_right">
			<ul class="menu">
				<li class="active"><a href="<?php echo base_url(); ?>"><?php echo $this->lang->line('page_home'); ?></a></li>
				<li><a href="about"><?php echo $this->lang->line('page_about'); ?></a></li>
				<li><a href="portfolio"><?php echo $this->lang->line('page_portfolio'); ?></a></li>
				<li><a href="blog"><?php echo $this->lang->line('page_blog'); ?></a></li>
				<li><a href="contact"><?php echo $this->lang->line('page_contact'); ?></a></li>
			</ul>
			<div id="sb-search" class="sb-search">
				<form>
					<input class="sb-search-input" placeholder="Enter your search term..." type="text" value="" name="search" id="search">
					<input class="sb-search-submit" type="submit" value="">
					<span class="sb-icon-search"></span>
				</form>
			</div>
			<script src="assets/js/classie.js"></script>
			<script src="assets/js/uisearch.js"></script>
			<script>
				new UISearch( document.getElementById( 'sb-search' ) );
			</script>
			<!-- start smart_nav * -->
	        <nav class="nav">
	            <ul class="nav-list">
	                <li class="nav-item"><a href="">Home</a></li>
	                <li class="nav-item"><a href="about">About</a></li>
	                <li class="nav-item"><a href="portfolio">Portfolio</a></li>
	                <li class="nav-item"><a href="blog">Blog</a></li>
	                <li class="nav-item"><a href="contact">Contact</a></li>
	                <div class="clear"></div>
	            </ul>
	        </nav>
	        <script type="text/javascript" src="assets/js/responsive.menu.js"></script>
			<!-- end smart_nav * -->
		</div>
		<div class="clear"></div>
	</div>
	<div class="header_btm">
		<div class="h_left">
			<h2>Welcome Ladies & Gents to Calm Website.</h2>
			<h3>A theme more stylish than any other on themeforest</h3>
		</div>
		<div class="soc_icons">
			<?php if(!isset($_SESSION['google']['access_token'])){ ?>
			<h2>SIGN IN</h2>
			<ul>
				<li><a class="icon1" href="#"></a></li>
				<li><a class="icon2" href="#"></a></li>
				<li><a class="icon3" href="googlesignin"></a></li>
				<!--<li><a class="icon4" href="#"></a></li>
				<li><a class="icon5" href="#"></a></li>-->
				<div class="clear"></div>
			</ul>
			<?php }else{ ?>
			<h2>SIGN OUT</h2>
			<ul>
				<li><a class="icon5" href="signout"></a></li>
			</ul>
			<?php } ?>
		</div>
		<div class="clear"></div>
	</div>
</div>
</div>
<!-- start main -->
<div class="main_bg">
<div class="wrap">
	<div class="main">
		<!-- start popup -->
		<div id="small-dialog" class="mfp-hide">
			<div class="pop_up">
			 	<h2>Lorem Ipsum is simply dummy text of the printing and industry</h2>
			 	<img src="images/zoom.jpg" title="image-name">
				<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic</p>
				<a class="btn" href="details.html">Read more</a>
			</div>
		</div>
		<!-- end popup -->
		<!-- start gallery  -->
			<div class="container">
					<ul id="filters" class="clearfix">
						<li><span class="filter active" data-filter="app card icon logo web"><?php echo $this->lang->line('page_all'); ?></span></li> /
						<li><span class="filter" data-filter="app card logo">design</span></li> /
						<li><span class="filter" data-filter="card app web icon">branding</span></li> /
						<li><span class="filter" data-filter="icon web app">graphic</span></li> /
						<li><span class="filter" data-filter="logo app"><?php echo $this->lang->line('page_animation'); ?></span></li> /
						<li><span class="filter" data-filter="web app card logo icon">illustration</span></li> /
						<li><span class="filter" data-filter="web app logo card">photography</span></li>
					</ul>
		<div id="portfoliolist">
			<a class="popup-with-zoom-anim" href="#small-dialog">
				<div class="portfolio logo1" data-cat="logo">
					<div class="portfolio-wrapper">				
							<img src="assets/images/pic1.jpg"  alt="Image 2" />
						<div class="label">
							<div class="label-text">
								<p class="text-title">Bird Document</p>
								<span class="text-category">Logo</span>
							</div>
							<div class="label-bg"></div>
						</div>
					</div>
				</div>		
			</a>
			<a class="popup-with-zoom-anim" href="#small-dialog">
				<div class="portfolio app" data-cat="app">
					<div class="portfolio-wrapper">			
							<img src="assets/images/pic2.jpg"  alt="Image 2" />
						<div class="label">
							<div class="label-text">
								<p class="text-title">Visual Infography</p>
								<span class="text-category">APP</span>
							</div>
							<div class="label-bg"></div>
						</div>
					</div>
				</div>		
			</a>
			<a class="popup-with-zoom-anim" href="#small-dialog">
				<div class="portfolio web" data-cat="web">
					<div class="portfolio-wrapper">						
							<img src="assets/images/pic3.jpg"  alt="Image 2" />
						<div class="label">
							<div class="label-text">
								<p class="text-title">Sonor's Design</p>
								<span class="text-category">Web design</span>
							</div>
							<div class="label-bg"></div>
						</div>
					</div>
				</div>				
			</a>
			<a class="popup-with-zoom-anim" href="#small-dialog">
				<div class="portfolio card" data-cat="card">
					<div class="portfolio-wrapper">			
							<img src="assets/images/pic4.jpg"  alt="Image 2" />
						<div class="label">
							<div class="label-text">
								<p class="text-title">Typography Company</p>
								<span class="text-category">Business card</span>
							</div>
							<div class="label-bg"></div>
						</div>
					</div>
				</div>	
			</a>
			<a class="popup-with-zoom-anim" href="#small-dialog">	
				<div class="portfolio app" data-cat="app">
					<div class="portfolio-wrapper">
							<img src="assets/images/pic5.jpg"  alt="Image 2" />
						<div class="label">
							<div class="label-text">
								<p class="text-title">Weatherette</p>
								<span class="text-category">APP</span>
							</div>
							<div class="label-bg"></div>
						</div>
					</div>
				</div>			
			</a>
			<a class="popup-with-zoom-anim" href="#small-dialog">
				<div class="portfolio card" data-cat="card">
					<div class="portfolio-wrapper">			
							<img src="assets/images/pic6.jpg"  alt="Image 2" />
						<div class="label">
							<div class="label-text">
								<p class="text-title">BMF</p>
								<span class="text-category">Business card</span>
							</div>
							<div class="label-bg"></div>
						</div>
					</div>
				</div>	
			</a>
			<a class="popup-with-zoom-anim" href="#small-dialog">
				<div class="portfolio card" data-cat="card">
					<div class="portfolio-wrapper">			
							<img src="assets/images/pic7.jpg"  alt="Image 2" />
						<div class="label">
							<div class="label-text">
								<p class="text-title">Techlion</p>
								<span class="text-category">Business card</span>
							</div>
							<div class="label-bg"></div>
						</div>
					</div>
				</div>	
			</a>
			<a class="popup-with-zoom-anim" href="#small-dialog">
				<div class="portfolio logo1" data-cat="logo">
					<div class="portfolio-wrapper">			
							<img src="assets/images/pic8.jpg"  alt="Image 2" />
						<div class="label">
							<div class="label-text">
								<p class="text-title">KittyPic</p>
								<span class="text-category">Logo</span>
							</div>
							<div class="label-bg"></div>
						</div>
					</div>
				</div>																																							
			</a>
			<a class="popup-with-zoom-anim" href="#small-dialog">
				<div class="portfolio app" data-cat="app">
					<div class="portfolio-wrapper">			
							<img src="assets/images/pic9.jpg"  alt="Image 2" />
						<div class="label">
							<div class="label-text">
								<p class="text-title">Graph Plotting</p>
								<span class="text-category">APP</span>
							</div>
							<div class="label-bg"></div>
						</div>
					</div>
				</div>		
			</a>
			<a class="popup-with-zoom-anim" href="#small-dialog">												
				<div class="portfolio web" data-cat="web">
					<div class="portfolio-wrapper">						
							<img src="assets/images/pic10.jpg"  alt="Image 2" />
						<div class="label">
							<div class="label-text">
								<p class="text-title">Student Guide</p>
								<span class="text-category">Web design</span>
							</div>
							<div class="label-bg"></div>
						</div>
					</div>
				</div>	
			</a>
			<a class="popup-with-zoom-anim" href="#small-dialog">																
				<div class="portfolio icon" data-cat="icon">
					<div class="portfolio-wrapper">
							<img src="assets/images/pic11.jpg"  alt="Image 2" />
						<div class="label">
							<div class="label-text">
								<p class="text-title">Scoccer</p>
								<span class="text-category">Icon</span>
							</div>
							<div class="label-bg"></div>
						</div>
					</div>
				</div>			
			</a>
			<a class="popup-with-zoom-anim" href="#small-dialog">																																																													
				<div class="portfolio icon" data-cat="icon">
					<div class="portfolio-wrapper">						
							<img src="assets/images/pic12.jpg"  alt="Image 2" />
						<div class="label">
							<div class="label-text">
								<p class="text-title">3D Map</p>
								<span class="text-category">Icon</span>
							</div>
							<div class="label-bg"></div>
						</div>
					</div>
				</div>		
			</a>	
		</div>
	</div><!-- end container -->
	</div>
</div>
</div>