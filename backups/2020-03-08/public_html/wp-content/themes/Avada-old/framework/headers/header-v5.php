<div class="header-v5">
	<div class="header-social">
		<div class="avada-row">
			<div class="alignright">
				<?php if($data['icons_header']): ?>
				<ul class="social-networks social-networks-light">
					<?php if($data['facebook_link']): ?>
					<li class="facebook"><a href="<?php echo $data['facebook_link']; ?>">Facebook</a>
						<div class="popup">
							<div class="holder">
								<p>Facebook</p>
							</div>
						</div>
					</li>
					<?php endif; ?>
					<?php if($data['twitter_link']): ?>
					<li class="twitter"><a href="<?php echo $data['twitter_link']; ?>">Twitter</a>
						<div class="popup">
							<div class="holder">
								<p>Twitter</p>
							</div>
						</div>
					</li>
					<?php endif; ?>
					<?php if($data['linkedin_link']): ?>
					<li class="linkedin"><a href="<?php echo $data['linkedin_link']; ?>">LinkedIn</a>
						<div class="popup">
							<div class="holder">
								<p>LinkedIn</p>
							</div>
						</div>
					</li>
					<?php endif; ?>
					<?php if($data['rss_link']): ?>
					<li class="rss"><a href="<?php echo $data['rss_link']; ?>">RSS</a>
						<div class="popup">
							<div class="holder">
								<p>RSS</p>
							</div>
						</div>
					</li>
					<?php endif; ?>
					<?php if($data['dribbble_link']): ?>
					<li class="dribbble"><a href="<?php echo $data['dribbble_link']; ?>">Dribbble</a>
						<div class="popup">
							<div class="holder">
								<p>Dribbble</p>
							</div>
						</div>
					</li>
					<?php endif; ?>
					<?php if($data['youtube_link']): ?>
					<li class="youtube"><a href="<?php echo $data['youtube_link']; ?>">Youtube</a>
						<div class="popup">
							<div class="holder">
								<p>Youtube</p>
							</div>
						</div>
					</li>
					<?php endif; ?>
					<?php if($data['pinterest_link']): ?>
					<li class="pinterest"><a href="<?php echo $data['pinterest_link']; ?>" class="pinterest">Pinterest</a>
						<div class="popup">
							<div class="holder">
								<p>Pinterest</p>
							</div>
						</div>
					</li>
					<?php endif; ?>
					<?php if($data['flickr_link']): ?>
					<li class="flickr"><a href="<?php echo $data['flickr_link']; ?>" class="flickr">Flickr</a>
						<div class="popup">
							<div class="holder">
								<p>Flickr</p>
							</div>
						</div>
					</li>
					<?php endif; ?>
					<?php if($data['vimeo_link']): ?>
					<li class="vimeo"><a href="<?php echo $data['vimeo_link']; ?>" class="vimeo">Vimeo</a>
						<div class="popup">
							<div class="holder">
								<p>Vimeo</p>
							</div>
						</div>
					</li>
					<?php endif; ?>
					<?php if($data['tumblr_link']): ?>
					<li class="tumblr"><a href="<?php echo $data['tumblr_link']; ?>" class="tumblr">Tumblr</a>
						<div class="popup">
							<div class="holder">
								<p>Tumblr</p>
							</div>
						</div>
					</li>
					<?php endif; ?>
					<?php if($data['google_link']): ?>
					<li class="google"><a href="<?php echo $data['google_link']; ?>" class="google">Google+</a>
						<div class="popup">
							<div class="holder">
								<p>Google</p>
							</div>
						</div>
					</li>
					<?php endif; ?>
					<?php if($data['digg_link']): ?>
					<li class="digg"><a href="<?php echo $data['digg_link']; ?>" class="digg">Digg</a>
						<div class="popup">
							<div class="holder">
								<p>Digg</p>
							</div>
						</div>
					</li>
					<?php endif; ?>
					<?php if($data['blogger_link']): ?>
					<li class="blogger"><a href="<?php echo $data['blogger_link']; ?>" class="blogger">Blogger</a>
						<div class="popup">
							<div class="holder">
								<p>Blogger</p>
							</div>
						</div>
					</li>
					<?php endif; ?>
					<?php if($data['skype_link']): ?>
					<li class="skype"><a href="<?php echo $data['skype_link']; ?>" class="skype">Skype</a>
						<div class="popup">
							<div class="holder">
								<p>Skype</p>
							</div>
						</div>
					</li>
					<?php endif; ?>
					<?php if($data['myspace_link']): ?>
					<li class="myspace"><a href="<?php echo $data['myspace_link']; ?>" class="myspace">Myspace</a>
						<div class="popup">
							<div class="holder">
								<p>Myspace</p>
							</div>
						</div>
					</li>
					<?php endif; ?>
					<?php if($data['deviantart_link']): ?>
					<li class="deviantart"><a href="<?php echo $data['deviantart_link']; ?>" class="deviantart">Deviantart</a>
						<div class="popup">
							<div class="holder">
								<p>Deviantart</p>
							</div>
						</div>
					</li>
					<?php endif; ?>
					<?php if($data['yahoo_link']): ?>
					<li class="yahoo"><a href="<?php echo $data['yahoo_link']; ?>" class="yahoo">Yahoo</a>
						<div class="popup">
							<div class="holder">
								<p>Yahoo</p>
							</div>
						</div>
					</li>
					<?php endif; ?>
					<?php if($data['reddit_link']): ?>
					<li class="reddit"><a href="<?php echo $data['reddit_link']; ?>" class="reddit">Reddit</a>
						<div class="popup">
							<div class="holder">
								<p>Reddit</p>
							</div>
						</div>
					</li>
					<?php endif; ?>
					<?php if($data['forrst_link']): ?>
					<li class="forrst"><a href="<?php echo $data['forrst_link']; ?>" class="forrst">Forrst</a>
						<div class="popup">
							<div class="holder">
								<p>Forrst</p>
							</div>
						</div>
					</li>
					<?php endif; ?>
					<?php if($data['custom_icon_name'] && $data['custom_icon_link'] && $data['custom_icon_image']): ?>
					<li class="custom"><a href="<?php echo $data['custom_icon_link']; ?>"><img src="<?php echo $data['custom_icon_image']; ?>" alt="<?php echo $data['custom_icon_name']; ?>" /></a>
						<div class="popup">
							<div class="holder">
								<p><?php echo $data['custom_icon_name']; ?></p>
							</div>
						</div>
					</li>
					<?php endif; ?>
				</ul>
				<?php endif; ?>
			</div>
			<?php if($data['header_number'] || $data['header_email']): ?>
			<div class="alignleft">
				<?php echo $data['header_number']; ?><?php if($data['header_number'] && $data['header_email']): ?><span class="sep">|</span><?php endif; ?><a href="mailto:<?php echo $data['header_email']; ?>"><?php echo $data['header_email']; ?></a>
			</div>
			<?php endif; ?>
		</div>
	</div>
	<header id="header">
		<div class="avada-row" style="margin-top:<?php echo $data['margin_header_top']; ?>;margin-bottom:<?php echo $data['margin_header_bottom']; ?>;">
			<div class="logo" style="margin-left:<?php echo $data['margin_logo_left']; ?>;"><a href="<?php bloginfo('url'); ?>"><img src="<?php echo $data['logo']; ?>" alt="<?php bloginfo('name'); ?>" /></a></div>
		</div>
	</header>
	<div id="small-nav">
		<div class="avada-row">
			<nav id="nav" class="nav-holder">
				<?php wp_nav_menu(array('theme_location' => 'main_navigation', 'depth' => 4, 'container' => false, 'menu_id' => 'nav')); ?>
			</nav>
		</div>
	</div>
</div>