<!DOCTYPE HTML>
<html>
<head>
<title><?php echo $this->lang->line('website_title'); ?> | <?php echo $this->lang->line('portfolio_title'); ?> </title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600' rel='stylesheet' type='text/css'>
<link href="assets/css/style.css" rel="stylesheet" type="text/css" media="all" />
<!--  jquery plguin -->
<script type="text/javascript" src="assets/js/jquery.min.js"></script>
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
				<li><a href="<?php echo base_url(); ?>"><?php echo $this->lang->line('menu_home'); ?></a></li>
				<li><a href="about"><?php echo $this->lang->line('menu_about'); ?></a></li>
				<li class="active"><a href="portfolio"><?php echo $this->lang->line('menu_portfolio'); ?></a></li>
				<li><a href="blog"><?php echo $this->lang->line('menu_blog'); ?></a></li>
				<li><a href="contact"><?php echo $this->lang->line('menu_contact'); ?></a></li>
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
	                <li class="nav-item"><a href="<?php echo base_url(); ?>"><?php echo $this->lang->line('menu_home'); ?></a></li>
	                <li class="nav-item"><a href="about"><?php echo $this->lang->line('menu_about'); ?></a></li>
	                <li class="nav-item"><a href="portfolio"><?php echo $this->lang->line('menu_portfolio'); ?></a></li>
	                <li class="nav-item"><a href="blog"><?php echo $this->lang->line('menu_blog'); ?></a></li>
	                <li class="nav-item"><a href="contact"><?php echo $this->lang->line('menu_contact'); ?></a></li>
	                <div class="clear"></div>
	            </ul>
	        </nav>
	        <script type="text/javascript" src="assets/js/responsive.menu.js"></script>
			<!-- end smart_nav * -->
		</div>
		<div class="clear"></div>
	</div>
</div>
</div>
<!-- start slider -->
<div class="slider_bg">
<div class="wrap">
	<div class="slider">
		<h2><?php echo $this->lang->line('portfolio_title'); ?></h2>
		<h3>What we Think, latest news</h3>
	</div>
</div>
</div>
<!-- start main -->
<div class="main_bg">
<div class="wrap">
	<div class="main">
		<div class="content">
			<!-- start popup -->
			<div id="small-dialog" class="mfp-hide">
				<div class="pop_up">
				 	<h2>Lorem Ipsum is simply dummy text of the printing and industry</h2>
				 	<img src="assets/images/zoom.jpg" title="image-name">
					<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic</p>
					<a class="btn" href="details.html">Read more</a>
				</div>
			</div>
			<!-- end popup -->
				<ul class="folio_list">
					<li>
						<a class="popup-with-zoom-anim" href="#small-dialog">
							<img src="assets/images/pic3.jpg"  alt="Image 2" />
						</a>	
						<h3>Plugin Planet-WordPress</h3>
						<p class="para">There are many variations of passages of Lorem Ipsum available,</p>
						<h4><a class="popup-with-zoom-anim" href="#small-dialog">Graphics Design</a></h4>
											
					</li>
					<li>
						<a class="popup-with-zoom-anim" href="#small-dialog">
							<img src="assets/images/pic2.jpg"  alt="Image 2" />
						</a>		
						 <h3>PIX web design</h3>
						 <p class="para">Our website design and development provides quality web,</p>
						 <h4><a class="popup-with-zoom-anim" href="#small-dialog">print Design</a></h4>
					</li>
					<li>
						<a class="popup-with-zoom-anim" href="#small-dialog">
							<img src="assets/images/pic4.jpg"  alt="Image 2" />
						</a>						
						 <h3>iPhone Mail App</h3>
						 <p class="para">There are many variations of passages of Lorem Ipsum available,</p>
						 <h4><a class="popup-with-zoom-anim" href="#small-dialog">Branding</a></h4>
					</li>
					<li>
						<a class="popup-with-zoom-anim" href="#small-dialog">
							<img src="assets/images/pic5.jpg"  alt="Image 2" />
						</a>						
						 <h3>Free Application </h3>
						 <p class="para">Lorem ipsum dolor sit amet, consectetur elit,EIUSMOD tempor,</p>
						 <h4><a class="popup-with-zoom-anim" href="#small-dialog">WordPress Theme</a></h4>
					</li>
					<div class="clear"></div>
				</ul>
				<ul class="folio_list top">
					<li>
						<a class="popup-with-zoom-anim" href="#small-dialog">
							<img src="assets/images/pic6.jpg"  alt="Image 2" />
						</a>						
						 <h3>iPhone Mail App</h3>
						 <p class="para">There are many variations of passages of Lorem Ipsum available,</p>
						 <h4><a class="popup-with-zoom-anim" href="#small-dialog">Branding</a></h4>
					</li>
					<li>
						<a class="popup-with-zoom-anim" href="#small-dialog">
							<img src="assets/images/pic8.jpg"  alt="Image 2" />
						</a>						
						 <h3>Free Application </h3>
						 <p class="para">Lorem ipsum dolor sit amet, consectetur elit,EIUSMOD tempor,</p>
						 <h4><a class="popup-with-zoom-anim" href="#small-dialog">WordPress Theme</a></h4>
					</li>
					<li>
						<a class="popup-with-zoom-anim" href="#small-dialog">
							<img src="assets/images/pic11.jpg"  alt="Image 2" />
						</a>	
						<h3>Plugin Planet-WordPress</h3>
						<p class="para">There are many variations of passages of Lorem Ipsum available,</p>
						<h4><a class="popup-with-zoom-anim" href="#small-dialog">Graphics Design</a></h4>
											
					</li>
					<li>
						<a class="popup-with-zoom-anim" href="#small-dialog">
							<img src="assets/images/pic9.jpg"  alt="Image 2" />
						</a>		
						 <h3>PIX web design</h3>
						 <p class="para">Our website design and development provides quality web,</p>
						 <h4><a class="popup-with-zoom-anim" href="#small-dialog">print Design</a></h4>
					</li>
					<div class="clear"></div>
				</ul>
		</div>
	</div>
</div>
</div>