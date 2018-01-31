<!DOCTYPE HTML>
<html>
<head>
<title>The Calm Website Template | About </title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600' rel='stylesheet' type='text/css'>
<link href="<?php echo base_url("assets/css/style.css"); ?>" rel="stylesheet" type="text/css" media="all" />
<!--  jquery plguin -->
<script type="text/javascript" src="assets/js/jquery.min.js"></script>
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
				<li><a href="<?php echo base_url(); ?>"><?php echo $this->lang->line('page_home'); ?></a></li>
				<li class="active"><a href="about"><?php echo $this->lang->line('page_about'); ?></a></li>
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
			<script src="assets/js/uisearch.js"</script>
			<script>
				new UISearch( document.getElementById( 'sb-search' ) );
			</script>
			<!-- start smart_nav * -->
	        <nav class="nav">
	            <ul class="nav-list">
	                <li class="nav-item"><a href="<?php echo base_url(); ?>">Home</a></li>
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
</div>
</div>
<!-- start slider -->
<div class="slider_bg">
<div class="wrap">
	<div class="slider">
		<h2><?php echo $this->lang->line('page_about'); ?></h2>
		<h3>What we Think, get in touch</h3>
	</div>
</div>
</div>
<!-- start main -->
<div class="main_bg">
<div class="wrap">
	<div class="main">
		<div class="content">
			<!-- start about -->
			<div class="about">
					 <div class="cont-grid-img img_style">
			     		<img src="assets/images/about_pic.jpg" alt="">
			     	</div>
			       <div class="cont-grid">
					       	<h4>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</h4>
					       	<p class="para">Lorem Ipsum is simply dummy text of the printing and typesetting industry., Lorem Ipsum  dummy text ever since dummy text of the printing and usings 1500s,Duis aute irure dolor in reprehenderit in voluptate velit esse when an,Lorem Ipsum has been the industry's standard dummy text ever since dummy text of the printing and usings 1500s, </p>
					       	<p class="para">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text.</p>
			      	</div>
			      	<div class="clear"></div>
			    	<div class="about-p">
				    	<p class="para">Lorem Ipsum is simply dummy text of the printing and typesetting industry., Lorem Ipsum  dummy text ever since dummy text of the printing and usings 1500s,Duis aute irure dolor in reprehenderit in voluptate velit esse when an,Lorem Ipsum has been the industry's standard dummy text ever since dummy text of the printing and usings 1500s, </p>
						<p class="para">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since dummy text of the printing and usings 1500s,Duis aute irure dolor in reprehenderit in voluptate velit Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since dummy text of the printing and usings 1500s,Duis aute irure dolor in reprehenderit in voluptate velit</p>
						<p class="para">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text.</p>
						<div class="read_more">
							<a class="btn" href="details">read more</a>
						</div>
					</div>
			</div>
			<!-- end about -->
		</div>
	</div>
</div>
</div>