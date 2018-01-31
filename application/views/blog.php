<!DOCTYPE HTML>
<html>
<head>
<title><?php echo $this->lang->line('website_title'); ?> | <?php echo $this->lang->line('blog_title'); ?> </title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600' rel='stylesheet' type='text/css'>
<link href="assets/css/style.css" rel="stylesheet" type="text/css" media="all" />
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
				<li><a href="portfolio"><?php echo $this->lang->line('menu_portfolio'); ?></a></li>
				<li class="active"><a href="blog"><?php echo $this->lang->line('menu_blog'); ?></a></li>
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
	                <li class="nav-item"><a href="portfolio"><?php echo $this->lang->line('menu_about'); ?></a></li>
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
		<h2><?php echo $this->lang->line('blog_title'); ?></h2>
		<h3>What we Think, latest news</h3>
	</div>
</div>
</div>
<!-- start main -->
<div class="main_bg">
<div class="wrap">
	<div class="main">
		<div class="content">
			<!-- start blog_left -->
			<div class="blog_left">		
				<div class="blog_main">	
					<img src="assets/images/blog_pic1.jpg" alt=""/>
					<div class="b_left">
						<h4 class="bg"><img src="images/note.jpg" alt=""/></h4>
					</div>
					<div class="b_right">
						<h4>Lorem Ipsum is simply dummy text of the printing.</h4>
						<div class="blog_list">
					      		<ul>
							  		<li><a href="#"> <i class="date"> </i><span>June 3, 2013</span></a></li>
							  		<li><a href="#"> <i class="comment"> </i> <span>Comments</span></a></li>
				  					<li><a href="#"> <i class="news"> </i><span>Public, News</span></a></li>
				  					<li><a href="#"> <i class="views"> </i><span>124 views</span></a></li>
					    		</ul>
					    		<div class="clear"></div>
					      </div>
					    <div class="blog_art">
					      		<ul>
							  		<li><a href="#"> <i> </i><span>18</span></a></li>
					    		</ul>
					    		<div class="clear"></div>
					      </div>
					</div>
					<div class="clear"></div>
					  <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing</p>
					  <a class="btn" href="details.html">read more</a>
				 </div>
				<div class="blog_main">	
					<iframe src="//player.vimeo.com/video/25541923?color=c9161f" width="100%" height="350" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe> 
					<div class="b_left">
						<h4 class="bg1"><img src="assets/images/speak.jpg" alt=""/></h4>
					</div>
					<div class="b_right">
						<h4>Lorem Ipsum is simply dummy text of the printing.</h4>
						<div class="blog_list">
					      		<ul>
							  		<li><a href="#"> <i class="date"> </i><span>June 3, 2013</span></a></li>
							  		<li><a href="#"> <i class="comment"> </i> <span>Comments</span></a></li>
				  					<li><a href="#"> <i class="news"> </i><span>Public, News</span></a></li>
				  					<li><a href="#"> <i class="views"> </i><span>124 views</span></a></li>
					    		</ul>
					    		<div class="clear"></div>
					      </div>
					    <div class="blog_art">
					      		<ul>
							  		<li><a href="#"> <i> </i><span>18</span></a></li>
					    		</ul>
					    		<div class="clear"></div>
					      </div>
					</div>
					<div class="clear"></div>
					  <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing</p>
					  <a class="btn" href="details.html">read more</a>
				 </div>
				 <div class="blog_main">	
				 <!-- start slider-text -->
				<div class="our-mission" id="team">
        		 <div id="ca-container" class="ca-container">
				   <div class="ca-wrapper">
					<div class="ca-item ca-item-1">
						<div class="ca-item-main">
							<h4>
								<span class="quote"></span>
								<span class="quote_text">The greatness of a nation and its moral progress can be judged by the way in which its animals are treated.</span>
							</h4>
							<h5> - Jackie french koller </h5>
						</div>
					</div>
					<div class="ca-item ca-item-2">
						<div class="ca-item-main">
							<h4>
								<span class="quote"></span>
								<span class="quote_text">The greatness of a nation and its moral progress can be judged by the way in which its animals are treated.</span>
							</h4>
							<h5> - Jackie french koller </h5>
						</div>
					</div>
					<div class="ca-item ca-item-3">
						<div class="ca-item-main">
							<h4>
								<span class="quote"></span>
								<span class="quote_text">The greatness of a nation and its moral progress can be judged by the way in which its animals are treated.</span>
							</h4>
							<h5> - Jackie french koller </h5>
						</div>
					</div>
					<div class="ca-item ca-item-4">
						<div class="ca-item-main">
							<h4>
								<span class="quote"></span>
								<span class="quote_text">The greatness of a nation and its moral progress can be judged by the way in which its animals are treated.</span>
							</h4>
							<h5> - Jackie french koller </h5>
						</div>
					</div>
					<div class="ca-item ca-item-5">
						<div class="ca-item-main">
							<h4>
								<span class="quote"></span>
								<span class="quote_text">The greatness of a nation and its moral progress can be judged by the way in which its animals are treated.</span>
							</h4>
							<h5> - Jackie french koller </h5>
						</div>
					</div>
					<div class="ca-item ca-item-6">
						<div class="ca-item-main">
							<h4>
								<span class="quote"></span>
								<span class="quote_text">The greatness of a nation and its moral progress can be judged by the way in which its animals are treated.</span>
							</h4>
							<h5> - Jackie french koller </h5>
						</div>
					</div>
				</div>
		</div>
		<!-- the jScrollPane script -->
		<script type="text/javascript" src="assets/js/jquery.min.js"></script>
		<script type="text/javascript" src="assets/js/jquery.easing.min.js"></script>
		<!-- the jScrollPane script -->
		<script type="text/javascript" src="assets/js/jquery.mousewheel.js"></script>
		<script type="text/javascript" src="assets/js/jquery.contentcarousel.js"></script>
		<script type="text/javascript">
				$('#ca-container').contentcarousel();
		</script>
	</div>
	<!-- end slider-text -->
	</div>
	<ul class="pagination">
		<li class="active"><a href="#">1</a></li>
		<li><a href="#">2</a></li>
		<li><a href="#">3</a></li>
		<li><a href="#">4</a></li>
		<li><a href="#">5</a></li>
	</ul>
			</div>
			<!-- start blog_sidebar -->
			<div class="blog_sidebar">
				<div class="sidebar">
					<!-- start social_network_likes -->
					<div class="social_network_likes">
				      		 <ul>
				      		 	<li><a href="#" class="tweets"><div class="followers"><p><span>2k</span>Followers</p></div><div class="social_network"><i class="twitter-icon"> </i> </div></a></li>
				      			<li><a href="#" class="facebook-followers"><div class="followers"><p><span>5k</span>Followers</p></div><div class="social_network"><i class="facebook-icon"> </i> </div></a></li>
				      			<li><a href="#" class="email"><div class="followers"><p><span>7.5k</span>members</p></div><div class="social_network"><i class="email-icon"> </i></div> </a></li>
				      			<li><a href="#" class="dribble"><div class="followers"><p><span>10k</span>Followers</p></div><div class="social_network"><i class="dribble-icon"> </i></div></a></li>
				      			<div class="clear"> </div>
				    		</ul>
		          	</div>
		<!-- start sap_tabs -->
		  <div class="sap_tabs">	
					<div id="horizontalTab" style="display: block; width: 100%; margin: 0px;">
					  <ul class="resp-tabs-list">
					  	  <li class="resp-tab-item" aria-controls="tab_item-0" role="tab"><span>Recent</span></li>
						  <li class="resp-tab-item" aria-controls="tab_item-1" role="tab"><span>Comments</span></li>
						  <li class="resp-tab-item" aria-controls="tab_item-2" role="tab"><span>Popular</span></li>
						  <div class="clear"></div>
					  </ul>				  	 
						<div class="resp-tabs-container">
						      <div class="tab-1 resp-tab-content" aria-labelledby="tab_item-0">
								<div class="facts">
									<ul class="tab-left">
										<span class="tab-img"><img src="assets/images/tab_pic1.jpg" alt=""/></span>
											<div class="tab-text">
												<p><a href="#">Lorem ipsum dolor sitsad.</a></p>
												<div class="post-meta">
												   <img src="assets/images/date.png" alt=""><a href="#" class="date"> 21 March 2013</a>
												 </div>
											</div>
										<div class="clear"></div>
									</ul>	
									<ul class="tab-left">
										<span class="tab-img"><img src="assets/images/tab_pic2.jpg" alt=""/></span>
											<div class="tab-text">
												<p><a href="#">Lorem ipsum dolor sitsah.</a></p>
												<div class="post-meta">
												  <img src="assets/images/date.png" alt=""><a href="#" class="date"> 21 March 2013</a>
												 </div>
											</div>
										<div class="clear"></div>
									</ul>	
									<ul class="tab-left">
										<span class="tab-img"><img src="assets/images/tab_pic3.jpg" alt=""/></span>
											<div class="tab-text">
												<p><a href="#">Lorem ipsum dolor sitsah.</a></p>
												<div class="post-meta">
												   <img src="assets/images/date.png" alt=""><a href="#" class="date"> 21 March 2013</a>
												 </div>
											</div>
										<div class="clear"></div>
									</ul>	
									<ul class="tab-left">
										<span class="tab-img"><img src="assets/images/tab_pic4.jpg" alt=""/></span>
											<div class="tab-text">
												<p><a href="#">Lorem ipsum dolor sitsah.</a></p>
												<div class="post-meta">
												  <img src="assets/images/date.png" alt=""><a href="#" class="date"> 21 March 2013</a>
												 </div>
											</div>
										<div class="clear"></div>
									</ul>			              
						        </div>
						     </div>	
						     <div class="tab-2 resp-tab-content" aria-labelledby="tab_item-1">
							 	<div class="facts">
									<ul class="tab-left">
										<span class="tab-img"><img src="assets/images/tab_pic5.jpg" alt=""/></span>
											<div class="tab-text">
												<p><a href="#">Lorem ipsum dolor sitsah.</a></p>
												<div class="post-meta">
												   <img src="assets/images/date.png" alt=""><a href="#" class="date"> 21 March 2013</a>
												 </div>
											</div>
										<div class="clear"></div>
									</ul>	
									<ul class="tab-left">
										<span class="tab-img"><img src="assets/images/tab_pic2.jpg" alt=""/></span>
											<div class="tab-text">
												<p><a href="#">Lorem ipsum dolor sitsah.</a></p>
												<div class="post-meta">
												   <img src="assets/images/date.png" alt=""><a href="#" class="date"> 21 March 2013</a>
											   <span class="author">Author: <a href="#">Lorem</a></span>
												 </div>
											</div>
										<div class="clear"></div>
									</ul>	
									<ul class="tab-left">
										<span class="tab-img"><img src="assets/images/tab_pic1.jpg" alt=""/></span>
											<div class="tab-text">
												<p><a href="#">Lorem ipsum dolor sitsah.</a></p>
												<div class="post-meta">
												  <img src="assets/images/date.png" alt=""><a href="#" class="date"> 21 March 2013</a>
												 </div>
											</div>
										<div class="clear"></div>
									</ul>	
									<ul class="tab-left">
										<span class="tab-img"><img src="assets/images/tab_pic4.jpg" alt=""/></span>
											<div class="tab-text">
												<p><a href="#">Lorem ipsum dolor sitsah.</a></p>
												<div class="post-meta">
												   <img src="assets/images/date.png" alt=""><a href="#" class="date"> 21 March 2013</a>
												 </div>
											</div>
										<div class="clear"></div>
									</ul>			              
						        </div>
							</div>				        					 
						    <div class="tab-3 resp-tab-content" aria-labelledby="tab_item-2">
						     	<div class="facts">
									<ul class="tab-left">
										<span class="tab-img"><img src="assets/images/tab_pic3.jpg" alt=""/></span>
											<div class="tab-text">
												<p><a href="#">Lorem ipsum dolor sitsah.</a></p>
												<div class="post-meta">
												   <img src="assets/images/date.png" alt=""><a href="#" class="date"> 21 March 2013</a>
												 </div>
											</div>
										<div class="clear"></div>
									</ul>	
									<ul class="tab-left">
										<span class="tab-img"><img src="assets/images/tab_pic1.jpg" alt=""/></span>
											<div class="tab-text">
												<p><a href="#">Lorem ipsum dolor sitsah.</a></p>
												<div class="post-meta">
												   <img src="assets/images/comment.png" alt=""><a href="#" class="comments"> 3 Comments</a>
												 </div>
											</div>
										<div class="clear"></div>
									</ul>	
									<ul class="tab-left">
										<span class="tab-img"><img src="assets/images/tab_pic3.jpg" alt=""/></span>
											<div class="tab-text">
												<p><a href="#">Lorem ipsum dolor sitsah.</a></p>
												<div class="post-meta">
												   <img src="assets/images/date.png" alt=""><a href="#" class="date"> 21 March 2013</a>
												 </div>
											</div>
										<div class="clear"></div>
									</ul>	
									<ul class="tab-left">
										<span class="tab-img"><img src="assets/images/tab_pic5.jpg" alt=""/></span>
											<div class="tab-text">
												<p><a href="#">Lorem ipsum dolor sitsah.</a></p>
												<div class="post-meta">
												  <img src="assets/images/date.png" alt=""><a href="#" class="date"> 21 March 2013</a>
												 </div>
											</div>
										<div class="clear"></div>
									</ul>			              
						           </div>           	      
						        </div>	
						     </div>	
				        </div>	
				   </div>
				<script src="assets/js/jquery.min.js"></script>
				<script src="assets/js/easyResponsiveTabs.js" type="text/javascript"></script>
						    <script type="text/javascript">
							    $(document).ready(function () {
							        $('#horizontalTab').easyResponsiveTabs({
							            type: 'default', //Types: default, vertical, accordion           
							            width: 'auto', //auto or any width like 600px
							            fit: true   // 100% fit in a container
							        });
							    });
							   </script>
		  <!-- end sap_tabs -->
					<!-- start flicker images -->
					<h4>ads 125x125</h4>
					<ul class="ads_nav">
						<li><a href="#"><img src="assets/images/ads_pic.jpg" alt=""> </a></li>
						<li><a href="#"><img src="assets/images/ads_pic.jpg" alt=""> </a></li>
						<li><a href="#"><img src="assets/images/ads_pic.jpg" alt=""> </a></li>
						<li><a href="#"><img src="assets/images/ads_pic.jpg" alt=""> </a></li>
						<div class="clear"></div>
					</ul>
					<!-- start flicker images -->
					<h4>flicker images</h4>
					<ul class="flicker_nav">
						<li><a href="#"><img src="assets/images/f_pic1.jpg" alt=""> </a></li>
						<li><a href="#"><img src="assets/images/f_pic2.jpg" alt=""> </a></li>
						<li><a href="#"><img src="assets/images/f_pic3.jpg" alt=""> </a></li>
						<li><a href="#"><img src="assets/images/f_pic4.jpg" alt=""> </a></li>
						<li><a href="#"><img src="assets/images/f_pic3.jpg" alt=""> </a></li>
						<li><a href="#"><img src="assets/images/f_pic4.jpg" alt=""> </a></li>
						<li><a href="#"><img src="assets/images/f_pic5.jpg" alt=""> </a></li>
						<li><a href="#"><img src="assets/images/f_pic6.jpg" alt=""> </a></li>
						<div class="clear"></div>
					</ul>
					<!-- start tag_nav -->
					<h4>tags</h4>
					<ul class="tag_nav">
						<li><a href="#">art</a></li>
						<li><a href="#">awesome</a></li>
						<li><a href="#">classic</a></li>
						<li><a href="#">photo</a></li>
						<li><a href="#">wordpress</a></li>
						<li><a href="#">videos</a></li>
						<li><a href="#">standard</a></li>
						<li><a href="#">gaming</a></li>
						<li><a href="#">photo</a></li>
						<li><a href="#">music</a></li>
						<li><a href="#">data</a></li>
						<div class="clear"></div>
					</ul>
					<!-- start news_letter -->
					<h4>newsletter</h4>
					<div class="news_letter">
						<form>
							<input type="text" placeholder="Your email address" />
							<input type="submit" value="subscibe" />
							
						</form>
					</div>
				</div>
		</div>
		<div class="clear"></div>
		</div>
	</div>
</div>
</div>